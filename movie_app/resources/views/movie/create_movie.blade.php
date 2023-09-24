@extends("layout")

@section("title")
    Create movie
@endsection

@section("content")
    <h1>Create movie</h1>
    <form action="/create" method="post">
        @csrf
        <span>Title:</span>
        <input type="text" name="title" class="form-control"><br>
        <span>Description:</span>
        <textarea class="form-control" name="description"></textarea><br>
        <button class="btn btn-primary" type="submit">Create</button>
    </form>
@endsection
