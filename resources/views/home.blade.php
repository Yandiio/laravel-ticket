@extends('layouts.sidebar')
@section('content')
<style>
  @font-face {
    font-family: "uicardio-font";
    src: url("fonts/uicardio-light") format('woff');
    font-weight: 400;
    font-display: fallback;
  }

  @font-face {
    font-family: "uicardio-font";
    src: url("fonts/uicardio-regular") format('woff');
    font-weight: 500;
    font-display: fallback;
  }

  @font-face {
    font-family: "uicardio-font";
    src: url("fonts/uicardio-bold") format('woff');
    font-weight: 700;
    font-display: fallback;
  }
</style>
<!-- Compiled CSS of Pinewood Dashboard -->
<!-- Include it if you dont want to make any changes in the design -->
<!-- Else you can make changes in SCSS files and use them -->
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<!-- Including icons from Ion Icons -->
<link href="https://unpkg.com/ionicons@4.5.0/dist/css/ionicons.min.css" rel="stylesheet">
<!-- Favicon -->
<link rel="icon" href="./favicon.png" type="image/x-icon">

<div class="main-panel">
  <!-- If you want to change the header image, you can replace it with the below link -->
  <div class="header-image" style="background-image: url(img/header-background.jpg);"></div>
  <!-- Navbar -->
  <nav class="navbar navbar-dark navbar-expand sticky-top">

    <a href="#0" id="sidebarToggle" class="sidebarToggle d-sm-none nav-link pl-0 text-white">

      <svg class="ham hamRotate ham1" viewBox="0 0 100 100" width="40">
        <path class="line top"
          d="m 30,33 h 40 c 0,0 9.044436,-0.654587 9.044436,-8.508902 0,-7.854315 -8.024349,-11.958003 -14.89975,-10.85914 -6.875401,1.098863 -13.637059,4.171617 -13.637059,16.368042 v 40" />
        <path class="line middle" d="m 30,50 h 40" />
        <path class="line bottom"
          d="m 30,67 h 40 c 12.796276,0 15.357889,-11.717785 15.357889,-26.851538 0,-15.133752 -4.786586,-27.274118 -16.667516,-27.274118 -11.88093,0 -18.499247,6.994427 -18.435284,17.125656 l 0.252538,40" />
      </svg>
    </a>

    <a href="#0" id="navSearchButton" class="d-sm-none"><i class="icon ion-md-search"></i></a>
    <a class="navbar-brand h4" href="#">Dashboard</a>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">

        <a class="nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">
          <span class="profile-text">Hi,{{Auth::user()->name}} !</span>
          <img width="40px" class="rounded-circle" src="{{asset('img/avatars/girl.jpg')}}" alt="">
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="}">Edit Profile</a>
          <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Logout
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
          </form>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </nav>
  <div class="content">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-12">
        <div class="card widget">
          <div class="card-body text-center">
            <i class="icon ion-md-heart text-danger"></i>
            <div class="h1 font-weight-bold">1.87k</div>
            <p class="text-muted">Total Likes</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-12">
        <div class="card widget">
          <div class="card-body text-center">
            <i class="icon ion-md-wallet text-success"></i>
            <div class="h1 font-weight-bold">$50.4k</div>
            <p class="text-muted widget-info">
              <span class="widget-text">Revenue</span>
              <span class="widget-stat text-danger"><i class="icon ion-md-arrow-down"></i> 10%</span>
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-12">
        <div class="card widget">
          <div class="card-body text-center">
            <i class="icon ion-md-disc text-secondary"></i>
            <div class="h1 font-weight-bold">58 GB</div>
            <p class="text-muted">Used Space</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-12">
        <div class="card widget">
          <div class="card-body text-center">
            <i class="icon ion-logo-twitter text-twitter"></i>
            <div class="h1 font-weight-bold">45k</div>
            <p class="text-muted widget-info">
              <span class="widget-text">Twitter Followers</span>
              <span class="widget-stat text-success"><i class="icon ion-md-arrow-up"></i> 93%</span>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-8 col-12">
        <div class="card bg-secondary text-white">
          <!-- TODO: fix card radius -->
          <div class="card-header rounded-top bg-secondary p-4">
            <span class="float-right"><button class="btn btn-circle"><i class="icon ion-md-download"></i></button>
            </span>
            <h3 class="text-white">Sample Graph</h3>

            <p class="text-muted m-0" style="font-size:14px;">A Sample graph chart from chart.js<p>
          </div>
          <canvas class="rounded" id="canvas" height="260px"></canvas>
        </div>
      </div>
      <div class="col-lg-4 col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="m-0">Pie Chart</h3>
            <p class="text-muted m-0" style="font-size:14px;">Predicted world population (millions) in 2050</p>
          </div>
          <div class="card-body">
            <canvas id="pie-chart" height="300"></canvas>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-12">
        <div class="card">
          <div class="card-header">
            <button class="btn float-right btn-sm btn-success"><i class="icon ion-md-add"></i> Add</button>
            <h3 class="m-0">
              <i class="icon ion-md-calendar"></i>
              Todo</h3>
            <p class="text-muted m-0" style="font-size:14px;">Showing last 5 Todos</p>
          </div>
          <div class="card-body ">
            <table class="table table-sm table-borderless">
              <tr>
                <td>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">Send emails to client</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                    <label class="custom-control-label" for="customCheck2">Visit office </label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck3">
                    <label class="custom-control-label" for="customCheck3">Start making presentation</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck4">
                    <label class="custom-control-label" for="customCheck4">Don't forget to pickup Aaliya from
                      school!</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck5">
                    <label class="custom-control-label" for="customCheck5">Buy a gift for Sarah</label>
                  </div>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>

      <div class="col-lg-8 col-12">
        <div class="card">
          <div class="card-header">
            <button class="btn btn-sm btn-primary float-right">Show All</button>
            <h3 class="m-0">Employer Stats</h3>
            <p class="text-muted m-0" style="font-size:14px;">New employees on 1st Jan, 2019</p>
          </div>

          <div class="card-body p-0">

            <table class="table  table-hover">
              <thead class="bg-light border-top border-bottom">
                <th>#</th>
                <th>Name</th>
                <th>Salary</th>
                <th>Country</th>
                <th width="190px">Progress</th>
              </thead>
              <tbody>
                <tr>
                  <th>1</th>
                  <td>Shikha</td>
                  <td>$40,000</td>
                  <td>USA</td>
                  <td>
                    <div class="progress" style="height: 3px;">
                      <div class="progress-bar bg-warning" role="progressbar" style="width: 55%;" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th>2</th>
                  <td>Richard</td>
                  <td>$30,000</td>
                  <td>USA</td>
                  <td>
                    <div class="progress" style="height: 3px;">
                      <div class="progress-bar bg-success" role="progressbar" style="width: 75%;" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th>3</th>
                  <td>Rajan</td>
                  <td>$60,000</td>
                  <td>India</td>
                  <td>
                    <div class="progress" style="height: 3px;">
                      <div class="progress-bar bg-danger" role="progressbar" style="width: 25%;" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th>4</th>
                  <td>Emma</td>
                  <td>$80,000</td>
                  <td>Canada</td>
                  <td>

                    <div class="progress" style="height: 3px;">
                      <div class="progress-bar bg-warning" role="progressbar" style="width: 55%;" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>