<header id="site_header">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark ">
          <div class="container">
            <a class="navbar-brand" href="{{route('home')}}">Movies</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{Route::currentRouteName() === 'home' ? 'active' : ''}}" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Route::currentRouteName() === 'about' ? 'active' : ''}}" href="{{route('about')}}">About</a>
                    </li>
                </ul>
            </div>
      </div>
    </nav>
</header>