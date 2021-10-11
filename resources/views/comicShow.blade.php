@extends('layouts.main')

@section('title')
    {{$comic->title}}
@endsection

@section('content')
    <main>
        <div class="card w-75 mt-5 mx-auto">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <img src="{{ $comic->thumb }}" height="200" class="mt-2" alt="comic thumb">
                    <ul class="col">
                        <li class="my-2"> <span class="fw-bolder">Title: </span> {{ $comic->title }} </li>
                        <li class="my-2"> <span class="fw-bolder">Series: </span> {{ $comic->series }} </li>
                        <li class="my-2"> <span class="fw-bolder">Price: </span> {{ $comic->price }} </li>
                        <li class="my-2"> <span class="fw-bolder">Sale date: </span> {{ $comic->sale_date }} </li>
                        <li class="my-2 "> <span class="fw-bolder">Description: </span> {{ $comic->description }} </li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
@endsection