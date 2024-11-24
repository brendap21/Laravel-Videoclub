<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <i class="bi bi-film"></i> <!-- Ícono de Bootstrap Icons -->
            Videoclub
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item {{ Request::is('catalog*') && !Request::is('catalog/create') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('catalog.index') }}">
                        <i class="bi bi-collection-play"></i> <!-- Ícono moderno -->
                        Catálogo
                    </a>
                </li>
                <li class="nav-item {{ Request::is('catalog/create') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('/catalog/create') }}">
                        <i class="bi bi-plus-circle"></i> <!-- Ícono moderno -->
                        Nueva película
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('auth/logout') }}">
                        <i class="bi bi-box-arrow-right"></i>
                        Cerrar sesión
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
