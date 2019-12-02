<?php

namespace App\Http\Controllers;
use App\Comment;
use App\Post;
use Auth;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
            return view("post.index")->with(['posts' => Post::all()]);
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("post.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::check()) {
            $idUser = \Auth::user()->id;

            $this->validate( $request, [
                "subject"=>"required",
                "idpokemon"=>"required",
                "content"=>"required",
            ]);
      
            $post = new Post([
                "subject" => $request->get("subject"),
                "idpokemon" => $request->get("idpokemon"),
                "content" => $request->get("content"),
                "idusuario" => $idUser,
            ]);
            $post->save();
            return redirect()->route('post.create');
        }
        else {
            return "Tienes que estar logeado para poder publicar post";
        }
    }

    /**
     * Display the specified resource.
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $post = Post::find($id);
        $coments2 = Comment::all();
        $aux = [];
        $a=0;
        foreach ($coments2 as $comment) {
            if ($comment->idpost==$id) {
                $aux[$a]=$comment;
                $a++;
            }
        }
        return view ("post.show",compact("post","aux"));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
