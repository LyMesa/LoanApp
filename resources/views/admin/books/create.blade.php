@extends('layouts.master_app')
@section('title')
Create Book
@endsection
@section('page_header')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h4>Create Book</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Create Book</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
@endsection
@section('content')
    <div class="col-md-12">
        <form action="{{ route('admin.books.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Book Info</h3>
                        </div>

                        <div class="row col-12 p-4">
                            <div class="col-8">
                                <p for="bookcode">BookCode</p>
                                <input type="text" name="bookcode" class="form-control" id="bookcode"
                                    placeholder="Enter bookcode">
                            </div>
                            <div class="col-4">
                                <p for="catlogname">CatlogName</p>
                                <input id="catlogname" type="catlogname" class="form-control @error('catlogname') is-invalid @enderror" name="catlogname" value="{{ $catlogname ?? old('catlogname') }}" required autocomplete="catlogname" autofocus>
                                @error('catlogname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-6 p-2">
                                <p for="catlogcode">CatlogCode</p>
                                <input type="text" name="catlogcode" class="form-control" id="catlogcode"
                                    placeholder="Enter catlogcode">
                            </div>
                            <div class="col-6 p-2">
                                <p for="publisher">Publisher</p>
                                <input type="text" name="publisher" class="form-control" id="publisher"
                                    placeholder="Enter publisher">
                            </div>
                            <div class="col-12 p-2">
                                <p for="description">Description</p>
                                <input type="text" name="description" class="form-control" id="description"
                                    placeholder="Enter description">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Upload Photo</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        <div class="card-body col-12">
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
                            <div class="p-3">
                                <button type="submit" class="btn btn-success btn-block">Save</button>
                                <a href="{{ route('admin.books') }}" class="btn btn-danger btn-block">Cancel</a>
                            </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
