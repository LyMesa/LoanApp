@extends('layouts.master_app')
@section('name')
View Library
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
                    <li class="breadcrumb-item active">View Library</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
@endsection
    @section('content')
    <div class="col-md-12">
        <form action="{{ route('admin.librarians.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4 class="card-name">View Library</h4>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        <div class="row col-12">
                            <div class="col-8 p-2">
                                <p for="name">Name</p>
                                <input type="text" name="name" value="{{ $library->name }}" class="form-control" id="name"
                                    placeholder="Enter name">
                            </div>
                            <div class="col-4 p-2">
                                <p for="sex">Sex</p>
                                <input type="text" name="description" value="{{ $library->sex }}" class="form-control"
                                    id="sex" placeholder="Enter sex">
                            </div>
                            <div class="col-6 p-2">
                                <p for="dob">DOB</p>
                                <input type="date" name="description" value="{{ $library->dob }}" class="form-control"
                                    id="dob" placeholder="Enter dob">
                            </div>
                            <div class="col-6 p-2">
                                <p for="pob">POB</p>
                                <input type="text" name="description" value="{{ $library->pob }}" class="form-control"
                                    id="pob" placeholder="Enter pob">
                            </div>
                             <div class="col-12 p-2">
                                <p for="phone">Phone</p>
                                <input type="text" name="phone" value="{{ $library->phone }}" class="form-control"
                                    id="phone" placeholder="Enter phone">
                            </div>
                            <div class="col-12 p-2">
                                <p for="address">Librarian Code</p>
                                <input type="text" name="address" value="{{ $library->code }}" class="form-control"
                                    id="address" placeholder="Enter Code">
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-name">Upload Photo</h3>
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

                        <div class="p-4">
                            <button type="submit" class="btn btn-success btn-block">Save</button>
                            <a href="{{ route('admin.librarians') }}" class="btn btn-danger btn-block">Cancel</a>
                        </div>

                    </div>
                </div>
            </div>
        </form>
   </div>
@endsection
