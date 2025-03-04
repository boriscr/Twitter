<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5a/X_icon_2.svg/1200px-X_icon_2.svg.png"
                alt=""></a>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}"><i class="bi bi-house-fill"></i>Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-search"></i>Explorar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-bell-fill"></i>Notificaciones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-chat-square-text-fill"></i>Mensajes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-people-fill"></i>Comunidades</a>
                </li>
                @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{route('perfil',Auth::user()->id)}}"><i class="bi bi-person-fill"></i>Perfil</a>
                </li>
                <button>Postear</button>
                <a href="#">
                    <div class="perfil-option">
                        <div class="info-user-img col-1">
                            <img src="{{ asset('storage/img/'. Auth::user()->img) }}" alt="">
                        </div>
                        <div class="info-user">
                            <span>{{ explode(' ', Auth::user()->name)[0] }}</span>
                            <span> {{ Auth::user()->user_ide }}</span>
                          </div>
                        </div>
                      </a>
                      @endauth
                      <form action="{{ route('logout') }}" method="post">
                          @csrf
                          <button>Salir</button>
                      </form>
            </ul>
        </div>
    </div>
</nav>
