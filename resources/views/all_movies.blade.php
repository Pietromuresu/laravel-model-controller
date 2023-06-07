@extends('layouts.main')

@section('content')

<main>

  <h1 class="text-center mb-5">All Movies</h1>
  <div class="container">


    <table class="table table-dark rounded overflow-hidden">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Nationality</th>
          <th scope="col">Launch Date</th>
          <th scope="col">Vote</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($movies as $movie)

        <tr>
          <th scope="row">{{$movie->id}}</th>
          <td>{{$movie->title}}</td>
          <td>{{$movie->nationality}}</td>
          <td>{{$movie->date}}</td>
          <td>{{$movie->vote}}</td>
        </tr>

        @endforeach
      </tbody>
    </table>

  </div>
</main>
  @endsection
