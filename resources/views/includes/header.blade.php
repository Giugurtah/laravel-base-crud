<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">
          <img src="{{ asset('./img/logo.png') }}" alt="dc logo" width="50" class="d-inline-block img-fluid" alt="">
      </a>
      <div class="flex-grow-1">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('comics.index') ? 'active' : '' }}" href="/comics">Comics</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>