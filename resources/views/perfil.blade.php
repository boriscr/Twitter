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
                <img src="{{ asset('img/' . $user->img_portada) }}" alt="">
                <div class="perfil-img">
                    <img src="{{ asset('img/' . $user->img_perfil) }}" alt="">
                </div>
            </div>
            <div class="opciones-perfil">
                @if ($user->id == Auth::user()->id)
                    <button type="button" id="btn-edit">Editar</button>
                    <div class="edit-perfil-container" id="edit-perfil-container">
                        <div class="edit-perfil-heder">
                            <button type="button" id="btn-edit-cerrar">X</button>
                            <h5>Editar perfil</h5>
                            <form action="{{ route('editPerfil', Auth::user()->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <button id="btn-edit-guardar">Guardar</button>
                        </div>
                        <div class="edit-perfil-body">
                            <div class="img-content">
                                <div class="perfil-img-portada">
                                    <img id="preview-portada" src="{{ asset('img/' . $user->img_portada) }}"
                                        alt="img-portada">
                                    <div class="box-edit-img-input"
                                        onclick="document.getElementById('portada').click()">
                                        <i class="bi bi-camera"></i>
                                    </div>
                                    <input type="file" name="portada" id="portada"
                                        onchange="previewImage(event, 'preview-portada')">
                                </div>
                                <div class="perfil-img">
                                    <img id="preview-perfil" src="{{ asset('img/' . $user->img_perfil) }}"
                                        alt="img-perfil">
                                    <div class="box-edit-img-input" onclick="document.getElementById('perfil').click()">
                                        <i class="bi bi-camera"></i>
                                        <input type="file" name="perfil" id="perfil"
                                            onchange="previewImage(event, 'preview-perfil')">
                                    </div>
                                </div>
                            </div>
                            <div class="edit-perfil-inputs">
                                <label for="name">Nombre</label>
                                <input type="text" name="name" id="name" value="{{ $user->name }}">
                                <label for="descripcion">Descripcion</label>
                                <textarea name="descripcion" id="descripcion" cols="1" rows="3">{{ $user->descripcion }}</textarea>
                            </div>
                        </div>
                        </form>

                        <script>
                            function previewImage(event, previewId) {
                                var reader = new FileReader();
                                reader.onload = function() {
                                    var output = document.getElementById(previewId);
                                    output.src = reader.result;
                                };
                                reader.readAsDataURL(event.target.files[0]);
                            }
                        </script>
                        </script>
                    </div>
                @else
                    <button id="btn-seguir">Seguir</button>
                @endif
                <div class="descripcion-perfil-main">
                    <p class="name">{{ $user->name }} </p class="name">
                    <p class="user">{{ $user->user_ide }}</p>
                    @if ($user->descripcion != null)
                        <p class="descripcion">{{ $user->descripcion }}</p>
                    @endif
                </div>
            </div>
            <div class="body-perfil-container">
                <x-body.posts :post="$post" />
            </div>
        </div>
        <div class="extras-content col-1">
            <x-body.extra />
        </div>
    </div>
</x-body.body>
