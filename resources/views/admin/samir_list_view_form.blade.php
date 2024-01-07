@extends('admin.layout.app')
@section('content')

   <main id="main" class="main">

        <div class="pagetitle">
            <h1>Samir List</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
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
                                            {{-- <td>Action</td> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $key =>$value)
                                          <tr>
                                            <td>{{$key +1 }}</td>
                                            <td>{{$value->name}}</td>
                                            <td>{{$value->email}}</td>
                                            <td>{{$value->mobile}}</td>
                                        </tr>

                                        @endforeach

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
