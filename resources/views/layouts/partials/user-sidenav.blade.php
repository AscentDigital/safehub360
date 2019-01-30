<!-- Sidenav -->
<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
  <div class="container-fluid">
    <!-- Toggler -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Brand -->
    <a class="navbar-brand pt-0" href="./index.html">
      <img src="/img/brand/blue.png" class="navbar-brand-img" alt="SafeHub 360°">
    </a>
    <!-- User -->
    <ul class="nav align-items-center d-md-none">
      <li class="nav-item dropdown">
        <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="ni ni-bell-55"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>

      <!-- Side Dropwdonw -->
      <li class="nav-item dropdown">
        <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <div class="media align-items-center">
            <span class="avatar avatar-sm rounded-circle">
              <img alt="Image placeholder" src="/img/theme/team-1-800x800.jpg">
            </span>
          </div>
        </a>
        <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
          <div class=" dropdown-header noti-title">
            <h6 class="text-overflow m-0">Welcome!</h6>
          </div>
          <a href="./examples/profile.html" class="dropdown-item">
            <i class="ni ni-single-02"></i>
            <span>My profile</span>
          </a>
          <a href="./examples/profile.html" class="dropdown-item">
            <i class="ni ni-settings-gear-65"></i>
            <span>Settings</span>
          </a>
          <a href="./examples/profile.html" class="dropdown-item">
            <i class="ni ni-calendar-grid-58"></i>
            <span>Activity</span>
          </a>
          <a href="./examples/profile.html" class="dropdown-item">
            <i class="ni ni-support-16"></i>
            <span>Support</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#!" class="dropdown-item">
            <i class="ni ni-user-run"></i>
            <span>Logout</span>
          </a>
        </div>
      </li>
      <!--  -->
    </ul>
    <!-- Collapse -->
    <div class="collapse navbar-collapse" id="sidenav-collapse-main">
      <!-- Collapse header -->
      <div class="navbar-collapse-header d-md-none">
        <div class="row">
          <div class="col-6 collapse-brand">
            <a href="./index.html">
              <img src="/img/brand/blue.png">
            </a>
          </div>
          <div class="col-6 collapse-close">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
              <span></span>
              <span></span>
            </button>
          </div>
        </div>
      </div>
      <!-- Form -->
      <form class="mt-4 mb-3 d-md-none">
        <div class="input-group input-group-rounded input-group-merge">
          <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <span class="fa fa-search"></span>
            </div>
          </div>
        </div>
      </form>
      <!-- Navigation -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="./dashboard.html">
            <i class="ni ni-tv-2 text-primary"></i> Dashboard
          </a>
        </li>
      </ul>


      <!-- UTMD Links -->
      <hr class="my-3">
      <!-- Heading -->
      <h6 class="navbar-heading text-orange">UTMD Devices</h6>
      <ul class="navbar-nav mb-md-3">
        <li class="nav-item">
          <a class="nav-link" href="./register-utmd.html">
            <i class="ni ni-fat-add text-orange"></i> Register Device
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./list-utmd.html">
            <i class="ni ni-app text-orange"></i> View UTMDs
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./setup-utmd.html">
            <i class="ni ni-settings text-orange"></i> Setup Threshold 
          </a>
        </li>
      </ul>
      <!-- End UTMD Links -->


      <!-- Camera Links -->
      <hr class="my-3">
      <!-- Heading -->
      <h6 class="navbar-heading text-teal">Monitoring Devices</h6>
      <ul class="navbar-nav mb-md-3">
        <li class="nav-item">
          <a class="nav-link" href="./register-camera.html">
            <i class="ni ni-fat-add text-teal"></i> Register Device
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./list-camera.html">
            <i class="fa fa-video text-teal"></i> View Cameras
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./setup-camera.html">
            <i class="ni ni-settings text-teal"></i> Setup Threshold 
          </a>
        </li>
      </ul>
      <!-- End Camera Links -->





      <!-- Portal Management -->
      <!-- Divider -->
      <hr class="my-3">
      <!-- Heading -->
      <h6 class="navbar-heading text-indigo">Portal Management</h6>
      <!-- Navigation -->
      <ul class="navbar-nav mb-md-3">
        <li class="nav-item">
          <a class="nav-link" href="./company-settings.html">
            <i class="ni ni-building text-indigo"></i> Company Settings
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./user-management.html">
            <i class="ni ni-circle-08 text-indigo"></i> User Management
          </a>
        </li> 
      </ul>
      <!-- End Portal Management -->



    </div>
  </div>
</nav>