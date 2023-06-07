<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie as Movie;

class PageController extends Controller
{
  public function index(){
    return view('home');
  }

  public function allMovies(){
    $movies = Movie::all();

    return view('all_movies', compact('movies'));
  }

  public function movieDetails($id){
    $movie = Movie::find($id);
    if(empty($movie)){
      return redirect('404');
    }

    return view('movie_details', compact('movie'));
  }
}
