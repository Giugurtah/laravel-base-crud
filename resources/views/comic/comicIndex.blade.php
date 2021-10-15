@extends('layouts.main')

@section('title', 'DC | Comics')

@section('content')
<main>
  <div class="card w-75 my-5 mx-auto">
    <div class="card-body">
      <div class="pe-4 text-end">
        <a href="{{ route('comics.create') }}">
          <div class="btn btn-primary mb-2">Add comic</div>
        </a>
        </div>
          <table class="table align-middle">
            <thead>
              <tr>
                <th scope="col">Title</th>
                <th scope="col">Series</th>
                <th scope="col">Price</th>
                <th scope="col">Sale date</th>
                <th scope="col" width="250">Action</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($comics as $comic)
                <tr>
                <th>{{$comic->title}}</th>
                <td>{{$comic->series}}</td>
                <td>{{$comic->price}}</td>
                <td>{{$comic->sale_date}}</td>
                <td class="position-relative"> 
                  <a class="btn mb-2 btn-primary" href="{{ route('comics.show', $comic->id) }}" role="button">See</a> 
                  <a class="btn mb-2 btn-secondary" href="{{ route('comics.edit', $comic->id) }}" role="button">Update</a> 
                  <form class="d-inline-block position-absolute t-0 ms-1 mb-2" action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                </td>
                </tr>
              @empty
                <div>Non ci sono fumetti</div>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection