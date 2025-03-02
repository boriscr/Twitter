<div class="col-1">
    <img src="https://1.bp.blogspot.com/-nWPV1uyL-RM/XvcT1j1R8GI/AAAAAAAAAso/gaA10GBMhC8kzY28E4Jw1oZwQKtJ0hqvQCLcBGAsYHQ/s1600/Active%2BTab%2BHover%2BAnimation%2Bwith%2BIcons%2Bin%2BHTML%2B%2526%2BCSS.webp"
        alt="">
</div>
<div class="col">
    <form action="{{route('NewPost')}}" method="post">
    @csrf
        <textarea name="post" id="post" cols="30" rows="1" placeholder="!¿Qué estas pensando?¡" maxlength="255"></textarea>
        <hr>
        <button type="submit">Postear</button>
    </form>
</div>
