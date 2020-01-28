<?php

namespace App\Http\Controllers;

use App\Events\PostViewEvent;
use App\Http\Requests\CreatePostRequest;
use App\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Database\DatabaseManager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo asset('storage/Screenshot from 2020-01-22 15-26-45.png');


        $posts= Post:: with('user')->get();
        $posts[0];
        return view('pages/posts/index',compact(['posts']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages/posts/create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostRequest $request)
    {
        $post=new Post();
        $file= $request->file('file');
        if ($file=$request->file('file')){
//            $name=$file->getClientOriginalName();
            $file->store('public/images');
            //            $file->move('images',$name);
//            $post->path=$name;
        }

        $post->title=$request->title;
        $post->content=$request->description;
        $post->user_id=1;
        $post->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $post=Post::findOrFail($id);
       return view('pages/posts/show', compact(['post']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=Post::findOrFail($id);
        $user=Auth::user();
        event(new PostViewEvent($post));
        return view('pages/posts/edit',compact(['post']));
//        if ($user->can('update',$post)){
//
//        }else{
//            return "شما اجازه ویرایش این پست را ندارید";
//        }



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
        $post=Post::findOrFail($id);
        $post->title=$request->title;
        $post->content=$request->description;
        $post->save();
        return redirect('posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Post::findOrFail($id);
        $post->delete();
        redirect('posts');
    }

}
