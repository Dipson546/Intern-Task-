<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    
public function home(){


    
    

    $latest = Movie::latest()->get();

    

return view('front.pages.index', compact( 'latest'));

}




    



    
    


    
}












