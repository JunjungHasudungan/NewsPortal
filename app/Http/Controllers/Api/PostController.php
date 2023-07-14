<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use App\Http\Controllers\Controller;
use App\Http\Requests\{
    PostRequest,
    UpdatePostRequest
};
use App\Http\Resources\{
    PostCollection,
    PostResource,
};
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
       return new PostCollection(Post::all());
    }


    public function create()
    {
        //
    }

    public function store(PostRequest $request)
    {
        Post::create($request->validated());

        return response()->json('data post created..');
    }

    public function show(Post $post)
    {
        return new PostResource($post);
    }

    public function edit(Post $post)
    {
        //
    }

    public function update(UpdatePostRequest $request, Post $post)
    {
        $post->update($request->validated());

        return new PostResource($post);
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return response()->noContent();
    }
}
