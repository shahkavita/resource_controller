@extends('layout.main')
@section('title')
    Resouce Controller|Customer Details
@endsection
@section('main-content')
<main class="app-main"> <!--begin::App Content Header-->
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Customer Details</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="/index">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Customer Details
                        </li>
                    </ol>
                </div>
            </div> <!--end::Row-->
        </div> <!--end::Container-->
    </div> <!--end::App Content Header--> <!--begin::App Content-->
    
    <div class="app-content"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h3 class="card-title">Customer Details</h3>
                        </div> <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                       <th>Id</th> 
                                       <td>{{$data->c_id}}</td>
                                    </tr>
                                    <tr>
                                       <th>Name</th> 
                                       <td>{{$data->c_name}}</td>
                                    </tr>
                                    <tr>
                                       <th>Email Address</th> 
                                       <td>{{$data->c_email}}</td>
                                    </tr>
                                    <tr>
                                       <th>Phone Number</th> 
                                       <td>{{$data->c_phone}}</td>
                                    </tr>
                                    <tr>

                                       <th>Address</th> 
                                       <td>{{$data->c_address}}</td>
                                    </tr>
                                    <tr>
                                       <th>City</th> 
                                       <td>{{$data->c_city}}</td>
                                    </tr>
                                   
                                      <tr>    
                                            <td colspan="2" align="center"><a href="{{route('customerlist.index')}}" class="btn btn-dark">Back</a>
                                            </td>
                                      </tr>
                                </tbody>
                            </table>
                        </div> <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-end">
                              
                            </ul>
                        </div>
                       
                    </div> <!-- /.card -->
                   
                </div> <!-- /.col -->
                <!-- /.col -->
            </div> <!--end::Row-->
        </div> <!--end::Container-->
    </div> <!--end::App Content-->
</main>
@endsection