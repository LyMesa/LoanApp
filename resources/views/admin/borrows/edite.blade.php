@extends('layouts.master_app')
@section('name')
Edite Borrow
@endsection
@section('page_header')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Edite</a></li>
                    <li class="breadcrumb-item active">Edite Borrow</li>
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
    <form action="{{ route('admin.borrrows.update', $borrow->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-name">Edite Borrow</h3>
                    </div>
                    <div class="row col-12">
                        <div class="col-8 p-2">
                            <p for="customername">CustomerName</p>
                            <input type="text" name="customername" value="{{ $borrow->customername }}" class="form-control" id="customername"
                                placeholder="Enter customername">
                        </div>
                            <div class="col-4 p-2">
                                <p for="bookcode">BookCode</p>
                                <input type="text" name="bookcode" value="{{ $borrow->bookcode }}" class="form-control"
                                    id="bookcode" placeholder="Enter bookcode">
                            </div>
                            <div class="col-6 p-2">
                                <p for="duedate">DueDate</p>
                                <input type="date" name="duedate" value="{{ $borrow->duedate }}" class="form-control"
                                    id="duedate" placeholder="Enter duedate">
                            </div>
                        <div class="col-6 p-2">
                            <p for="returndate">ReturnDate</p>
                            <input type="date" name="returndate" value="{{ $borrow->returndate }}" class="form-control"
                                id="returndate" placeholder="Enter returndate">
                        </div>
                        <div class="col-12 p-2">
                            <p for="fineamount">Fineamount</p>
                            <input type="text" name="fineamount" value="{{ $borrow->fineamount }}" class="form-control"
                                id="fineamount" placeholder="Enter fineamount">
                        </div>
                        <div class="col-12 p-2">
                            <p for="librarianname">LibrarianName</p>
                            <input type="text" name="librarianname" value="{{ $borrow->librarianname}}" class="form-control"
                                id="librarianname" placeholder="Enter librarianname">
                        </div>

                    </div>
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
                            <img src="{{ asset('storage/uploads/'.$borrow->image) }}" width="100%" alt="">
                            <label for="upload_file">File input</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="upload_file">
                                    <input type="hidden" name="old_image" value="{{ $borrow->image }}">
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
                        <a href="{{ route('admin.borrows') }}" class="btn btn-danger btn-block">Cancel</a>
                    </div>

                </div>
            </div>
        </div>
    </form>
</div>
@endsection
