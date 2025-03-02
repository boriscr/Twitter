<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('home')}}">Para ti</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Siguiendo</a>
                </li>
                <li class="nav-item">
                    <select name="unbloques" id="unbloques">
                        <option value="tendencias">Tendencias</option>
                        <option value="recientes">Más recientes</option>
                        <option value="mas me gusta">Más me gusta</option>
                    </select>
                </li>
        </div>
        </ul>
    </div>
    </div>
</nav>

<div class="container-create-post">
    <x-body.paraTi />
</div>
