<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="One of ">
  <meta name="author" content="Ascent Digital Solutions">
  <title>SafeHub 360°</title>
  <!-- Favicon -->
  <link href="/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="/css/argon.css?v=1.0.0" rel="stylesheet">
</head>

<body>

  @include('layouts.partials.user-sidenav')

  <!-- Main content -->
  <div class="main-content">
    @include('layouts.partials.user-nav')

    @yield('content')

    <footer class="footer">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-6">
          <div class="copyright text-center text-xl-left text-muted">
            &copy; 2019 <a href="./dashboard.html" class="font-weight-bold ml-1" target="_blank">SafeHub 360°</a>
          </div>
        </div>
        <div class="col-xl-6">
          <ul class="nav nav-footer justify-content-center justify-content-xl-end">
            <li class="nav-item">
              <a href="./dashboard.html" class="nav-link" target="_blank">Learn More</a>
            </li>
            <li class="nav-item">
              <a href="./dashboard.html" class="nav-link" target="_blank">Send Ticket</a>
            </li> 
            <li class="nav-item">
              <a href="" class="nav-link" target="_blank">Terms of Service</a>
            </li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="/vendor/jquery/dist/jquery.min.js"></script>
  <script src="/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Optional JS -->
  <script src="/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="/js/argon.js?v=1.0.0"></script>
</body>

</html>