@extends('layouts.app')

@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/img/1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="/img/2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="/img/3.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
<br>

<!-- Product -->
<div class="container">
        <h1 class="text-center">Available Products</h1>
        <hr></div>

@foreach($products as $product)
<!--<div class="container">
      <div class="row"> 
        <div class="product-grid">
             <div class="image">
                 <a href="#">
<p>
<img src="/storage/{{$product->image}}" alt="product image" style="height:400px;width:350px">

</p>

                     <div class="overlay"></div>
                 </a>
             </div>
             
             <h2 class="text"><b> {{$product->name}}</b></h2>
             <h4 class="price">Rs. {{$product->price}}</h4>
             <p><b><u>Description:</u></b>{{$product->description}} </p>
             <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <i class="far fa-star"></i>
           <center>  <a href="/productdetails/{{ $product->id}}" class="buy_now btn-success">see more</a>
           </div>
     </div>   
    </div>  -->



    <div class="container mt-5 mb-5">
    <div class="row g-2">
        <div class="col-md-4 d-flex justify-content-center">
            <div class="card p-2">
                <div class="text-center"> 
                
                <img src="/storage/{{$product->image}}" class="img-fluid" width="200" /> </div>
                <div class="content">
                    <div class="d-flex justify-content-between align-items-center">
                       <span class="category">{{$product->name}}</span> 
                       <span class="price"><h4>Rs. {{$product->price}}<h4></span> </div>
                    <p>Categories</p>
                    <div class="buttons d-flex justify-content-center"> 
                    <a href="/productdetails/{{ $product->id}}" class="buy_now btn-success">see more</a>
                  </div>
                </div>
            </div>
</div>
</div>
</div>

@endforeach

@endsection
