<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function publicHomePage() {
         $posts = Post::paginate(9);
         return view('blog/home', ['posts'=>$posts]);
     }
    public function index()
    {
        //
        $loggedInUserId = Auth::id();
        $posts = Post::all()->where('user_id', $loggedInUserId);

        return view('adminPanel/home', ['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('adminPanel/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $post = New Post;

        $postTitle =  $request->title;
        $postBody = $request->body;
        $postUserId = Auth::id();

        $post->user_id = $postUserId;
        $post->title = $postTitle;
        $post->body = $postBody;

        $post->save();
        return redirect()->route('posts.index');
  }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $post = Post::find($id);
        $data = array(
            'id' => $id,
            'post' => $post
        );
 
        return view('blog.view_post', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $post = Post::find($id);
        return view('adminPanel.edit', ['post'=>$post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $post = Post::find($id);

        if(isset($request->commentCount)){
            $commentCount = $request->commentCount;
            $post->comment_count = $commentCount;
        }
        if (isset($request->visitcount)){
            $visitCount = $request->$visitCount;
            $post->visitCount->$visitCount;
        }
        if (isset($request->title)){
            $post->title = $request->title;
        }
        if (isset($request->body)){
            $post->body = $request->body;
        }
        $post->save();
        if (isset($request->editForm)){
            return redirect()->route('posts.index');
        } else {
            return redirect()->route('posts.show',['id'=>$id]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $post = Post::find($id);
        $post->delete();

        return redirect()->route('posts.index');
    }
}
