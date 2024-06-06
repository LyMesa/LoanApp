@extends('layouts.master_app')
@section('title')
Borrow List
@endsection

@push('styles')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('admin_assets') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="{{ asset('admin_assets') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="{{ asset('admin_assets') }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endpush
@section('page_header')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Borrow List</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active">Borrow List</li>

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
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">List all Borrows</h3>
                <a class="btn btn-primary float-right" href="{{ route('admin.borrrows.create') }}">create</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>BookCode</th>
                            <th>DueDate</th>
                            <th>ReturnDate</th>
                            <th>Fineamount</th>
                            <th>LibriranName</th>
                            <th>Photo</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($borrows as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->customername }}</td>
                            <td>{{ $item->bookcode }}</td>
                            <td>{{ $item->duedate }}</td>
                            <td>{{ $item->returndate }}</td>
                            <td>{{ $item->fineamount }}</td>
                            <td>{{ $item->librarianname }}</td>
                            <td>

                                <img src="{{ asset('storage/uploads/'.$item->image) }}" width="50"
                                    class="img-thumbnail rounded-circle" alt="">
                            </td>
                            <td>
                                <form action="{{ route('admin.borrows.destroy',$item->id) }}" method="post">
                                    <a href="{{ route('admin.borrrows.show', $item->id) }}" class="btn btn-success"> <i
                                            class="fa fa-eye"></i></a>
                                    <a class="btn btn-primary" href="{{ route('admin.borrrows.edite',$item->id) }}"><i
                                            class="fa fa-edit"></i></a>
                                    @csrf
                                    {{-- @method('DELETE') --}}
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                </form>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>

@endsection

@push('scripts')
<!-- DataTables  & Plugins -->
<script src="{{ asset('admin_assets') }}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('admin_assets') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('admin_assets') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('admin_assets') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{ asset('admin_assets') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('admin_assets') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{ asset('admin_assets') }}/plugins/jszip/jszip.min.js"></script>
<script src="{{ asset('admin_assets') }}/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{ asset('admin_assets') }}/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{ asset('admin_assets') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{ asset('admin_assets') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{ asset('admin_assets') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
</script>
@endpush
