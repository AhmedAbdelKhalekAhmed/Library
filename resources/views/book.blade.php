@extends('layouts.app')

@section('content')


<div class="jumbotron">
  <h1 class="display-3 text-center">{{  $book->title}}</h1>
        <hr class="my-4">
             
                    <div class="row">
                        <div class="col-md-3">
                             <img src="{{asset('storage/thumbnails/'.$book->image)}}" class="img-responsive"/> 
                        </div>
                        <!-- /.col-md-12 -->
                        <div class="col-md-9 text-center">
                        
                            <p>{{ $book->info}}</p>
                            <br/>
                            Author : {{$book->author}} <br/>
                            <a href="{{asset('storage/books/'.$book->book)}}" class="btn btn-primary">Download</a>
                        </div>
                        <!-- /.col-md-9 -->
                    </div>
                    <hr>


</div>


@endsection
