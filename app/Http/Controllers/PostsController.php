<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

//Klasse laat posts geordend zien, maakt, slaat op, verwijdert en past aan.
class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //Controller voer eerst de functie uit die hoort bij pagina INDEX
    public function index()
    {
        $title = 'Postssss';
        //Haalt Array op uit DB met get() en ordent in alfabetisch aflopende volgorde
        $posts = Post::orderBy('created_at', 'asc')->get();
        return view('posts.index')->with('posts', $posts)->with('title', $title);

        //$posts = Post::all();
        //return Post::where('title', 'Post One')->get();
        //return Post::where('title', 'Post Two')->get();
        //$posts = DB::select('SELECT * FROM posts');


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    //Aanmaken nieuwe Post
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //Input in beide velden en controle --> Slaat gegevens op in DB -->redirect
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);
        $post = new Post;
        $post -> title = $request->input('title');
        $post -> body = $request->input('body');

        //Als alles is gevalideerd --> opslaan en redirecten met succes-melding
        $post->save();
        return redirect('/posts')->with('success', 'Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post =  Post::find($id);
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit')->with('post', $post);
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
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);
        $post = Post::find($id);
        $post -> title = $request->input('title');
        $post -> body = $request->input('body');

        //Als alles is gevalideerd --> opslaan en redirecten met succes-melding
        $post->save();
        return redirect('/posts')->with('success', 'Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post  = Post::find($id);
        $post->delete();
        return redirect('/posts')->with('success', 'Post removed');
    }
}
