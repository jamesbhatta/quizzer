<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Badapatra') }}</title>

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
{{-- <div id="app">
  <router-view></router-view>
</div>
--}}

<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark secondary-color">
  <!-- Navbar brand -->
  <a class="navbar-brand" href="/">Quizzer</a>
  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
  aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<!-- Collapsible content -->
<div class="collapse navbar-collapse" id="basicExampleNav">
  <ul class="navbar-nav ml-auto">
    <li class="nav-item active">
      <a class="nav-link" href="#"><i class="fa fa-home mr-1"></i>Home
        <span class="sr-only">(current)</span>
      </a>
    </li>
    @auth
    <li class="nav-item">
      <a class="nav-link" href="{{ route('dashboard') }}"><i class="fas fa-qrcode mr-1"></i>Dashboard</a>
    </li>
    @else
    <li class="nav-item">
      <a class="nav-link" href="{{ route('login') }}">Login</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('register') }}">Register</a>
    </li>
    @endauth
  </ul>
</div>
<!-- Collapsible content -->
</nav>
<!--/.Navbar-->


<div class="jumbotron card card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/gradient1.jpg);">
  <div class="text-white text-center py-5 px-4">
    <div>
      <h3 class="card-title h1-responsive pt-3 mb-5 font-bold"><strong>COMMING SOON</strong></h2>

        <div class="card mx-auto" style="max-width: 500px;">
          <div class="card-body px-lg-5">
            <form class="" style="color: #757575;">
              <div class="text-center">
                <p>Quizzer is under Development process and will be live soon.</p>
                <p>
                  <a href="" class="text-secondary">Be the first one to be informed.</a>
                </p>
              </div>
              <div class="form-group">
                <input type="text" class="form-control text-default" placeholder="Name">
              </div>
              <div class="form-group">
                <input type="email" class="form-control text-default" placeholder="Email">
              </div>
              <button type="submit" class="btn btn-secondary btn-block z-depth-1 my-4  waves-effect">Get Notified</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- SCRIPTS -->
  <script src="{{ asset('/js/app.js') }}"></script>
  <!-- JQuery -->
  <script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
</body>

</html>