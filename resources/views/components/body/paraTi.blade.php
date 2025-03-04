<div class="col-1">
    <img src="{{asset('img/img.jpg')}}" alt="img-perfil">
</div>
<div class="col">
    <form action="{{route('NewPost')}}" method="post">
    @csrf
        <textarea name="post" id="post" cols="30" rows="1" placeholder="!¿Qué estas pensando?¡" maxlength="255"></textarea>
        <hr>
        <button type="submit">Postear</button>
    </form>
</div>
