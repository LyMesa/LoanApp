@extends('layouts.master_app')
@section('title')
    Welcome To Library
@endsection
@section('page_header')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashdoard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashdoard</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
@endsection
@section('content')
    <div class="container">
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-4 col-6">
                  <div class="small-box bg-info">
                    <div class="inner">
                      <h3>200</h3>

                      <p>Customer</p>
                    </div>
                    <div class="icon">
                        <i class="nav-icon fas fa-users"></i>
                    </div>
                    <a href="{{route('admin.customers')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-6">
                  <!-- small box -->
                  <div class="small-box bg-success">
                    <div class="inner">
                      <h3>300<sup style="font-size: 20px"></sup></h3>

                      <p>Books</p>
                    </div>
                    <div class="icon">
                        <i class="nav-icon fas fa-book"></i>
                    </div>
                    <a href="{{route('admin.books')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <div class="col-lg-4 col-6">
                  <div class="small-box bg-warning">
                    <div class="inner">
                      <h3>20</h3>

                      <p>Borrow</p>
                    </div>
                    <div class="icon">
                        <i class="nav-icon fas fa-user"></i>
                    </div>
                    <a href="{{route('admin.borrows')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
              </div>

          </section>
    </div>

@endsection
