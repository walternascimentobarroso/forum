<header class="parallax-container">
    <ul id="dropdown1" class="dropdown-content">
        <li><a href="#!">one</a></li>
        <li><a href="#!">two</a></li>
        <li class="divider"></li>
        <li><a href="#!">three</a></li>
    </ul>
    <nav>
        <div class="nav-wrapper">
            <div class="container">
                <a href="/" class="brand-logo">{{ __('My Heroes - Forum') }}</a>
                <ul class="right">
                    <li><a href="#!" data-target="locale" class="dropdown-trigger">{{ __('Language') }}</a></li>

                    <ul id="locale" class="dropdown-content">
                        <li><a href="/locale/pt-br">{{ __('Portuguese') }}</a></li>
                        <li><a href="/locale/en">{{ __('English') }}</a></li>
                    </ul>

                    <ul id="locale" class="dropdown-content">
                        <li><a href="/profile">{{ __('Profile') }}</a></li>
                        <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                 {{ __('Logout') }}
                             </a>

                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                 @csrf
                             </form>
                            </li>
                    </ul>

                    @if(\Auth::user())
                    <li><a href="#!" data-target="user" class="dropdown-trigger">{{ Auth::user()->name }}</a></li>
                    @else
                    <li><a href="/login">{{ __('Login') }}</a></li>
                    <li><a href="/register">{{ __('Sign Up') }}</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <div class="parallax">
        <img src="/img/help.jpg" alt="">
    </div>
</header>
