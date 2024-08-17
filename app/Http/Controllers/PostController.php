<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $posts = Post::find(1)->comments;//كل التعليقات الخاصة بالمستخدم رقم  1
        // return view("post.comment",['posts'=>$posts]);
        $post = Post::all();
        return view("post.index",['post'=>$post]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("post.insert");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>['required','max:10'],
            'body'=>'required',
        ]);
        Post::create([
            'title'=>$request->title,
            'body'=>$request->body,
        ]);
        return response("تم حفظ البيانات");
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
       $post = Post::where('id',$id)->first();
        return view("post.edit",compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $post->update($request->all());
         $post = Post::all();
        return view("post.index",['post'=>$post]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        Post::destroy($post->id);
        return redirect()->route("post.index");
    }
}
