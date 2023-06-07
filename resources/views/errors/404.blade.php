@extends('layouts.main')


@section('content')
<main>

  <div class="container text-center pt-5">

    <h1 class="pt-5">Sorry,  Movie Not found!</h1>

    <div class="btn btn-success mt-5">
      <a href="{{route('home')}}">
        Go Home
      </a>
    </div>
  </div>

</main>
@endsection
