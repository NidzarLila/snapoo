<header>
    <div class="header-area">
        <div class="main-header ">
            <div class="header-top top-bg d-none d-lg-block">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-8">
                            <div class="header-info-left">
                                <ul>
                                    <li>sanposnap@gmail.com</li>
                                    <li>08529312876</li>
                                    <li>Daerah istimewa Yogyakarta</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="header-info-right f-right">
                                <ul class="header-social">
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li> <a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                                <div class="my-md-0 ml-lg-4 mt-4 mt-lg-0 ml-auto text-lg-right mb-3 mb-lg-0">
                                    @if(auth()->check())
                                    <!-- Dropdown untuk profil -->
                                    <div class="dropdown">
                                        <i class="fas fa-user-circle dropdown-toggle" style="font-size: 30px; cursor: pointer; color: blue;" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                              <span class="ml-2">{{ auth()->user()->nama }}</span> 
                                              <!-- <a class="dropdown-item" href="{{ url('profile') }}">Profile</a> -->
                                            <a class="dropdown-item" href="{{ url('riwayat') }}">Riwayat Transaksi</a>
                                            <a class="dropdown-item" href="{{ url('logout') }}">Logout</a>
                                        </div>
                                    </div>
                                  <!-- Menampilkan nama pengguna -->
                                    @else
                                    <a href="{{url('loginn')}}" class="btn btn-main">Login</a>
                                    @endif
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom  header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo">
                                <a href="/"><img src="{{asset('user/assets/img/snapo.png')}}" alt=""></a>
                            </div>
                        </div>
                        <!-- <div class="col-xl-10 col-lg-10 col-md-10">
                          
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="/">Home</a></li>
                                        <li><a href="/">About US</a></li>
                                        <li><a href="/">Package</a></li>
                                        <li><a href="blog.html">Blog</a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="single-blog.html">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Pages</a>
                                            <ul class="submenu">
                                                <li><a href="elements.html">Element</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div> -->
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>