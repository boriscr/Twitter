<?php

namespace App\Http\Controllers;

use App\Models\TwitterPost;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $post = TwitterPost::latest()->get();
        return view('index', compact('post'));
    }

    public function store(Request $request)
    {
        $posts = new TwitterPost();
        $idUs=Auth::id();
        $posts->user_id = $idUs;
        $posts->post = $request->input('post');
        $posts->save();
        $user=User::findOrFail($idUs);
        $user->post= $user->post +=1;
        $user->save();
        return back();
    }
    public function like($id)
    {
        $post = TwitterPost::findOrFail($id);
        $post->like = $post->like += 1;
        $post->save();
        return back();
    }
    public function perfil($user_ide){
        $user=User::findOrFail($user_ide);
        return view('perfil',compact('user'));
    }
}
