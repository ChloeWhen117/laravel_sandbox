<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    // Display a listing of the resource.
    //
    @return \Illuminate\Http\Response
        
    public function index()
    {
        //
    }
    //
    // Show the form for creating a new resource.
    //
    @return \Illuminate\Http\Response
    
    public function create()
    {
        //
    }
    //
    // Store a newly created resource in store.
    //
    @param  \Illuminate\Http\Request  $request
    @return \Illuminate\Http\Response
    
    public function store(Request $request)
    {
        //
    }
    //
    // Display the specified resource.
    //
    @param  \App\Post  $post
    @return \Illuminate\Http\Response
    
    public function show(Post $post)
    {

    }
    //
    // Show the form for editing the specified resource.
    //
    @param  \App\Post  $post
    @return \Illuminate\Http\Response
    
    public function edit(Post $post)
    {

    }
    //
    // Update the specified resource in store.
    //
    @param  \Illuminate\Http\Request  $request
    @param  \App\Post  $post
    @return \Illuminate\Http\Response
    
    public function update(Request $request, Post $post)
    {

    }
    //
    // Remove the specified resource from store.
    //
    @param  \App\Post  $post
    @return \Illuminate\Http\Response
    
    public function destroy(Post $post)
    {

    }
}
