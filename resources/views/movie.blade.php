@extends('layout.main')

@section('content')
  <div class="container">
    <h1>Film</h1>

    <div class="row">
      @foreach ($movies as $movie)
        <div class="col-4 mx-2 my-4">
          <div class="card">
            <img src="{{$movie->original_title}}" class="card-img-top" alt="#">
            <div class="card-body">
              <h5 class="card-title">{{$movie->title}}</h5>
              <p class="card-text">{{$movie->date}} {{$movie->vote}} {{$movie->nationality}}</p>
            </div>
          </div>
        </div>

      @endforeach
    </div>

      
        
    
  </div>    

@endsection
