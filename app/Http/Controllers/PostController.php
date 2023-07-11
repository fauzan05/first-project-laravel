<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Storage::get('posts.txt');
        $posts = explode("\n", $posts);
        $array_data = [
            'posts' => $posts
        ];
        return view('posts/index', $array_data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('posts/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        $posts = Storage::get('posts.txt');
        $posts = explode("\n", $posts);
        foreach ($posts as $post) {
            $post = explode(",", $post);
            if ($post[0] == $id) {
                $view_data = [
                    'post' => $post
                ];
                return view('posts/show', $view_data);
            }
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}