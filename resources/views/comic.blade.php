@extends('layouts.main')

@section('title', 'Comics')

@section('content')
<main>
    <div class="card w-75 mt-5 mx-auto">
        <div class="card-body">
            <table class="table align-middle">
                <thead>
                  <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Series</th>
                    <th scope="col">Price</th>
                    <th scope="col">Sale date</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($comics as $comic)
                        <tr>
                        <th>{{$comic->title}}</th>
                        <td>{{$comic->series}}</td>
                        <td>{{$comic->price}}</td>
                        <td>{{$comic->sale_date}}</td>
                        <td> <a class="btn btn-primary" href="{{ route('comics.show', $comic->id) }}" role="button">See comic</a> </td>
                        </tr>
                    @empty
                    @endforelse
                </tbody>
              </table>
        </div>
      </div>
</main>
@endsection