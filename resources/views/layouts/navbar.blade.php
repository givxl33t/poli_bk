<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">
        <a class="navbar-brand" href="/">e-Poli</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 text-center">
                <li class="nav-item mx-2">
                    <a class="nav-link" aria-current="page" href="{{ '/' }}">Home</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="{{ url('antrianpage') }}">Antrian</a>
                </li>
            </ul>
            <div class="kanan navbar-nav ml-auto">
                <a href="{{ route('login') }}" class="btn btn-lg login btn-outline-primary mx-2">Login</a>
            </div>
        </div>
    </div>
</nav>
