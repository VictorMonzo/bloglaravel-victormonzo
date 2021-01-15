<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Posts</a>

        <div class="collapse navbar-collapse" id="navbarText">
            <span class="navbar-text">{{ fechaActual("d/m/Y") }}</span>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('inici') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('post.index') }}">Listado</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('post.create') }}">Crear</a>
                </li>
                <li class="nav-item">
                    @if(!Auth::check())
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    @else
                        <a class="nav-link" href="{{ route('salir') }}">Logout</a>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>
