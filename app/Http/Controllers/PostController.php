<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Comentari;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('titol', 'ASC')->paginate(5);
        return view('post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post();
        $post->titol = $request->get('titol');
        $post->contingut = $request->get('contingut');
        $post->usuari_id = User::get('id')->first()->id;
        $post->save();
        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::where('id', '=', $id)->get();
        $comentaris = Comentari::where('post_id', '=', $id)->get();
        return view('post.show', compact('post', $post, 'comentaris', $comentaris));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return redirect()->route('inici');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Comentari::where('post_id', $id)->delete();
        Post::findOrFail($id)->delete();
        return redirect()->route('post.index');
    }

    public function nuevoPrueba() {
        $post = new Post();
        $post->titol = "Titol ".random_int(0, 1000);
        $post->contingut = "Contingut ".random_int(0, 1000);
        $post->usuari_id = 1;
        $post->save();
        return redirect()->route('post.index');
    }

    public function editarPrueba($id) {
        $post = Post::findOrFail($id);
        $post->titol = "Titol editado ".random_int(0, 1000);
        $post->contingut = "Contingut editado ".random_int(0, 1000);
        $post->save();
        return redirect()->route('post.index');
    }
}
