<nav class="navbar navbar-expand-lg navbar-custom">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('welcome') }}"><img class="icon" src="{{ Vite::asset('public/media/icon.png') }}" alt=""></a>

    <!-- Pulsante Hamburger -->

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('welcome') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('blog') ? 'active' : '' }}" href="{{ route('blog') }}">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('chi-siamo') ? 'active' : '' }}" href="{{ route('chi-siamo') }}">Chi Siamo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contatti</a>
        </li>
      </ul>
    </div>
  </div>
</nav>