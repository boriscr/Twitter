<div class="post-section-container">
    @foreach ($post as $item)
        <div class="post-box">
            <a href="{{route('perfil',$item->user->id)}}">
                <div class="col-1">
                    @if ($item->img == null)
                        <img src="{{ asset('img/'. $item->user->img) }}" alt="img-perfil">
                    @endif
                </div>
            </a>
            <div class="post-body-box">
                <a href="{{route('perfil',$item->user->id)}}">
                    <div class="post-heder-content" style="display: inline-flex; gap:8px;">
                        {{ $item->user->name }}
                        <p style="color: grey">{{ $item->user->user_ide }}</p>
                        {{ $item->created_at }}
                    </div>
                </a>
                <div class="post-body-content">
                    {{ $item->post }}
                </div>
                <div class="intereacciones-content">
                    <button class="chat"><i class="bi bi-chat"></i></button>
                    <button class="repost"><i class="bi bi-arrow-down-up"></i></button>
                    <form action="{{ route('like', $item->id) }}" method="POST">
                        @csrf
                        <button class="heart"><i class="bi bi-heart"></i>{{ $item->like }}</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>
