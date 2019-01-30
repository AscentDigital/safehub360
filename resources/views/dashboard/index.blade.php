@extends('layouts.user-master')

@section('content')
<!-- Header -->
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
  <div class="container-fluid">
    <div class="header-body">
      <!-- Card stats -->
      <div class="row">

        <div class="col-xl-4 col-lg-12">
          <div class="card card-stats mb-4 mb-xl-0">
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-muted mb-0">Company</h5>
                  <span class="h2 font-weight-bold mb-0">ABC Grid Corporation</span>
                </div>
                <div class="col-auto">
                  <img src="/img/brand/blue.png" width="100px" alt="Company Logo">
                </div>
              </div>
              <p class="mt-3 mb-0 text-muted text-sm">
                <span class="text-primary mr-2"><i class="fas fa-clock"></i> 10:23 AM January 16, 2019 Thu</span>
                <span class="text-nowrap"></span>
              </p>
            </div>
          </div>
        </div>



        <div class="col-xl-4 col-lg-6">
          <div class="card card-stats mb-4 mb-xl-0">
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-muted mb-0">Total Outages</h5>
                  <span class="h2 font-weight-bold mb-0">17</span>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                    <i class="fas fa-bolt"></i>
                  </div>
                </div>
              </div>
              <p class="mt-3 mb-0 text-muted text-sm">
                <span class="text-danger mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                <span class="text-nowrap">Since last month</span>
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6">
          <div class="card card-stats mb-4 mb-xl-0">
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-muted mb-0">Camera Alerts</h5>
                  <span class="h2 font-weight-bold mb-0">2,356</span>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-green text-white rounded-circle shadow">
                    <i class="fa fa-video"></i>
                  </div>
                </div>
              </div>
              <p class="mt-3 mb-0 text-muted text-sm">
                <span class="text-success mr-2"><i class="fas fa-arrow-down"></i> 0.18%</span>
                <span class="text-nowrap">Since yesterday</span>
              </p>
            </div>
          </div>
        </div> 



      </div>
    </div>
  </div>
</div>

<!-- Page content -->
<div class="container-fluid mt--7">
  <div class="row">
    <div class="col">
      <div class="card shadow border-0 hide-overflow map-dashboard">
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong><i class="fa fa-info-circle"></i> OFFLINE</strong> T-Pilot is now offline at 10:30AM January 15, 2019 Tue. <a href="#" class="text-white"><i>View More Info</i></a>

          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <iframe class="" src="https://maps.google.com/maps?q=19.7436798, 96.0950516&z=15&output=embed" width="100%" height="600px" frameborder="0" style="border-radius: 10px;"></iframe>
      </div>
    </div>
  </div>
@endsection