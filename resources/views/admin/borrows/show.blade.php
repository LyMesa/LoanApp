@extends('layouts.master_app')
@section('name')
View Borrow
@endsection
@section('page_header')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Show</a></li>
                    <li class="breadcrumb-item active">View Borrow</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
@endsection
    @section('content')
    <div class="col-md-12">
        <form action="{{ route('admin.borrrows.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4 class="card-name">View Borrow</h4>
                        </div>
                        <div class="row col-12">
                            <div class="col-8 p-2">
                                <p for="customername">CustomerName</p>
                                <input type="text" name="customername" value="{{ $borrow->customername }}" class="form-control" id="customername"
                                    placeholder="Enter customername">
                            </div>
                            <div class="col-4 p-2">
                                <p for="bookcode">BookCode</p>
                                <input type="text" name="description" value="{{ $borrow->bookcode }}" class="form-control"
                                    id="bookcode" placeholder="Enter bookcode">
                            </div>
                            <div class="col-6 p-2">
                                <p for="duedate">DueDate</p>
                                <input type="date" name="description" value="{{ $borrow->duedate }}" class="form-control"
                                    id="duedate" placeholder="Enter duedate">
                            </div>
                            <div class="col-6 p-2">
                                <p for="reurndate">ReturnDate</p>
                                <input type="date" name="description" value="{{ $borrow->returndate }}" class="form-control"
                                    id="reurndate" placeholder="Enter reurndate">
                            </div>
                             <div class="col-12 p-2">
                                <p for="fineamount">Fineamount</p>
                                <input type="text" name="fineamount" value="{{ $borrow->fineamount }}" class="form-control"
                                    id="fineamount" placeholder="Enter fineamount">
                            </div>
                            <div class="col-12 p-2">
                                <p for="librarianname">LibrarianName</p>
                                <input type="text" name="librarianname" value="{{ $borrow->librarianname }}" class="form-control"
                                    id="librarianname" placeholder="Enter Code">
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
                                <a href="{{ route('admin.borrows') }}" class="btn btn-danger btn-block">Cancel</a>
                            </div>
                    </div>
                </div>
            </div>
        </form>
   </div>
@endsection
