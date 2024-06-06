@extends('layouts.master_app')
@section('title')
Create Customer
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
                    <li class="breadcrumb-item active">Create Customer</li>
                </ol>
            </div>
        </div>
    </div>
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
        <form action="{{ route('admin.customers.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-8">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4 class="card-title">Create Customer</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                    <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                               <label for="sex" class="form-text">Sex</label>
                                    <select class="form-select col-12 p-2" name="sex">
                                        <option value="M">M</option>
                                        <option value="F">F</option>
                                    </select>
                            </div>
                            <div class="form-group">
                                <label for="dob">DOB</label>
                                <input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror" name="dob" value="{{ $dob ?? old('dob') }}" required autocomplete="dob" autofocus>
                                @error('dob')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="pob">POB</label>
                                <input id="pob" type="pob" class="form-control @error('pob') is-invalid @enderror" name="pob" value="{{ $pob ?? old('pob') }}" required autocomplete="pob" autofocus>
                                @error('pob')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $phone ?? old('phone') }}" required autocomplete="phone" autofocus>
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input id="address" type="address" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ $address ?? old('address') }}" required autocomplete="address" autofocus>
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- /.card-body -->

                    </div>

                </div>
                <div class="col-md-4">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4 class="card-title">Upload Avatar</h4>
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
