@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

            <h1>

    @foreach($products as $product)
<p>
{{$product->name}} :{{$product->description}}
<img src="/storage/{{$product->image}}" alt="product image" class="w-100">

</p>
    @endforeach

            </h1>



            </div>
        </div>
    </div>
</div>
@endsection
