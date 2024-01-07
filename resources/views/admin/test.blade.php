@extends('admin.layout.app')
@section('content')
<main id="main" class="main">

        <div class="pagetitle">
            <h1>Test</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
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
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <td>No</td>
                                            <td>Name</td>
                                            <td>Email</td>
                                            <td>Mobile No</td>
                                            <td>Action</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Samir</td>
                                            <td>samir@gmail.com</td>
                                            <td>1234567890</td>
                                            <td><button class="btn btn-sm btn-success mx-2">Edit</button><button class="btn btn-sm btn-danger">Delete</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div><!-- End Sales Card -->

                    </div>
                </div><!-- End Left side columns -->

            </div>
        </section>

    </main>
@endsection
@push('js')
@endpush
