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
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <!-- MDBootstrap Datatables  -->
  <link href="{{ asset('css/addons/datatables.min.css') }}" rel="stylesheet">

  @stack('styles')
  <style>
    *{
      /*border: 1px solid red;*/
    }
    #layout-row{
      margin-right: 0;
    }

  </style>
</head>

<body class="grey lighten-3">
  {{-- Row --}}
  <div class="row" id="layout-row">
    <div class="col-md-2">
      @include('layouts.sidebar')
    </div>
    <div class="col-md-10">
      @include('layouts.navbar')
      <!--Main layout-->
      <main class="pt-5 ml-lg-1 mr-lg-2">
        @yield('content')

       {{--  <div id="app">
          <router-view></router-view>
        </div> --}}
        
      </main>
    </div>
    {{-- End of col-md-10 --}}
  </div>
  {{-- End of row --}}


  <!--Footer-->
  <footer class="page-footer z-depth-1 text-center font-small primary-color-dark darken-2 mt-4 wow fadeIn">
    <!--Copyright-->
    <div class="footer-copyright py-3">
      © {{ date('Y') }} Copyright
      <a href="{{ route('dashboard') }}" target="_blank"> &nbsp; The Runtime Terrors [ BCA 8<sup>th</sup> ] </a>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
  <!-- MDBootstrap Datatables  -->
  <script type="text/javascript" src="{{ asset('js/addons/datatables.min.js') }}"></script>
  
  {{-- <script src="{{ asset('/js/app.js') }}"></script> --}}
  
  @stack('scripts')
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
  </script>

</body>
</html>