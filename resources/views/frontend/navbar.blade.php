<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="/">
            <i class="bi-back"></i>
            <span>Personality Type</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-lg-5 me-lg-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link @if(Request::is('maketest')) active @endif" href="/maketest">Make Test</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link @if(Request::is('results')) active @endif" href="/results">Results</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link @if(Request::is('about')) active @endif" href="/about">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link @if(Request::is('contact')) active @endif" href="/contact">Contact</a>
                </li>
            </ul>

        @if (Route::has('login'))
            <div class="d-none d-lg-block">
            @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form> 
            @else
                <a
                    href="{{ route('login') }}"
                    class="rounded-md px-3 py-2 btn custom-btn-login text-white ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                >
                    Log in
                </a>
                @if (Route::has('register'))
                    <a
                        href="{{ route('register') }}"
                        class="rounded-md px-3 py-2 btn custom-btn-register text-white ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                    >
                        Register
                    </a>
                @endif
            @endauth    
            </div>
        @endif
        </div>
    </div>
</nav>