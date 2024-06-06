@extends('layouts.master_app')
@section('name')
Edite Library
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
                    <li class="breadcrumb-item active">Edite Library</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
@endsection
@section('content')
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif
<div class="col-md-12">
    <form action="{{ route('admin.librarians.update', $library->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-name">Edite Library</h3>
                    </div>
                    <div class="row col-12">
                        <div class="col-8 p-3">
                            <p for="name">Name</p>
                            <input type="text" name="name" value="{{ $library->name }}" class="form-control" id="name"
                                placeholder="Enter name">
                        </div>
                        <div class="col-4 p-2">
                            <div class="form-group">
                                <p for="sex" class="form-text">Sex</p>
                                     <select class="form-select col-12 p-2" name="sex">
                                         <option value="M">M</option>
                                         <option value="F">F</option>
                                     </select>
                             </div>
                        </div>
                            <div class="col-6 p-2">
                                <p for="dob">DOB</p>
                                <input type="date" name="dob" value="{{ $library->dob }}" class="form-control"
                                    id="dob" placeholder="Enter dob">
                            </div>
                        <div class="col-6 p-2">
                            <p for="pob">POB</p>
                            <input type="text" name="pob" value="{{ $library->pob }}" class="form-control"
                                id="pob" placeholder="Enter pob">
                        </div>
                        <div class="col-12 p-2">
                            <p for="phone">Phone</p>
                            <input type="text" name="phone" value="{{ $library->phone }}" class="form-control"
                                id="phone" placeholder="Enter phone">
                        </div>
                        <div class="col-12 p-2">
                            <p for="code">Librarian Code</p>
                            <input type="text" name="code" value="{{ $library->code}}" class="form-control"
                                id="code" placeholder="Enter Code">
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
                            <img src="{{ asset('storage/uploads/'.$library->image) }}" width="100%" alt="">
                            <label for="upload_file">File input</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="upload_file">
                                    <input type="hidden" name="old_image" value="{{ $library->image }}">
                                    <label class="custom-file-label" for="upload_file">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="p-3">
                        <button type="submit" class="btn btn-success btn-block">Save</button>
                        <a href="{{ route('admin.librarians') }}" class="btn btn-danger btn-block">Cancel</a>
                    </div>

                </div>
            </div>
        </div>
    </form>
</div>
@endsection
