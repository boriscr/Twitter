<?php

namespace App\Http\Controllers;
use App\Models\TwitterPost;
use Illuminate\Http\Request;

class PostController extends Controller
{
public function index(){
    $post=TwitterPost::latest()->get();
    return view('index',compact('post'));
}

    public function store(Request $request){
        $posts= new TwitterPost();
        $posts->post= $request->input('post');
        $posts->save();
        return back();
    }
    public function like($id){
        $post=TwitterPost::findOrFail($id);
        $post->like= $post->like+=1;
        $post->save();
        return back();
    }
}
