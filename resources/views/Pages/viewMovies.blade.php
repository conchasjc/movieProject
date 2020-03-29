@extends('/index')

@section('content')
<div class="container">
  @include('./component.search')
  <br> 
  <br>

  <div class="row d-flex justify-content-center ">
    @if(count($posts) > 0)
      @foreach ($posts as $posting)
   
      <div class="card m-3" style="width:18rem;">
        <a href="/movie/{{$posting->id}}"><img class="card-img" src="{{asset('uploads/img/')}}{{"/".$posting->movieImage}}" alt="Card image cap">
        </a>
        <div class="card-body">
            <h3 class="card-title">{{$posting->movieName}}</h3>
            <small>{{$posting->movieGenre}}</small>  
            <div>
            <br>
          <p class="card-text">{{$posting->description}}</p>
        </div>
      </div>
      <div class="card-footer">
      <a href="/movie/{{$posting->id}}" class="btn btn-success" style="bottom: 0;">View Movie</a>
      </div>
       
      </div>
      @endforeach
     
    @else
        <p>No Movies Found</p>
    @endif
   
 
</div>  
<br>
<div class="float-right">
{{$posts->links()}}
</div>
</div>



@endsection