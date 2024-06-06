@extends('layouts.master_app')
@section('title')
Package List
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
                <h1>Package List</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Package List</li>

                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
@endsection
@section('content')

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">List all Package</h3>
                <a class="btn btn-primary float-right" href="{{ route('admin.services.create') }}">create</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Avatar</th>
                            <th>Status</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($services as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->description }}</td>
                            <td>
                                <img src="{{ asset('storage/uploads/'.$item->image) }}" width="50"
                                    class="img-thumbnail rounded-circle" alt="">
                            </td>
                            <td> {{ $item->status }}</td>
                            <td>
                                <form action="{{ route('admin.services.destroy',$item->id) }}" method="post">
                                    <a href="{{ route('admin.services.show', $item->id) }}" class="btn btn-success"> <i
                                            class="fa fa-eye"></i></a>
                                    <a class="btn btn-primary" href="{{ route('admin.services.edite',$item->id) }}"><i
                                            class="fa fa-edit"></i></a>
                                    @csrf
                                    {{-- @method('DELETE') --}}
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                </form>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>CODE</th>
                            <th>Location</th>
                            <th>Duration</th>
                            <th>Guests</th>
                            <th>Amount</th>
                            <th>Options</th>
                        </tr>
                    </tfoot>
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
