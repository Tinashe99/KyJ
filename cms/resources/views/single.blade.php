@extends('layouts.master')

@section('content')
<div class = "container">
    <div class = "row">
        <div class = "col-lg-10 mx-auto">
            <h3 class = "mt-4">{{ $post->title }} <span class = "lead"> <a href = "#"> {{ $post->user->name }} </a></span> </h3>
            <hr>
            <p>Posted {{ $post->created_at->diffForHumans( }} </p>
            <hr>
            <p class = "lead">{{ $post->body }}</p>
            <hr>
            <div class = "card my-4">
                <h5 class = "card-header">Leave a comment:</h5>
                <div class = "card-body">
                    <form>
                        <div class = "form-group">
                            <textarea class = "form-control" rows = "3"></textarea>
                        </div>
                        <button type = "submit" class = "btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection