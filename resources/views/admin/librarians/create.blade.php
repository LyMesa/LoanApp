@extends('layouts.master_app')
@section('title')
Create Library
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
                    <li class="breadcrumb-item active">Create Library</li>
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
        <form action="{{ route('admin.librarians.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Library Info</h3>
                        </div>

                        <div class="row col-12">
                            <div class="col-8 p-3">
                                <p for="name">Name</p>
                                    <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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
                                <input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror" name="dob" value="{{ $dob ?? old('dob') }}" required autocomplete="dob" autofocus>
                                @error('dob')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-6 p-2">
                                <p for="pob">POB</p>
                                <input id="pob" type="pob" class="form-control @error('pob') is-invalid @enderror" name="pob" value="{{ $pob ?? old('pob') }}" required autocomplete="pob" autofocus>
                                @error('pob')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12 p-2">
                                <p for="phone">Phone</p>
                                <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $phone ?? old('phone') }}" required autocomplete="phone" autofocus>
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12 p-2">
                                <p for="code">Librarian Code</p>
                                <input id="code" type="code" class="form-control @error('code') is-invalid @enderror" name="code" value="{{ $code ?? old('code') }}" required autocomplete="code" autofocus>
                                @error('code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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
                            <a href="{{ route('admin.librarians') }}" class="btn btn-danger btn-block">Cancel</a>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
