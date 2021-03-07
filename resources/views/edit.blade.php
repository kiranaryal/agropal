@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    You are Admin.
                </div>
<div>
<form action="/updateProduct" enctype="multipart/form-data" method="POST" >
@csrf

<div>name:
<input type="text" name="name"></div>

<div>description:
<input type="text" name="description"></div>


<div>quantity:
<input type="number" name="quantity"></div>


<div>price:
<input type="number" name="price"></div>
<input type="file" name="image">
<input type="hidden" name="product_id" value="{{$request->product_id}}">


<button>submit</button>



















            </div>
        </div>
    </div>
</div>
@endsection
