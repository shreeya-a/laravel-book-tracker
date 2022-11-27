@extends('layout.app')
@section('content')
<div class="container">
    <h1 style="text-align: center;">Add Book to list</h1>

    <form action="{{route('saveBook')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Title of the book">
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input type="text" class="form-control" id="author" name="author" placeholder="Author of the book">
        </div>
        <div class="mb-3">
            <label for="genre" class="form-label">Genre</label>
            <input type="text" class="form-control" name="genre" id="genre" placeholder="Genre of the book">
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status:</label>
            <select class=" form-control" name="status" id="status">
                <option value="In progress">In progress</option>
                <option value="Complete">Complete</option>
                <option value="Skipped">Skipped</option>
                <option value="Wish list">Wish list</option>
            </select>
        </div>


        <div class="mb-3">
            <label for="start" class="form-label">Start</label>
            <input type="date" class="form-control" name="start" id="start">
        </div>
        <div class="mb-3">
            <label for="finish" class="form-label">Finish</label>
            <input type="date" class="form-control" name="finish" id="finish">
        </div>
        <div class="mb-3">
            <label for="review" class="form-label">Review</label>
            <textarea rows="3" class="form-control" name="review" id="review" placeholder="Review"> </textarea>
        </div>

        <button type="submit" class="btn btn-primary">Add</button>
    </form>
</div>

@endsection