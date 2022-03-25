<?php

namespace App\Http\Controllers;

use App\Models\PostTabel;
use App\Http\Requests\StorePostTabelRequest;
use App\Http\Requests\UpdatePostTabelRequest;

class PostTabelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostTabelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostTabelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PostTabel  $postTabel
     * @return \Illuminate\Http\Response
     */
    public function show(PostTabel $postTabel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PostTabel  $postTabel
     * @return \Illuminate\Http\Response
     */
    public function edit(PostTabel $postTabel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostTabelRequest  $request
     * @param  \App\Models\PostTabel  $postTabel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostTabelRequest $request, PostTabel $postTabel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PostTabel  $postTabel
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostTabel $postTabel)
    {
        //
    }
}
