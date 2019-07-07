<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="img/favicon.png" type="image/png" />
    <title>BPSMB Provinsi Kalsel</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('vendor/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('vendor/css/flaticon.css')}}" />
    <link rel="stylesheet" href="{{asset('vendor/css/themify-icons.css')}}" />
    <link rel="stylesheet" href="{{asset('vendor/vendors/owl-carousel/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('vendor/vendors/nice-select/css/nice-select.css')}}" />
    <!-- main css -->
    <link rel="stylesheet" href="{{asset('vendor/css/style.css')}}" />
</head>

<body>
    <!--================ Start Header Menu Area =================-->
    <header class="header_area white-header">
        <div class="main_menu">

            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand" href="#">
                        <img class="logo-2" src="vendor/img/logo2.png" alt="" />
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span> <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#home">Home</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="#pelayanan">Pelayanan</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="#retribusi">Info Retribusi</a>
                            </li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">Blog</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Blog Details</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ Route('login') }}">Login</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--================ End Header Menu Area =================-->

    <section class="banner_area" id="home">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="banner_content text-center">
                            <h2>APLIKASI PELAYANAN BPSMB</h2>
                            <h3 style="color:white;">Provinsi Kalimantan Selatan</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about_area section_gap">
      <div class="container">
        <div class="row h_blog_item">
          <div class="col-lg-6">
            <div class="h_blog_img">
              <img class="img-fluid" src="vendor/img/about.png" alt="" />
            </div>
          </div>
          <div class="col-lg-6">
            <div class="h_blog_text">
              <div class="h_blog_text_inner left right">
                <h4>Tentang BPSMB</h4>
                <p>
                  Subdue whales void god which living don't midst lesser
                  yielding over lights whose. Cattle greater brought sixth fly
                  den dry good tree isn't seed stars were.
                </p>
                <p>
                  Subdue whales void god which living don't midst lesser yieldi
                  over lights whose. Cattle greater brought sixth fly den dry
                  good tree isn't seed stars were the boring.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ End About Area =================-->
    <!--================ Start Events Area =================-->
    <div class="events_area" id="pelayanan">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="main_title">
                        <h2 class="mb-3 text-white">Pelayanan</h2>
                        <p>
                            Macam-macam Pelayanan yang ada pada pada Balai Sertifikasi dan Pengujian Mutu Barang
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="single_event position-relative">
                        <div class="event_thumb">
                            <img src="vendor/img/event/Pengujian.jpg" alt="" width="675" />
                        </div>
                        <div class="event_details">
                            <div class="d-flex mb-4">
                                <h4 style="color:white;">Laboratorium Pengujian</h4>
                            </div>
                            <p>
                                Melaksanakan Pelayanan Teknis Pengujian Komoditi.
                            </p>
                            <a href="#" class="primary-btn rounded-0 mt-3">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single_event position-relative">
                        <div class="event_thumb">
                            <img src="vendor/img/event/Kalibrasi.jpg" alt="" />
                        </div>
                        <div class="event_details">
                            <div class="d-flex mb-4">
                                <h4 style="color:white;">Laboratorium Kalibrasi</h4>
                            </div>
                            <p>
                                Melaksanakan Pelayanan Teknis Kalibrasi Alat Ukur
                            </p>
                            <a href="#" class="primary-btn rounded-0 mt-3">View Details</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="text-center pt-lg-5 pt-3">
                        <a href="#" class="event-link">
                            View All Event <img src="vendor/img/next.png" alt="" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="popular_courses" style="margin-top:100px;" id="retribusi">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="main_title">
                        <h2 class="mb-3">Retribusi Kalibrasi</h2>
                        <p>
                            Daftar Harga Teknis Kalibrasi Alat Ukur
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- single course -->

                <div class="col-lg-12">

                    <div class="owl-carousel active_course">
                            @foreach ($retribusi_k as $k)
                        <div class="single_course">

                            <div class="course_content">
                                <span class="tag mb-4 d-inline-block">{{ $k->rentang_ukur }}</span>
                                <h4 class="mb-3">
                                    <a href="#">{{ $k->nama }}</a>
                                </h4>
                                <p>
                                    {{ $k->keterangan }}
                                </p>
                                <div
                                    class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                    <div class="authr_meta">
                                        <img src="vendor/img/courses/author1.png" alt="" />
                                        <span class="d-inline-block ml-2">IDR {{ $k->biaya }}</span>
                                    </div>
                                    {{-- <div class="mt-lg-0 mt-3">
                                        <span class="meta_info mr-4">
                                            <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                                        </span>
                                        <span class="meta_info"><a href="#"> <i class="ti-heart mr-2"></i>35 </a></span>
                                    </div> --}}
                                </div>
                            </div>

                        </div>
                        @endforeach

                    </div>

                </div>
            </div>
        </div>
    </div>
{{-- </div> --}}
        <div class="container" style="margin-top:50px">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="main_title">
                        <h2 class="mb-3">Retribusi Pengujian</h2>
                        <p>
                            Daftar Harga Teknis Pengujian Komoditi
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- single course -->
                <div class="col-lg-12">
                    <div class="owl-carousel active_course">
                        @foreach ($retribusi_p as $k)
                        <div class="single_course">

                            <div class="course_content">
                                <span class="tag mb-4 d-inline-block">Pengujian</span>
                                <h4 class="mb-3">
                                    <a href="#">{{ $k->komoditi }}</a>
                                </h4>
                                <p>
                                    {{ $k->keterangan }}
                                </p>
                                <div
                                    class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                    <div class="authr_meta">
                                        <img src="vendor/img/courses/author1.png" alt="" />
                                        <span class="d-inline-block ml-2">IDR {{ $k->biaya }}</span>
                                    </div>
                                    {{-- <div class="mt-lg-0 mt-3">
                                        <span class="meta_info mr-4">
                                            <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                                        </span>
                                        <span class="meta_info"><a href="#"> <i class="ti-heart mr-2"></i>35 </a></span>
                                    </div> --}}
                                </div>
                            </div>

                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================ End Popular Courses Area =================-->

    <!--================ Start footer Area  =================-->
    <footer class="footer-area section_gap">
        <div class="container">
            <div class="row footer-bottom d-flex justify-content-between">
                <p class="col-lg-8 col-sm-12 footer-text m-0 text-white">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());

                    </script> All rights reserved | This template is made with <i class="ti-heart"
                        aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
                <div class="col-lg-4 col-sm-12 footer-social">
                    <a href="#"><i class="ti-facebook"></i></a>
                    <a href="#"><i class="ti-twitter"></i></a>
                    <a href="#"><i class="ti-dribbble"></i></a>
                    <a href="#"><i class="ti-linkedin"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!--================ End footer Area  =================-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('vendor/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('vendor/js/popper.js')}}"></script>
    <script src="{{asset('vendor/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('vendor/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('vendor/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('vendor/js/owl-carousel-thumb.min.js')}}"></script>
    <script src="{{asset('vendor/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('vendor/js/mail-script.js')}}"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="{{asset('vendor/js/gmaps.min.js')}}"></script>
    <script src="{{asset('vendor/js/theme.js')}}"></script>
</body>

</html>
