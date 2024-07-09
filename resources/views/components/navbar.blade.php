<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('homepage')}}">POST</a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="navbar-brand" href="{{route('article.create')}}">Inserisci un articolo</a>
            </li>
            <li class="nav-item"><a class="dropdown-item" aria-current="page" href="{{route('careers')}}">Lavora con noi</a></li>
            @if (Auth::user()->is_admin)
            <li><a class="dropdown-item" href="{{route('admin.dashboard')}}"></a> Dashboard Admin</li>
              @endif
        </ul>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      @auth
        <li class="nav-item">
          <a class="nav-link" href="{{route('article.create')}}">Inserisci un articolo</a>
        </li>
        @endauth
        @guest
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
            <li><a class="dropdown-item" href="{{route('login')}}">Acedi</a></li>
            @if (Auth::user()->is_admin)
            <li><a class="dropdown-item" href="{{route('admin.dashboard')}}"></a> Dashboard Admin</li>
            @endif
          </ul>
        </li>
      </ul>
      @endguest
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
