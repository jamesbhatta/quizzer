<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
  <div class="container-fluid">
    <!-- Links -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Right -->
      <ul class="navbar-nav nav-flex-icons ml-auto">
       {{--  <li class="nav-item">
          <a href="https://www.facebook.com/manoj.bhatta3" class="nav-link waves-effect" target="_blank">
            <i class="fab fa-facebook-f"></i>
          </a>
        </li>
        <li class="nav-item">
          <a href="https://twitter.com/MDBootstrap" class="nav-link waves-effect" target="_blank">
            <i class="fab fa-twitter"></i>
          </a>
        </li> --}}
        <li class="nav-item">
          <a href="#" class="nav-link rounded waves-effect" target="_blank">
            <i class="fas fa-user-circle mr-2"></i>{{ Auth::user()->name }}
          </a>
        </li>
        <li class="nav-item">
          <a href="https://github.com/jammy526/quizzer" target="_blank" class="nav-link border border-light rounded waves-effect" target="_blank">
            <i class="fab fa-github mr-2"></i>Quizzer GitHub
          </a>
        </li>
        
      </ul>

    </div>

  </div>
</nav>
