@extends('admin.layout.app')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>View Form</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Test</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">

                        <!-- Sales Card -->
                        <div class="col-xxl-12">
                            <div class="card info-card sales-card p-3">
                                <form class="row" name="formData" onsubmit="return false;" method="POST">
                                    @csrf

                                    <div class="form-group col-6 mt-3 err_name">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Name">
                                        <small class="text-danger text-sm mt-2 errmsg errmsg_name"></small>
                                    </div>
                                    <div class="form-group col-6 mt-3 err_email">
                                        <label>email</label>
                                        <input type="text" name="email" class="form-control" placeholder="email">
                                        <small class="text-danger text-sm mt-2 errmsg errmsg_email"></small>
                                    </div>
                                    <div class="form-group col-6 mt-3 err_mobile">
                                        <label>Mobile</label>
                                        <input type="text" name="mobile" class="form-control" placeholder="Mobile">
                                        <small class="text-danger text-sm mt-2 errmsg errmsg_mobile"></small>
                                    </div>

                                    <div class="mt-4 col-12 text-end">
                                        <button type="submit" class="btn btn-primary mr-2 bg-red-600 hover:bg-red-700"
                                            id="submitData">Submit</button>
                                        </a>
                                    </div>

                                </form>
                            </div>
                        </div><!-- End Sales Card -->

                    </div>
                </div><!-- End Left side columns -->

            </div>
        </section>

    </main>
@endsection
@push('js')

<script>
    $('#submitData').on('click', function(e)
    {
        $('.errmsg').text('');
        $('input').removeClass('border-danger');
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
        });

        var form = document.formData;
        var formData = new FormData(form);
        var url = '{{ route('view_form_insert') }}';
        $.ajax({
                type: 'POST',
                url: url,
                processData: false,
                contentType: false,
                dataType: 'json',
                data: formData,
                dataSrc: "",
                beforeSend: function()
                {
                    //
                },
                complete: function(data, status)
                {
                    //
                },
                success: function(data)
                {
                if (data.status == 401)
                {
                    $.each(data.error1, function(index, value)
                    {
                        $('.err_' + index + ' input').addClass('border border-danger');
                        $('.err_' + index + ' select').addClass('border-danger');
                        $('.err_' + index + ' textarea').addClass('border border-danger');
                        $('.errmsg_'+index).text(value);
                    });
                }
                if (data.status == 1)
                {
                    window.location.href = data.redirect;
                    // $('.department_table').DataTable().draw(true);
                }
            }
        });
    });
</script>
@endpush
