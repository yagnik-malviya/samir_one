@extends('admin.layout.app')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>View Form</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Samir View Form</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->


        <form name="formData" onsubmit="return false;" method="POST">
             @csrf

            <div class="mb-3 err_name">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter your Name">
                <small class="text-danger text-sm mt-2 errmsg errmsg_name"></small>


            </div>
            <div class="mb-3 err_email">
                <label for="" class="form-label">Email</label>
                <input type="text" class="form-control" name="email" id="email" placeholder="Enter your  Email">
                <small class="text-danger text-sm mt-2 errmsg errmsg_email"></small>
            </div>
           <div class="mb-3 err_mobile">
                <label for="" class="form-label">Mobille</label>
                <input type="text" class="form-control" id="Mobille" name="mobile" placeholder="Enter your mobile number">
                <small class="text-danger text-sm mt-2 errmsg errmsg_mobile"></small>
            </div>
            <button type="submit" class="btn btn-primary" id="submitData">Submit</button>
        </form>
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
        var url = '{{ route('samir_view_form_insert') }}';
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
