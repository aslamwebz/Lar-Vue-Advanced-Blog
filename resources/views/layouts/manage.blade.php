<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Webzone Mangement</title>
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('js/app.js') }}" ></script>
  


  <!-- Favicon -->
  <link href="{{ asset('assets/img/brand/favicon.png') }}" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="{{ asset('assets/vendor/nucleo/css/nucleo.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="{{ asset('assets/css/argon.css?v=1.0.0') }}" rel="stylesheet">

   <link rel="stylesheet" href="{{ asset('assets/summernote/dist/summernote-bs4.css') }}">
  <script type="text/javascript" src="{{ asset('assets/summernote/dist/summernote-bs4.js') }}"></script>

</head>
<body>
<div id="app">
  
  <!-- Sidenav -->
  @include('layouts.sidenav')
  <!-- Main content -->
  <div class="main-content">
    <!-- Top navbar -->
  @include('layouts.nav')

  <!-- Header -->
 	@if(Route::getCurrentRoute()->uri() == 'manage/dashboard')
    	<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
	@elseif(Route::getCurrentRoute()->uri() == '/')
	    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
	@else
	 	<div class="header bg-gradient-primary pb-4 pt-5 pt-md-7">
	@endif
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Traffic</h5>
                      <span class="h2 font-weight-bold mb-0">350,897</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                        <i class="fas fa-chart-bar"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">New users</h5>
                      <span class="h2 font-weight-bold mb-0">2,356</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                        <i class="fas fa-chart-pie"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 3.48%</span>
                    <span class="text-nowrap">Since last week</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Sales</h5>
                      <span class="h2 font-weight-bold mb-0">924</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                        <i class="fas fa-users"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-warning mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span>
                    <span class="text-nowrap">Since yesterday</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Performance</h5>
                      <span class="h2 font-weight-bold mb-0">49,65%</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                        <i class="fas fa-percent"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 12%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

	{{-- Page Content --}}
    @include('layouts.message')
    @yield('content')
	{{-- Page Content --}}

	 <!-- Footer -->
	  	<footer class="footer container">
	        <div class="row align-items-center justify-content-xl-between">
	          <div class="col-xl-6">
	            <div class="copyright text-left  text-muted">
	              &copy; 2019 <a href="#" class="font-weight-bold ml-1" target="_blank">Aslam@Webzone</a>
	            </div>
	          </div>
	          <div class="col-xl-6">
	            <ul class="nav nav-footer justify-content-center justify-content-xl-end">
	              <li class="nav-item">
	                <a href="#" class="nav-link" target="_blank">Aslam@Webzone</a>
	              </li>
	              <li class="nav-item">
	                <a href="#" class="nav-link" target="_blank">About Us</a>
	              </li>
	              <li class="nav-item">
	                <a href="#" class="nav-link" target="_blank">Blog</a>
	              </li>
	              <li class="nav-item">
	                <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
	              </li>
	            </ul>
	          </div>
	        </div>
	  	</footer>



  </div>
  </div>
  @yield('scripts');

    <!-- Scripts -->
    <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <!-- Optional JS -->
  <script src="{{ asset('assets/vendor/chart.js/dist/Chart.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/chart.js/dist/Chart.extension.js') }}"></script>
  <!-- Argon JS -->
  <script src="{{ asset('assets/js/argon.js?v=1.0.0') }}"></script>



</body>

</html>