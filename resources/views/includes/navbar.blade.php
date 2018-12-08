<nav id="top-navbar" class="navbar navbar-expand-lg">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">DICTIONARY</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">THESAURUS</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          EXAMPLES
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">SEE IN A SENTENCE</a>
          <a class="dropdown-item" href="#">EXAMPLE ARTICLES</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          QUOTES
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">FAMOUS QUOTES</a>
          <a class="dropdown-item" href="#">QUOTES ARTICLES</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          SPANISH
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">SPANISH-ENGLISH TRANSLATION</a>
          <a class="dropdown-item" href="#">REFERENCE</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          REFERENCE
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">EDUCATION</a>
          <a class="dropdown-item" href="#">ESL</a>
          <a class="dropdown-item" href="#">GRAMMER</a>
          <a class="dropdown-item" href="#">ABBREVIATIONS</a>
          <a class="dropdown-item" href="#">BIOGRAPHY</a>
          <a class="dropdown-item" href="#">BOOKS & LITERATURE</a>
          <a class="dropdown-item" href="#">EXAMPLES</a>
          <a class="dropdown-item" href="#">FOREIGN LANGUAGES</a>
          <a class="dropdown-item" href="#">RESOURCES</a>
          <a class="dropdown-item" href="#">SLIDESHOWS</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          WORD FINDER
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">WORD FINDER</a>
          <a class="dropdown-item" href="#">4 PICS 1 WORD ANSWERS</a>
          <a class="dropdown-item" href="#">WORD GAME DICTIONARY</a>
          <a class="dropdown-item" href="#">UNSCRAMBLE</a>
          <a class="dropdown-item" href="#">WORDS WITH FRIENDS CHEAT</a>
          <a class="dropdown-item" href="#">WORD OOKIES CHEAT</a>
        </div>
      </li>
    </ul>
    <ul class="navbar-nav">
      <li class="nav-item">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif
      </li>
    </ul>
  </div>
</nav>
