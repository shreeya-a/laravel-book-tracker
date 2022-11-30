@extends('layout.app')
@section('content')
<div class="container">
    <h1 style="text-align:center ;">Edit Book Details</h1>
    <form action="{{route('updateBook')}}" method="post">
        @csrf
        <input type="hidden" name="id" value={{$list->id}}>

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="title" value="{{$list->title}}">
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input type="text" class="form-control" id="author" name="author" value="{{$list->author}}">
        </div>
        <div class="mb-3">
            <label for="genre" class="form-label">Genre</label>
            <input type="text" class="form-control" name="genre" id="genre" value="{{$list->genre}}">
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status:</label>
            <select class=" form-control" name="status" id="status" value="{{$list->status}}">
                <option value="In progress">In progress</option>
                <option value="Complete">Complete</option>
                <option value="Skipped">Skipped</option>
                <option value="Wish list">Wish list</option>
            </select>
        </div>


        <div class="mb-3">
            <label for="start" class="form-label">Start</label>
            <input type="date" class="form-control" name="start" id="start"  value="{{$list->start}}">
        </div>
        <div class="mb-3">
            <label for="finish" class="form-label">Finish</label>
            <input type="date" class="form-control" name="finish" id="finish" value="{{$list->finish}}">
        </div>
        <div class="mb-3">
            <label for="review" class="form-label">Review</label>
            <textarea rows="3" class="form-control" name="review" id="review">{{$list->review}} </textarea>
        </div>

        

            <div class="d-flex bd-highlight mb-3">
                <div class="me-auto p-2 bd-highlight">
                    <button type="submit" class="btn btn-primary ">Save Changes</button>

                </div>
                <div class="p-2 bd-highlight">
                    <a class="btn btn-primary p-2" href="{{route('dashboard')}}">Cancel Changes</a>

                </div>
            </div>



        



    </form>
</div>
@endsection