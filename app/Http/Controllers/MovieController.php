<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Movie::all();
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:movies',
            'director' => 'required',
            'duration' => 'required|integer|between:1,500',
            'relaseDate' => 'required|unique:movies',
            'imageUrl' => 'url',
        ]);

        $movie = new Movie();
        $movie->title = $request->input('title');
        $movie->director = $request->input('director');
        $movie->imageUrl = $request->input('imageUrl');
        $movie->duration = $request->input('duration');
        $movie->relaseDate = $request->input('relaseDate');
        $movie->genre = $request->input('genre');
        $movie->save();

        return $movie;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = Movie::find($id);

        return $movie;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $request->validate([
            'title' => 'required|unique:movies',
            'director' => 'required',
            'duration' => 'required|integer|between:1,500',
            'relaseDate' => 'required|unique:movies',
            'imageUrl' => 'url',
        ]);
        
        $movie = Movie::find($id);
        $movie->title = $request->input('title');
        $movie->director = $request->input('director');
        $movie->imageUrl = $request->input('imageUrl');
        $movie->duration = $request->input('duration');
        $movie->relaseDate = $request->input('relaseDate');
        $movie->genre = $request->input('genre');
        $movie->save();

        return $movie;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie = Movie::find($id)->delete();
        info($movie);
        
        return true;
    }
}
