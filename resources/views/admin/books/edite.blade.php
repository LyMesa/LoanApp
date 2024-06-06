@extends('layouts.master_app')
@section('name')
Edite Book
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
                    <li class="breadcrumb-item active">Edite Book</li>
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
    <form action="{{ route('admin.books.update', $book->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-name">Edite Book</h3>
                    </div>
                    <div class="row col-12">
                        <div class="col-8 p-3">
                            <label for="bookcode">BookCode</label>
                            <input type="text" name="bookcode" value="{{ $book->bookcode }}" class="form-control" id="bookcode"
                                placeholder="Enter bookcode">
                        </div>
                            <div class="col-4 p-3">
                                <label for="catlogname">CatlogName</label>
                                <input id="catlogname" type="catlogname" class="form-control @error('catlogname') is-invalid @enderror" name="catlogname" value="{{ $catlogname ?? old('catlogname') }}" required autocomplete="catlogname" autofocus>
                                @error('catlogname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-6 p-2">
                                <label for="catlogcode">CatlogCode</label>
                                <input type="text" name="catlogcode" value="{{ $book->catlogcode }}" class="form-control"
                                    id="catlogcode" placeholder="Enter catlogcode">
                            </div>
                        <div class="col-6 p-2">
                            <label for="publisher">Publisher</label>
                            <input type="text" name="publisher" value="{{ $book->publisher }}" class="form-control"
                                id="publisher" placeholder="Enter publisher">
                        </div>
                        <div class="col-12 p-3">
                            <label for="description">Description</label>
                            <input type="text" name="description" value="{{ $book->description }}" class="form-control"
                                id="description" placeholder="Enter description">
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
                            <img src="{{ asset('storage/uploads/'.$book->image) }}" width="100%" alt="">
                            <label for="upload_file">File input</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="upload_file">
                                    <input type="hidden" name="old_image" value="{{ $book->image }}">
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
