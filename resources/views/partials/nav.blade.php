<nav class="navbar navbar-light bg-light">
    <a class="nav-link" href="{{ route('inici') }}">Inici</a>
    <a class="nav-link" href="{{ route('post.index') }}">Llistat de posts</a>
    <a class="nav-link" href="{{ route('post.nuevoPrueba') }}">Crear post</a>
    <a class="nav-link" href="{{ route('post.create') }}">Crear post form</a>

    <a href="#" title="Placeholder link title" class="text-decoration-none float-right">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar-event" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"></path>
            <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"></path>
        </svg>
        {{ fechaActual("d/m/Y") }}
    </a>
</nav>
