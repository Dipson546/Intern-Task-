<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class MovieControler extends Controller
{
    public function index()
    {
        $movies = Movie::get();
        
        return view('back.dashboard.movie',compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('back.dashboard.createmovie');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'pics' => 'required',
            'pics.*' => 'required|image'
            
        ]);
        foreach($validated['pics'] as $pic){
            $img = Image::make($pic);

            $filename = "IMG".date('YmdHis').rand(100,9999).".jpg";

            $img->resize(1280,720,function($constraint){
              $constraint->aspectRatio();
              $constraint->upsize();

            })->save(public_path("images/{$filename}"));  
            
            $validated['images'][] = $filename;
                  
        }
        movie::create($validated);

        return redirect()->route('back.movie.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        
        return view('back.dashboard.editmovie',compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movie $movie)
    {
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required|string',

            'pics' => 'sometimes',
            
        ]);

           $validated['images'] = $movie->images;
           if($request->hasFile('pics')){
            foreach($validated['pics'] as $pic){
                $img = Image::make($pic);
    
                $filename = "IMG".date('YmdHis').rand(100,9999).".jpg";
    
                $img->resize(1280,720,function($constraint){
                  $constraint->aspectRatio();
                  $constraint->upsize();
    
                })->save(public_path("images/{$filename}"));  
                
                $validated['images'][] = $filename;
                      
            }

           }

    
        $movie->update($validated);

        return redirect()->route('back.movie.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        
        $movie->delete();

        return redirect()->route('back.movie.index');
    }
}
