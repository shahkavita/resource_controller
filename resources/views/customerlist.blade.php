@extends('layout.main')
@section('title')
    Resouce Controller|Customer List
@endsection
@section('main-content')
<main class="app-main"> <!--begin::App Content Header-->
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Customer List</h3>
                    <h3 class="mb-0"><a href="{{route('customerlist.create')}}" class="btn btn-warning"> <i class="bi bi-person-fill-add" style="font-size: 20px"></i> Add Customer</a></h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="/index">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Customer List
                        </li>
                    </ol>
                </div>
            </div> <!--end::Row-->
        </div> <!--end::Container-->
    </div> <!--end::App Content Header--> <!--begin::App Content-->
    
    <div class="app-content"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-6">
                        <div class="card-header">
                            <h3 class="card-title">Customer List</h3>
                        </div> <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Name</th>
                                        <th style="width:80px">Email</th>
                                       
                                        <th>Phone</th>
                                        <th style="width:220px">Address</th>
                                        <th style="width:80px">City</th>
                                        
                                        <th align="center" style="width:60px"colspan="3">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $d=>$s1)
                                    <tr class="align-middle">
                                        <td>{{$s1->c_id}}</td>
                                        <td>{{$s1->c_name}}</td>
                                        <td>{{$s1->c_email}}</td>
                                        <td>{{$s1->c_phone}}</td>
                                        <td>{{$s1->c_address}}</td>
                                        <td>{{$s1->c_city}}</td>
                                       <td>
                                        <form action="{{route('customerlist.destroy',$s1->c_id)}}" method="POST">
                                            <a href="{{route('customerlist.edit',$s1->c_id)}}" class="btn btn-primary btn-sm">Edit</a>
                                            <a href="{{route('customerlist.show',$s1->c_id)}}" class="btn btn-info btn-sm">View</a>
                                            @csrf
                                            @method('delete')
                                            <button type="submit" onclick="return confirm('Do Really want to delete?')" class="btn btn-danger btn-sm">Delete</button>  
                                        </form>
                                        </td>
                                    
                                    </tr>    
                                    @endforeach
                                    
                                </tbody>
                            </table>
                        </div> <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-end">
                                {{$data->links()}}
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