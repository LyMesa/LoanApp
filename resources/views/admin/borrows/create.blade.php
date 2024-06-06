@extends('layouts.master_app')
@section('title')
Create Borrow
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
                    <li class="breadcrumb-item active">Create Borrow</li>
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
                <form action="{{ route('admin.borrrows.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Borrow Info</h3>
                                </div>

                                <div class="row col-12">
                                    <div class="col-8 p-2">
                                        <label for="customername">CustomerName</label>
                                        <input id="customername" type="customername" class="form-control @error('customername') is-invalid @enderror" name="customername" value="{{ $customername ?? old('customername') }}" required autocomplete="customername" autofocus>
                                        @error('customername')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-4 p-2">
                                        <label for="bookcode">BookCode</label>
                                        <input id="bookcode" type="bookcode" class="form-control @error('bookcode') is-invalid @enderror" name="bookcode" value="{{ $bookcode ?? old('bookcode') }}" required autocomplete="bookcode" autofocus>
                                        @error('bookcode')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-6 p-2">
                                        <label for="duedate">DueDate</label>
                                        <input id="duedate" type="date" class="form-control @error('duedate') is-invalid @enderror" name="duedate" value="{{ $duedate ?? old('duedate') }}" required autocomplete="duedate" autofocus>
                                        @error('duedate')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-6 p-2">
                                        <label for="returndate">ReturnDate</label>
                                        <input id="returndate" type="date" class="form-control @error('returndate') is-invalid @enderror" name="returndate" value="{{ $returndate ?? old('returndate') }}" required autocomplete="returndate" autofocus>
                                        @error('returndate')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-12 p-2">
                                        <label for="fineamount">Fineamount</label>
                                        <input id="fineamount" type="fineamount" class="form-control @error('fineamount') is-invalid @enderror" name="fineamount" value="{{ $fineamount ?? old('fineamount') }}" required autocomplete="fineamount" autofocus>
                                        @error('fineamount')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-12 p-2">
                                        <label for="librarianname">LibrarianName</label>
                                        <input id="librarianname" type="librarianname" class="form-control @error('librarianname') is-invalid @enderror" name="librarianname" value="{{ $librarianname ?? old('librarianname') }}" required autocomplete="librarianname" autofocus>
                                        @error('librarianname')
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
                                        <a href="{{ route('admin.borrows') }}" class="btn btn-danger btn-block">Cancel</a>
                                    </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
 @endsection
