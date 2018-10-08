@extends('layouts.app')

@section('content')


<div class="jumbotron">
  <h1 class="display-3 text-center">Welcome To Library !</h1>
        <hr class="my-4">
             @if (count($books) > 0)
                @foreach($books as $book)
            
                    <div class="row">
                        <div class="col-md-3">
                             <img src="{{asset('storage/thumbnails/'.$book->image)}}" class="img-responsive"/> 
                        </div>
                        <!-- /.col-md-12 -->
                        <div class="col-md-9 text-center">
                            <h2>{{  $book->title}}</h2>
                            <p>{{ $book->info}}</p>
                            <br/>
                            Author : {{$book->author}} <br/>
                            <a href="{{asset('storage/books/'.$book->book)}}" class="btn btn-primary">Download</a>
                            <a href="{{route('book',$book->id)}}" class="btn btn-info">More info</a>

                        </div>
                        <!-- /.col-md-9 -->
                    </div>
                    <hr>

                @endforeach
            @endif
            {{ $books->links() }}

</div>


@endsection
