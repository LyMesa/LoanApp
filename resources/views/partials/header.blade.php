<div class="container d-flex align-items-center justify-content-lg-between">

    <h1 class="logo me-auto me-lg-0"><a href="index.html">Gp<span>.</span></a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

    <nav id="navbar" class="navbar order-last order-lg-0">
      <ul>
            <li><a class="nav-link scrollto active" href="#hero">{{trans('menu.home')}}</a></li>
            <li><a class="nav-link scrollto" href="#about">{{trans('menu.about')}}</a></li>
            <li><a class="nav-link scrollto" href="#services">{{trans('menu.services')}}</a></li>
            <li><a class="nav-link scrollto " href="#portfolio">{{trans('menu.portfolio')}}</a></li>
            <li><a class="nav-link scrollto" href="#team">{{trans('menu.team')}}</a></li>
            <li class="dropdown"><a href="#"><span>{{trans('menu.computerscience')}}</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                    <li><a href="#">Business software</a></li>
                        <li class="dropdown"><a href="#"><span>Resources</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">Business strategies</a></li>
                                <li><a href="#">Career resources</a></li>
                                <li><a href="#">Emerging tech</a></li>
                                <li><a href="#">Tech explainers</a></li>
                            </ul>
                        </li>
                    <li><a href="#">Cloud computing</a></li>
                    <li><a href="#">Data analytics and AI</a></li>
                    <li><a href="#">Data centers</a></li>
                    <li><a href="#">IT management</a></li>
                    <li><a href="#">Networking</a></li>
                    <li><a href="#">Security</a></li>
                </ul>
            </li>
             <li><a class="nav-link scrollto" href="#contact">{{trans('menu.contact')}}</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->
            <?php
                $flag = app()->getlocale();
                if($flag=="en"){
                    $flag="us";
                }
            ?>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle
                " data-bs-toggle="dropdown"><i
                    class="flag-icon flag-icon-{{ $flag=='kh'?'kh':'' }}{{ $flag=='us'?'us':'' }} mr-2"></i> {{
                $flag=='kh'?'ភាសាខ្មែរ':'' }}{{
                $flag=='us'?"English":'' }}</a>
                <div class="dropdown-menu m-0">
                    <a href="{{url('lang/kh')}}" class="dropdown-item {{ $flag=='kh'?'active':'' }}
                        "><i class="flag-icon flag-icon-kh mr-2"></i> ភាសាខ្មែរ</a>
                    <a href="{{url('lang/en')}}" class="dropdown-item {{ $flag=='us'?'active':'' }}"><i
                        class="flag-icon flag-icon-us mr-2"></i> English</a>
                </div>
            </div>
    <a href="{{route('login')}}" class="get-started-btn scrollto">Login</a>

</div>
