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
        $idUs = Auth::id();
        $posts->user_id = $idUs;
        $posts->post = $request->input('post');
        $posts->save();
        $user = User::findOrFail($idUs);
        $user->post = $user->post += 1;
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
    public function perfil($user_ide)
    {
        $user = User::findOrFail($user_ide);
        $post = TwitterPost::with('user')->where('user_id', $user_ide)->get();
        return view('perfil', compact('user', 'post'));
    }



    public function editPerfil(Request $request, $id)
    {
        $user = User::findOrFail($id); // Usar la autenticación para obtener el usuario autenticado
        //Portada img
        if ($request->hasFile('portada')) {
            $portadaImg = $request->file('portada');
            $nombreImg = $id . 'portada' . '.' . strtolower($portadaImg->getClientOriginalExtension());
            $ruta = storage_path('app/public/img/' . $nombreImg);

            // Eliminar la imagen anterior si existe
            if (file_exists($ruta)) {
                unlink($ruta);
            }

            // Almacenar la nueva imagen en la carpeta storage/app/public/img
            $portadaImg->storeAs('img', $nombreImg, 'public');


            // Actualizar la columna img_portada en la base de datos
            $user->img_portada = $nombreImg;
            $user->save();
        }
        //Perfil img
        if ($request->hasFile('perfil')) {
            $perfilImg = $request->file('perfil');
            $nombreImg = $id . 'perfil' . '.' . strtolower($perfilImg->getClientOriginalExtension());
            $ruta = storage_path('app/public/img/' . $nombreImg);

            // Eliminar la imagen anterior si existe
            if (file_exists($ruta)) {
                unlink($ruta);
            }

            // Almacenar la nueva imagen en la carpeta storage/app/public/img
            $perfilImg->storeAs('img', $nombreImg, 'public');


            // Actualizar la columna img_portada en la base de datos
            $user->img_perfil = $nombreImg;
            $user->save();
        }
        $user->name = $request->input('name');
        $user->descripcion = $request->input('descripcion');
        $user->save();
        return redirect()->back()->with('success', 'Imagen de perfil actualizada correctamente.');
    }















    /*
        if ($imgPortada) {
            // Obtener la extensión de la imagen y convertirla a minúscula
            $extensionPortada = strtolower($imgPortada->getClientOriginalExtension());
    
            // Crear el nuevo nombre de la imagen (id del usuario + portada + extensión)
            $nombrePortada = $user->id . 'portada' . '.' . $extensionPortada;
    
            // Eliminar la imagen anterior si existe

            if (Storage::exists('public/img/' . $nombrePortada)) {
                Storage::delete('public/img/' . $nombrePortada);
            }
    
            // Almacenar la nueva imagen en la carpeta storage/app/public/img
            $imgPortada->storeAs('public/img', $nombrePortada);
    
            // Actualizar la columna img en la base de datos
            $user->img_portada = $nombrePortada;
            $user->save();
        }
    
        if ($imgPerfil) {
            // Obtener la extensión de la imagen y convertirla a minúscula
            $extensionPerfil = strtolower($imgPerfil->getClientOriginalExtension());
    
            // Crear el nuevo nombre de la imagen (id del usuario + perfil + extensión)
            $nombrePerfil = $user->id . 'perfil' . '.' . $extensionPerfil;
    
            // Eliminar la imagen anterior si existe
            if (Storage::exists('public/img/' . $nombrePerfil)) {
                Storage::delete('public/img/' . $nombrePerfil);
            }
    
            // Almacenar la nueva imagen en la carpeta storage/app/public/img
            $imgPerfil->storeAs('public/img', $nombrePerfil);
    
            // Actualizar la columna img en la base de datos
            $user->img_perfil = $nombrePerfil;
            $user->save();
        }
    
        return redirect()->back()->with('success', 'Imágenes actualizadas correctamente.');
    }*/
}
