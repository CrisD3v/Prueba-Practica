<nav class="navbar bg-dark border-bottom border-bottom-dark navbar-expand-lg" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">TREDA SOLUTIONS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    @if (Request::path() == '/')
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    @else
                        <a class="nav-link" aria-current="page" href="/">Home</a>
                    @endif
                </li>
                <li class="nav-item">
                    @if (Request::path() == 'registerData')
                        <a class="nav-link active" href="{{route('registerData')}}">Registrar</a>
                    @else
                        <a class="nav-link" href="{{route('registerData')}}">Registrar</a>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>
