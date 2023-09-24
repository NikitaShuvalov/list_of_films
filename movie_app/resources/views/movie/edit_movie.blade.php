@extends("layout")

@section("title")
    Edit movie
@endsection

@section("content")
    <h1>Edit movie</h1>
    <form action="/edit/{{$movie->id}}" method="post">
        @csrf
        <span>Title:</span>
        <input type="text" value="{{ $movie->title }}" name="title" class="form-control"><br>
        <span>Description:</span>
        <textarea class="form-control" name="description">{{ $movie->description }}</textarea><br>
        <button class="btn btn-primary" type="submit">Edit</button>
    </form>
@endsection
