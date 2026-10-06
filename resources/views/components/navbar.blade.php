<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ url('/') }}">
            <i class="bi bi-mortarboard-fill me-1"></i> PWL
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu"
                aria-controls="navMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('user') ? 'active fw-semibold' : '' }}"
                       href="{{ route('user.index') }}">
                        <i class="bi bi-people me-1"></i> List User
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('user/create') ? 'active fw-semibold' : '' }}"
                       href="{{ route('user.create') }}">
                        <i class="bi bi-person-plus me-1"></i> Tambah User
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
