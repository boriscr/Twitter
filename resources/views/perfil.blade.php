<x-body.body>
    <div class="content-index">
        <div class="nav-content">
            <x-body.nav />
        </div>
        <div class="contenido-content">
            <div class="nav-heder-perfil-container">
                <a href="{{ back() }}"><i class="bi bi-arrow-left-short"></i></a>
                <div class="nav-heder-perfil-date">
                    <p>{{ explode(' ', $user->name)[0] }}</p>
                    <p>{{ $user->post }} posts</p>
                </div>
            </div>

            <div class="img-content">
                <img src="{{ asset('img/' . $user->img) }}" alt="">
                <div class="perfil-img">
                    <img src="{{ asset('img/' . $user->img) }}" alt="">
                </div>
            </div>
        </div>
        <div class="extras-content col-1">
            <x-body.extra />
        </div>
    </div>
</x-body.body>
