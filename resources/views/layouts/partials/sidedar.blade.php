<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ asset('admin_assets')}}/index3.html" class="brand-link">
        <img src="{{ asset('admin_assets')}}/dist/img/iconbooks2.jpg" alt="AdminBBU Logo"
            class="brand-image img-circle elevation-12" style="opacity: .8">
        <span class="brand-text font-weight-light"><h6>LIBRARY OF CAMBODIA</h6></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{route('home')}}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                     <a href="{{route('admin.customers')}}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Customer
                        </p>
                    </a>
                </li>
                  <li class="nav-item">
                     <a href="{{route('admin.librarians')}}" class="nav-link">
                        <i class="nav-icon fas fa-landmark"></i>
                        <p>
                            Librarian
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.books')}}" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Books
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('admin.borrows')}}" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Borrow
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
