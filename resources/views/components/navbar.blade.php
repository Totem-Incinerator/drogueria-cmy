<div class="top-bar py-2 text-center">
    <span>
        <i class="bi bi-telephone-fill me-2"></i> Nuestras líneas de atención: <strong>(602) 725-1000</strong>
    </span>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container">

        <a class="navbar-brand" href="{{ route('inicio') }}">
            <img src="/img/logouno.png" width="180" alt="Logo">
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#menuNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menuNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">
                        <i class="bi bi-house-door me-1"></i> Inicio
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('sedes.*') ? 'active' : '' }}" href="{{ route('sedes.ubicacion') }}">
                        <i class="bi bi-geo-alt me-1"></i> Nuestras Sedes
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs(['pqrs', 'pqrs.*']) ? 'active' : '' }}" href="{{ route('pqrs.index') }}">
                        <i class="bi bi-chat-dots me-1"></i> PQRS
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('nosotros') }}">
                        <i class="bi bi-people me-1"></i> Nosotros
                    </a>
                </li>

                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">
                        <i class="fa-regular fa-user me-1"></i> Login
                    </a>
                </li> --}}
            </ul>
        </div>
    </div>
</nav>
