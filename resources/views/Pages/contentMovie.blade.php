@extends('/index')

@section('content')
<div class="container ">
<br>
    <div class="ml-3">
        <div class="row">
            <a href="/"><- Back to Movie List</a>
        </div>
        <div class="row">
            <h1>{{$posts->movieName}}</h1></div>
        <div class="row">
            
            <div class="col-md-12 col-lg-3">
            <img src="{{asset('uploads/img/')}}{{"/".$posts->movieImage}}" class="d-flex justify-content-center" height="360"alt="">
            </div>
            <div class="col-md-12 col-lg-9">
                <br>
           <h4>Genre: {{$posts->movieGenre}}</h4>
           <br>
            <p class="lead">{{$posts->description}}</p>
            <div class="row ml-auto"> 
                <h5>Price: ₱ 200.00</h5>
                <br>  </div>
                <h6  >Showing Date:  {{date('F d ,Y', strtotime($posts->showingDate)) }}</h6>
                
              
            <br>
            <a class="btn btn-primary" href="{{route('movie.addtocart',['id'=>$posts->id])}}"><i class="fas fa-cart-plus"> Add to Cart</i></a> 
            </div>
             
            
        </div>
      
        
    </div>
</div>
@endsection