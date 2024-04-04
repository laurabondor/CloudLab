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

            <div class="d-none d-lg-block">
                <a href="login" class="navbar-icon bi-person smoothscroll"></a>
            </div>
        </div>
    </div>
</nav>