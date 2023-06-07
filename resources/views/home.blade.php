@extends('layouts.main')


@section('content')
<div class="mdb-home">


  <div class="mdb-jumbotron">

    <div class="text-center vh-100 mdb-jumbotron-content container">
      <h1 class="text-center my-5">Welcome</h1>

      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem praesentium exercitationem officiis tempora modi deleniti assumenda libero, laboriosam ipsa fugit error a eos consectetur ab fugiat esse. Soluta, iure repellat!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque ipsam soluloremta maiores fugiat quibusdam porro blanditiis! Lorem ipsum dolor sit amet
      </p>

      <div class="btn btn-danger mt-5">
        <a href="{{route('all_movies')}}">
          See All Movies
        </a>
      </div>
    </div>

  </div>

  <div class="mdb-home-content text-center">
    <div class="container pt-5">

      <h1>Our Movies</h1>

      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia alias, consectetur modi magnam expedita quas magni cumque natus quae voluptatibus, corporis nam! Dolorem adipisci saepe voluptate officia, nemo cupiditate blanditiis eius optio.</p>

      <h2 class="mt-5">Movies</h2>

      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum repudiandae aperiam commodi fugiat accusamus, accusantium voluptas eius? Nulla odio id, sapiente, vel laudantium distinctio accusamus blanditiis earum ea fugit suscipit.</p>
    </div>
  </div>
  </div>

@endsection
