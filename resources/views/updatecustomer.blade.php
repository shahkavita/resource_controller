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
                    <h3 class="mb-0">Add Customer</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="/index">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Add Customer
                        </li>
                    </ol>
                </div>
            </div> <!--end::Row-->
        </div> <!--end::Container-->
    </div> <!--end::App Content Header--> <!--begin::App Content-->
    
    <div class="app-content"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-md-8">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h3 class="card-title">Add Customer</h3>
                        </div> <!-- /.card-header -->
                        <div class="card-body">
                            <form method="POST" action="{{route('customerlist.update',$s1->c_id)}}">
                                @csrf
                                @method('put')
                                <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-outline mb-2">
                                        <input type="text" id="name"  name="name" class="form-control" value="{{$s1->c_name}}" />
                                        <label class="form-label" for="typeEmailX-2">Name</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                <div class="form-outline mb-2">
                                    <input type="email" id="email" name="email" class="form-control" value="{{$s1->c_email}}" />
                                    <label class="form-label" for="typeEmailX-2">Email</label>
                                  </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                  <div class="form-outline mb-2">
                                    <input type="tel" id="phone" name="phone" class="form-control" value="{{$s1->c_phone}}" />
                                    <label class="form-label" for="typeEmailX-2">Phone</label>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-outline mb-2">
                                    <select name="city" id="city" class="form-control">
                                        <option value="Ahmedabad"{{$s1->c_city =='Ahmedabad'?'selected':''}}>Ahmedabad</option>
                                        <option value="Surat" {{$s1->c_city == 'Surat'?'selected':''}}>Surat</option>
                                        <option value="Gandhinagar" {{$s1->c_city == 'Gandhinagar'?'selected':''}}>Gandhinagar</option>
                                        <option value="Vapi" {{$s1->c_city == 'Vapi'?'selected':''}}>Vapi</option>
                                   </select>
                                   <label class="form-label" for="typeEmailX-2">City</label>
                                
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-10">
                                  <div class="form-outline mb-2">
                                    <textarea  id="address" name="address" class="form-control">
                                        {{$s1->c_address}}
                                    </textarea>
                                    <label class="form-label" for="typeEmailX-2">Address</label>
                                 </div>
                                </div>
                                </div>
                                <div class="form-outline mb-2">
                                    <input type="submit" name="Submit" class="btn btn-dark"/>
                                    <input type="reset"  name="Clear" class="btn btn-danger"/>

                                  </div>
                                  <!-- Checkbox -->
                                  </form>           
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