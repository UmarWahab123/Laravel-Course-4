<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // type all the crud methods create,read,update,delete

    public function addPost()
    {
        return view('add-post');
    }
    public function createPost(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        return back()->with('post_created', 'Post has been created successfully!');
    }
    public function getPost()
    {
        $posts = Post::orderBy('id', 'ASC')->get();
        return view('getposts', compact('posts'));
    }
    public function getPostById($id)
    {
        $post = POST::where('id', $id)->first();
        return view('single-post', compact('post'));
    }
    public function deletePost($id)
    {
        Post::where('id', $id)->delete();
        return back()->with('post_deleted', 'Post has been deleted sucessfully!');
    }
    public function editPost($id)
    {
        $post = Post::find($id);
        return view('edit-post', compact('post'));
    }
    public function updatePost(Request $request)
    {
        $post = Post::find($request->id);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        return back()->with('post_updated', 'Post has been Updated successfully!');
    }

}
