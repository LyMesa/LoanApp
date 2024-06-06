@extends('layouts.master_app')
@section('name')
View Custmoer
@endsection
@section('page_header')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">

            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">View Customer</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
@endsection
    @section('content')
    <div class="col-md-12">
        <form action="{{ route('admin.customers.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-8">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4 class="card-name">View Cutomer</h4>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" value="{{ $customer->name }}" class="form-control" id="name"
                                    placeholder="Enter Service name">
                            </div>
                            <div class="form-group">
                                <label for="sex">Sex</label>
                                <input type="text" name="sex" value="{{ $customer->sex }}" class="form-control"
                                    id="sex" placeholder="Enter Sex">
                            </div>
                            <div class="form-group">
                                <label for="dob">DOB</label>
                                <input type="date" name="dob" value="{{ $customer->dob }}" class="form-control"
                                    id="dob" placeholder="Enter DOB">
                            </div>
                            <div class="form-group">
                                <label for="pob">POB</label>
                                <input type="text" name="pob" value="{{ $customer->pob }}" class="form-control"
                                    id="pob" placeholder="Enter POB">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" value="{{ $customer->phone }}" class="form-control"
                                    id="phone" placeholder="Enter Phone">
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" name="address" value="{{ $customer->address }}" class="form-control"
                                    id="address" placeholder="Enter Address">
                            </div>

                        </div>
                        <!-- /.card-body -->

                    </div>

                </div>
                <div class="col-md-4">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4 class="card-name">Upload Avatar</h4>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        <div class="card-body">
                            <div class="form-group">
                                <label for="upload_file">File input</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input" id="upload_file">
                                        <label class="custom-file-label" for="upload_file">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-success btn-block">Save</button>
                            <a href="{{ route('admin.customers') }}" class="btn btn-danger btn-block">Cancel</a>
                        </div>

                    </div>
                </div>
            </div>
        </form>
   </div>
@endsection
