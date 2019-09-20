<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Aplikasi Pelayanan BPSMB Kalsel</title>
    <title>BPSMB KALSEL</title>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
     <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

     <!-- Favicon icon -->
<link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
<link rel="icon" href="{{asset('assets/images/logo_pemprov.png')}}" type="image/x-icon">
<link rel="shortcut icon" href="{{asset('vendor/img/logo_pemprov.png')}}" type="image/x-icon">
<link rel="icon" href="{{asset('vendor/img/logo_pemprov.png')}}" type="image/x-icon">

     <!-- Google font-->
     <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

     <!-- iconfont -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/icon/icofont/css/icofont.css')}}">

     <!-- simple line icon -->
     <link rel="stylesheet" type="text/css" href="{{asset('assets/icon/simple-line-icons/css/simple-line-icons.css')}}">
     <!-- Required Fremwork -->
     <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">
     <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-datetimepicker.min.css')}}">
     <!-- Style.css -->
     <link rel="stylesheet" type="text/css" href="{{asset('assets/css/main.css')}}">
     <!-- Responsive.css-->
     <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">
     <!--color css-->
     <link rel="stylesheet" type="text/css" href="{{asset('assets/css/color/color-1.min.css')}}" id="color">



    <!-- datatable-->
    <link href="{{ asset('datatable\datatable.min.css') }}" rel="stylesheet">
    </head>
 <body class="sidebar-mini fixed">
    <div class="loader-bg">
        <div class="loader-bar">
        </div>
    </div>
    <div class="wrapper">
    <!--   <div class="loader-bg">
    <div class="loader-bar">
    </div>
</div> -->
<!-- Navbar-->
<header class="main-header-top hidden-print">
    <a href="index.html" class="logo"><b>Pelayanan BPSMB</b></a>
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button--><a href="#!" data-toggle="offcanvas" class="sidebar-toggle"></a>
        <!-- Navbar Right Menu-->
        <div class="navbar-custom-menu f-right">
            <ul class="top-nav">
                  <!--Notification Menu-->
                  <li class="dropdown notification-menu">
                    <ul class="dropdown-menu">
                        <li class="not-head">You have <b class="text-primary">4</b> new notifications.</li>
                        <li class="bell-notification">
                            <a href="javascript:;" class="media">
                                <span class="media-left media-icon">
                                    <img class="img-circle" src="{{asset('assets/images/avatar-1.png')}}" alt="User Image">
                                </span>
                                <div class="media-body"><span class="block">Lisa sent you a mail</span><span class="text-muted block-time">2min ago</span></div></a>
                            </li>
                                <li class="not-footer">
                                    <a href="#!">See all notifications.</a>
                                </li>
                            </ul>
                        </li>
                        <li class="pc-rheader-submenu">
                            <a href="#!" class="drop icon-circle" onclick="javascript:toggleFullScreen()">
                                <i class="icon-size-fullscreen"></i>
                            </a>
                        </li>

                        <li class="dropdown">
                            <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
                                <span><img class="img-circle " src="{{ asset('/images/admin/'.Auth::user()->foto) }}" style="width:40px;" alt="User Image"></span>
                                <span>{{ Auth::user()->name }}<i class=" icofont icofont-simple-down"></i></span>

                            </a>
                            <ul class="dropdown-menu settings-menu">
                                <li><a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{-- {{ __('Logout') }} --}}
                                    <i class="icon-logout"></i> Logout</a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>

                            </ul>
                        </li>
            </nav>
        </header>
        <!-- Side-Nav-->
        <aside class="main-sidebar hidden-print " >
            <section class="sidebar" id="sidebar-scroll">

                <div class="user-panel">
                    <div class="f-left image"><img src="{{ asset('/images/admin/'.Auth::user()->foto) }}" alt="User Image" class="img-circle"></div>
                    <div class="f-left info">
                        <p>{{ Auth::user()->name }}</p>
                        <p class="designation">Admin <i class="icofont icofont-caret-down m-l-5"></i></p>
                    </div>
                </div>
                <!-- sidebar profile Menu-->
                <ul class="nav sidebar-menu extra-profile-list">
                    <li>
                            {{-- <a href="{{ route('admin_user_edit', ['id' => IDCrypt::Encrypt( $d->id)])}}" class="btn btn-inverse-primary" data-toggle="tooltip" data-placement="top" title="Edit"><i class="icofont icofont-edit-alt"></i></a> --}}
                        <a class="waves-effect waves-dark" href="{{ route('admin_user_edit', ['id' => IDCrypt::Encrypt(Auth::user()->id)])}}">
                            <i class="icon-user"></i>
                            <span class="menu-text">View Profile</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    <li>
                        <a class="waves-effect waves-dark" href="javascript:void(0)">
                            <i class="icon-settings"></i>
                            <span class="menu-text">Settings</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    <li>
                        <a class="waves-effect waves-dark" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                            <i class="icon-logout"></i>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            <span class="menu-text">Logout</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                </ul>
                <!-- Sidebar Menu-->
                <ul class="sidebar-menu">
                    <li class="nav-level">Navigation</li>
                    <li class="active treeview">
                        <a class="waves-effect waves-dark" href="/admin">
                            <i class="icon-speedometer"></i><span> Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-level"> Data</li>
                    <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-briefcase"></i><span> Kelola Admin</span><i class="icon-arrow-down"></i></a>
                        <ul class="treeview-menu">
                        <li><a class="waves-effect waves-dark" href="{{route('admin_perusahaan_index')}}"><i class="icon-arrow-right"></i> Data Perusahaan</a></li>
                            <li><a class="waves-effect waves-dark" href="{{route('retribusi_kalibrasi_index')}}"><i class="icon-arrow-right"></i>  Data Retribusi Kalibrasi</a></li>
                            <li><a class="waves-effect waves-dark" href="{{route('retribusi_pengujian_index')}}"><i class="icon-arrow-right"></i> Data Retribusi Pengujian</a></li>
                            <li><a class="waves-effect waves-dark" href="{{route('laboratorium_index')}}"><i class="icon-arrow-right"></i>  Data Laboratorium</a></li>
                            <li><a class="waves-effect waves-dark" href="{{route('admin_user_index')}}"><i class="icon-list"></i><span> Kelola Admin</span></a></li>
                      </ul>

                    </li>
                    <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-book-open"></i><span> Data Permohonan</span><i class="icon-arrow-down"></i></a>
                        <ul class="treeview-menu">
                            <li><a class="waves-effect waves-dark" href="{{route('permohonan_kalibrasi_index')}}"><i class="icon-arrow-right"></i> Permohonan Kalibrasi</a></li>
                            <li><a class="waves-effect waves-dark" href="{{route('permohonan_pengujian_index')}}"><i class="icon-arrow-right"></i> Permohonan pengujian</a></li>
                           </ul>
                    </li>
                    <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-book-open"></i><span> Data Riwayat Transaksi</span><i class="icon-arrow-down"></i></a>
                        <ul class="treeview-menu">
                             <li><a class="waves-effect waves-dark" href="{{Route('kalibrasi_index')}}"><i class="icon-arrow-right"></i> Data Kalibrasi</a></li>
                            <li><a class="waves-effect waves-dark" href="{{Route('pengujian_index')}}"><i class="icon-arrow-right"></i> Data pengujian</a></li>
                        </ul>
                    </li>
                    <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-book-open"></i><span> Laporan</span><i class="icon-arrow-down"></i></a>
                        <ul class="treeview-menu">
                             <li><a class="waves-effect waves-dark" href="{{Route('pendapatan_index')}}"><i class="icon-arrow-right"></i> Pendapatan</a></li>
                             <li><a class="waves-effect waves-dark" href="{{ route('laporan_perusahaan_keseluruhan') }}" target="_blank"><i class="icon-arrow-right"></i>  Perusahaans</a></li>
                             {{-- <li><a class="waves-effect waves-dark" href="{{ route('laporan_perusahaan_filter_status') }}" target="_blank"><i class="icon-arrow-right"></i>  Perusahaans Filter</a></li> --}}
                            <li><a class="waves-effect waves-dark" href="{{Route('permohonan_kalibrasi_cetak')}}" target="_blank"><i class="icon-arrow-right"></i>  Permohonan Kalibrasi</a></li>
                            {{-- <li><a class="waves-effect waves-dark" href="{{Route('permohonan_kalibrasi_filter_bulan')}}" target="_blank"><i class="icon-arrow-right"></i> Permohonan Kalibrasi Filter</a></li> --}}
                            {{-- <li><a class="waves-effect waves-dark" href="{{Route('permohonan_kalibrasi_filter_tahun')}}" target="_blank"><i class="icon-arrow-right"></i> Permohonan Kalibrasi / tahun</a></li> --}}
                            {{-- <li><a class="waves-effect waves-dark" href="{{Route('permohonan_kalibrasi_filter_status')}}" target="_blank"><i class="icon-arrow-right"></i> Permohonan Kalibrasi status</a></li> --}}
                            <li><a class="waves-effect waves-dark" href="{{Route('permohonan_pengujian_cetak')}}" target="_blank"><i class="icon-arrow-right"></i>  Permohonan Pengujian</a></li>
                            {{-- <li><a class="waves-effect waves-dark" href="{{Route('permohonan_pengujian_filter_bulan')}}" target="_blank"><i class="icon-arrow-right"></i> Permohonan pengujian Filter</a></li> --}}
                            {{-- <li><a class="waves-effect waves-dark" href="{{Route('permohonan_pengujian_filter_tahun')}}" target="_blank"><i class="icon-arrow-right"></i> Permohonan pengujian / tahun</a></li> --}}
                            {{-- <li><a class="waves-effect waves-dark" href="{{Route('permohonan_pengujian_filter_status')}}" target="_blank"><i class="icon-arrow-right"></i> Permohonan pengujian status</a></li> --}}
                            <li><a class="waves-effect waves-dark" href="{{Route('kalibrasi_cetak')}}" target="_blank"><i class="icon-arrow-right"></i>  Riwayat Kalibrasi</a></li>
                            <li><a class="waves-effect waves-dark" href="{{Route('kalibrasi_filter_bulan')}}" target="_blank"><i class="icon-arrow-right"></i> Riwayat Kalibrasi Filter</a></li>
                            <li><a class="waves-effect waves-dark" href="{{Route('pengujian_cetak')}}" target="_blank"><i class="icon-arrow-right"></i>  Riwayat Pengujian</a></li>
                            <li><a class="waves-effect waves-dark" href="{{Route('pengujian_filter_bulan')}}" target="_blank"><i class="icon-arrow-right"></i>  Riwayat Pengujian Filter</a></li>
                            <li><a class="waves-effect waves-dark" href="{{Route('admin_riwayat_perusahaan_index')}}" target="_blank"><i class="icon-arrow-right"></i> Riwayat Perusahaan</a></li>

                        </ul>
                    </li>
                </ul>
            </section>
        </aside>

    </div>
</div>
<!-- Sidebar chat end-->
<div class="content-wrapper">

 @yield('content')

</div>
</div>

</div>
</div>
</div>

<!-- 2-1 block end -->
</div>
<!-- Main content ends -->
<!-- Container-fluid ends -->

</div>
</div>
</body>
  <!-- Required Jqurey -->
  <script src="{{asset('assets/plugins/tether/dist/js/tether.min.js')}}"></script>
  <script src="{{asset('assets/plugins/jquery/dist/jquery.min.js')}}"></script>
     <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
      <script src="{{asset('assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
      <script src="{{ asset('js/bootstrap-datetimepicker.js') }}"></script>
      <script src="{{ asset('js/locales/bootstrap-datetimepicker.id.js') }}" charset="UTF-8"></script>
      <!-- Required Fremwork -->

      <!-- waves effects.js -->
      <script src="{{asset('assets/plugins/Waves/waves.min.js')}}"></script>

      <!-- Scrollbar JS-->
      <script src="{{asset('assets/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
      <script src="{{asset('assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js')}}"></script>
      <!--classic JS-->
      <script src="{{asset('assets/plugins/classie/classie.js')}}"></script>
      <!-- notification -->
      <script src="{{asset('assets/plugins/notification/js/bootstrap-growl.min.js')}}"></script>
      <!-- custom js -->
      <script src="{{ asset('assets/js/main.min.js') }}"></script>
      <script src="{{ asset('assets/pages/elements.js') }}"></script>
      <script src="{{ asset('assets/js/menu.min.js') }}"></script>
      <script src="{{ asset('datatable/jquerrydatatable.min.js') }}"></script>
      <script src="{{ asset('datatable/datatable.js') }}"></script>
      <script>
            $(document).ready( function () {
              $('#myTable').DataTable();
          } );
          </script>
      <script>
        var $window = $(window);
        var nav = $('.fixed-button');
        $window.scroll(function(){
            if ($window.scrollTop() >= 200) {
             nav.addClass('active');
         }
         else {
             nav.removeClass('active');
         }
     });

     $('.form_date').datetimepicker({
    //     format: "mm-yyyy",
    // viewMode: "months",
    // minViewMode: "months"
        // format:  'mm-yyyy',
        language:  'id',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
    });

    // Jquery Dependency

$("input[data-type='currency']").on({
    keyup: function() {
      formatCurrency($(this));
    },
    blur: function() {
      formatCurrency($(this), "blur");
    }
});


function formatNumber(n) {
  // format number 1000000 to 1,234,567
  return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
}


function formatCurrency(input, blur) {
  // appends $ to value, validates decimal side
  // and puts cursor back in right position.

  // get input value
  var input_val = input.val();

  // don't validate empty input
  if (input_val === "") { return; }

  // original length
  var original_len = input_val.length;

  // initial caret position
  var caret_pos = input.prop("selectionStart");

  // check for decimal
  if (input_val.indexOf(".") >= 0) {

    // get position of first decimal
    // this prevents multiple decimals from
    // being entered
    var decimal_pos = input_val.indexOf(".");

    // split number by decimal point
    var left_side = input_val.substring(0, decimal_pos);
    var right_side = input_val.substring(decimal_pos);

    // add commas to left side of number
    left_side = formatNumber(left_side);

    // validate right side
    // right_side = formatNumber(right_side);

    // On blur make sure 2 numbers after decimal
    // if (blur === "blur") {
    //   right_side += "00";
    // }

    // Limit decimal to only 2 digits
    // right_side = right_side.substring(0, 2);

    // join number by .
    input_val = "Rp" + left_side;

  } else {
    // no decimal entered
    // add commas to number
    // remove all non-digits
    input_val = formatNumber(input_val);
    input_val = "Rp" + input_val;

    // final formatting
    if (blur === "blur") {
      input_val;
    }
  }

  // send updated string to input
  input.val(input_val);

  // put caret back in the right position
  var updated_len = input_val.length;
  caret_pos = updated_len - original_len + caret_pos;
  input[0].setSelectionRange(caret_pos, caret_pos);
}
    </script>
        @stack('scripts')
</html>
