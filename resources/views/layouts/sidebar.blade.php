<head>
	<meta name="generator" content="Hugo 0.53" />
    <title>Palmwood Bootstrap 4 Dashboard - UICardio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Including UICardio fonts -->
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
    <!-- Social Meta tags -->
    <meta name="keywords" content="dashboard, bootstrap 4, bootstarp, pinewood, pinewood dashboard, pinewood bootstrap 4, bootstrap 4 admin panel, bootstrap 4 system, html css template, uicardio, responsive dashboard, responsive bootstrap 4 template">
    <meta name="description" content="">
    <!-- Markup for google+ -->
    <meta itemprop="name" content="">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="">
    <!-- Twitter Card -->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@uicardio">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:creator" content="@uicardio">
    <meta name="twitter:image" content="">
    <!-- Open Graph Data  -->
    <meta property="og:title" content="" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://demo.uicard.io/palmwood-bootstrap-4-admin-dashboard/" />
    <meta property="og:image" content="" />
    <meta property="og:description" content="" />
    <meta property="og:site_name" content="UICardio" />
  </head>
  @section('css')
  @stop

  <body>    
<div class="wrapper">
  <!-- Sidebar -->
  <div class="sidebar p-3">
  <h3 class="text-center">UICardio</h3>
  <hr>
    <ul class="nav nav-pills ">
        <li class="nav-item ">
          <a class="nav-link active shadow-sm" href="./index.html">
            <i class="icon ion-md-analytics"></i> Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="./user.html">
            <i class="icon ion-md-contact"></i>
            User Profile
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link " href="./tables.html">
            <i class="icon ion-md-clipboard"></i>
            Table List
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link " href="./typography.html">
            <i class="icon ion-md-text"></i>
            Typography
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link " href="./icons.html">
            <i class="icon ion-md-heart"></i>
            Icons
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link " href="./maps.html">
            <i class="icon ion-md-compass"></i>
            Maps
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link " href="./notifications.html">
            <i class="icon ion-md-notifications"></i>
            Notifications
          </a>
        </li>
      </ul>
      
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  
  <script src="{{asset('js/scripts.js')}}"></script>
      @yield('content')
</div>

