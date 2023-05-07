<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Models\User;
use Illuminate\Http\Request;

class DashboadController extends Controller
{
     public function index(){

         $MovieCount = Movie::count();
        $userCount = User::count();
        return view('back.dashboard.index',compact('MovieCount', 'userCount'));

     }
}
