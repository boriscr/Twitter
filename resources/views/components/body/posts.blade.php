<div class="post-section-container">
    @foreach ($post as $item)
    <div class="post-box">
        <div class="col-1">
            <img src="https://www.k12digest.com/wp-content/uploads/2024/03/1-3.jpg" alt="">
        </div>
        <div class="post-body-box">
            <div class="post-heder-content">
                {{$item->created_at}}
            </div>
            <div class="post-body-content">
                
                {{$item->post}}
            </div>
            <div class="intereacciones-content">
                <button class="chat"><i class="bi bi-chat"></i></button>
                <button class="repost"><i class="bi bi-arrow-down-up"></i></button>
                <form action="{{route('like',$item->id)}}" method="POST">
                    @csrf
                    <button class="heart"><i class="bi bi-heart"></i>{{$item->like}}</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>
