@extends('layout.app')

@section('content')

<style>

</style>

<!-- <div class="container"> -->
    <h1 style="text-align: center;" class="mt-3 mb-3">Welcome! Bibliolater {{auth()->user()->name}}</h1>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
        <a href="{{route('add-book')}}" class="btn btn-primary me-md-2">Add Book</a>
    </div>

    <table class="table table-bordered ">
        <th>SN</th>
        <!-- <th>ID</th> -->
        <th>Title</th>
        <th>Author</th>
        <th>Genre</th>
        <th>Status</th>
        <th>Start</th>
        <th>Finish</th>
        <th>Review</th>
        <th colspan="2">Action</th>
        <tbody>
            @php
            $SN=1;
            @endphp
            @foreach($list as $value)
            @if(auth()->user()->id==$value->user_id)
            <tr>
                <td>{{$SN++}}</td>
                <!-- <td>{{$loop->iteration}}</td> -->
                <td>{{$value->title}}</td>
                <td>{{$value->author}}</td>
                <td>{{$value->genre}}</td>
                <td>{{$value->status}}</td>
                <td>{{$value->start}}</td>
                <td>{{$value->finish}}</td>
                <td>{{$value->review}}</td>
                <td>
                    <a href="{{url('/edit/'.$value->id)}}" class="btn btn-warning">Edit</a>
                    <a href="{{url('/delete/'.$value->id)}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endif
            @endforeach
        </tbody>
    </table>


    <!-- </div> -->
    @endsection