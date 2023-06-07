@extends('layouts.main')

@section('content')

<main>

  <div class="mdb-specifics">

    <h1 class="text-center">{{$movie->title}}</h1>
    <div class="container">

      <div class="row mt-5">
        <div class="col">
          <table class="table">
            <thead>
              <tr>
                <th class="py-3" scope="colspan-2"><h4>Specifics</h4></th>
                <th></th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="w-40">Original Title:</td>
                <td class="fs-small">
                  {{$movie->original_title}}
                </td>
              </tr>
              <tr>
                <td>Nationality: </td>
                <td>
                  {{$movie->nationality}}
                </td>
              </tr>
              <tr>
                <td>Launch Date: </td>
                <td>
                  {{date_format(date_create($movie->date), "M d Y")}}
                </td>
              </tr>
              <tr>
                <td>Critic Vote: </td>
                <td>
                  {{ $movie->vote }} / 10
                </td>
              </tr>

            </tbody>
          </table>

        </div>


      </div>

    </div>
  </div>

</main>
  @endsection
