@extends('/index')

@section('content')
@if (Session::has('cart'))
<div class="container">
<div class="row ">
    
    <div class="col-sm-12 col-md-12 col-md-offset-3 col-sm-offset-3">
        <br>
    <br>
        <ul class="list-group">
            @foreach ($movie as $item)
                <li class="list-group-item">
                  
                    <strong>{{$item['movie']['movieName']}}</strong>
                    <span class="Badge badge-pill badge-dark">{{$item['qty']}}</span>
                  
                    <button class="btn btn-danger btn-sm float-right ml-3"> <strong>-</strong></button>
                    <span class="float-right">₱{{$item['price']}} </span>
                </li>
            @endforeach
            </ul>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <br>
<strong>Total Price: ₱ {{$totalPrice}}</strong>
<button class="btn btn-success float-right " data-toggle="modal" data-target="#exampleModal">Checkout</button>

</div>

</div>

 

</div>









<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Pay with:</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div id="paypal-button" class="justify-content-center"> <h4></h4></div>
        </div>
      
      </div>
    </div>
  </div>














@else
<br>
    <br>
<div class="row d-flex justify-content-center">
    
    <p>No Movies in the Cart</p>
</div>

@endif

@endsection