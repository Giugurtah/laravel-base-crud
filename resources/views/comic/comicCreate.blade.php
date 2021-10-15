@extends('layouts.main')

@section('title', 'DC | comic create')

@section('content')
<main>
    <div class="card w-75 my-5 mx-auto">
        <div class="card-body p-4">
            <form action="{{ route('comics.store') }}" method="POST" class="row">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="col-6 mb-3">
                    <label for="title" class="form-label">Title:</label>
                    <input type="text" class="form-control" id="title" name="title">
                    <div id="title" class="form-text">Insert comic title here</div>
                </div>
                <div class="col-6 mb-3">
                    <label for="series" class="form-label">Series:</label>
                    <input type="text" class="form-control" id="series" name="series">
                    <div id="series" class="form-text">Insert comic series here</div>
                </div>
                <div class="col-6 mb-3">
                    <label for="price" class="form-label">Price:</label>
                    <input type="number" step="0.01" class="form-control" id="price" name="price">
                    <div id="price" class="form-text">Insert comic price here</div>
                </div>
                <div class="col-6 mb-3">
                    <label for="sale_date" class="form-label">Sale date:</label>
                    <input type="text" class="form-control" id="sale_date" name="sale_date">
                    <div id="sale_date" class="form-text">Insert comic sale date here (in format 'yyyy-mm-dd')</div>
                </div>
                <div class="col-12 mb-3">
                    <label for="thumb" class="form-label">Thumb image:</label>
                    <input type="text" class="form-control" id="thumb" name="thumb">
                    <div id="thumb" class="form-text">Insert comic thumb image here</div>
                </div>
                <div class="col-12 mb-3">
                    <label for="description" class="form-label">Description:</label>
                    <textarea type="text" class="form-control" rows="5" id="description" name="description"></textarea>
                    <div id="description" class="form-text">Insert comic description here</div>
                </div>

                <div class="col-12"><button class="btn btn-primary mb-2" type="submit">Add comic</button></div>
            </form>
        </div>
    </div>
</main>
@endsection