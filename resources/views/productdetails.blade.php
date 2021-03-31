@extends('layouts.app')

@section('content')
<br><br><br><br><br><br><br><br><br><br>

@if($message)
{{$message}}
@endif

@forelse($product as $product)
<div class="container py-4 my-4 mx-auto d-flex flex-column">
    <div class="header">
        <div class="row r1">
            <div class="col-md-9 abc">
                <h1>{{$product->name}}</h1>
            </div>
            <div class="col-md-3 text-right pqr"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
            <p class="text-right para">Based on 250 Review</p>
        </div>
    </div>
    <div class="container-body mt-4">
        <div class="row r3">
            <div class="col-md-5 p-0 klo">
                
                    <h4><b>Price :</b>{{$product->price}}</h4>
                    <h4><b>Quantity :</b>{{$product->quantity}}</h4>
                    <h4><b>Description :</b>{{$product->description}}</h4>
                    <h4><b>Note :</b>Cash on delivery only available.</h4>
                    
                
            </div>
            <div class="col-md-7"> 
          <img src="/storage/{{$product->image}}" alt="product image" width="90%" height="95%"> </div>
        </div>
    </div>
    <div class="footer d-flex flex-column mt-5">
        <div class="row r4">
            <div class="col-md-2 myt des"><a href="#">Description</a></div>
            <div class="col-md-2 myt "><a href="#">Review</a></div>
            <form action="/cart/store" method="POST">
            @csrf
          <input type="hidden" name = "product_id" value="{{$product->id}}">
          

            <div class=""><button>Add to cart </button> </div>
            </form>
          @empty
           product not found
            <div class="col-md-2 myt "><button type="button" class="btn btn-outh4ne-warning"><a href="#">BUY NOW</a></button></div>
           

        </div>
    </div>
</div>
</div>
@endforelse


@endsection

     