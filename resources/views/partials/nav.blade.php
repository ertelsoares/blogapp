<div class="container-fluid">
    <!-- Navbar brand -->
    <a class="navbar-brand" target="_blank" href="https://mdbootstrap.com/docs/standard/">
      <img src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png" height="16" alt="" loading="lazy"
        style="margin-top: -3px;" />
    </a>
    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
      aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarExample01">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item active">
          <a class="nav-link" aria-current="page" href="{{route('Home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('posts')}}" rel="nofollow">Posts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}" >Login</a>
        </li>
      </ul>

      <ul class="navbar-nav d-flex flex-row">
        <!-- Icons -->
        
        <li class="nav-item me-3 me-lg-0" >Bem vindo : 
          @if (auth()->guest())
         Visitante
        @else
           {{auth()->user()->fullName}} <a href="{{route('logout')}}">Logout</a>
        @endif
        </li>
        {{-- <li class="nav-item me-3 me-lg-0">
          <a class="nav-link" href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA" rel="nofollow"
            >
            <i class="fab fa-youtube"></i>
          </a>
        </li>
        <li class="nav-item me-3 me-lg-0">
          <a class="nav-link" href="https://www.facebook.com/mdbootstrap" rel="nofollow" target="_blank">
            <i class="fab fa-facebook-f"></i>
          </a>
        </li>
        <li class="nav-item me-3 me-lg-0">
          <a class="nav-link" href="https://twitter.com/MDBootstrap" rel="nofollow" target="_blank">
            <i class="fab fa-twitter"></i>
          </a>
        </li>
        <li class="nav-item me-3 me-lg-0">
          <a class="nav-link" href="https://github.com/mdbootstrap/mdb-ui-kit" rel="nofollow" target="_blank">
            <i class="fab fa-github"></i>
          </a>
        </li> --}}
      </ul>
    </div>
  </div>