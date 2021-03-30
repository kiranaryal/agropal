@extends('layouts.app')

@section('content')
<br><br><br><br><br><br><br><br><br>


@foreach($product as $product)
<form action="/buynow" method="POST" >
@csrf
<input type="hidden" value="{{$product->id}}" name="product">

<button type="submit">buy</button></form>
{{ $product->id}}

@endforeach
<div class="cart_section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cart_container">
                        <div class="cart_title">Shopping Cart<small> (1 item in your cart) </small></div>
                        <div class="cart_items">
                            <ul class="cart_list">
                                 <li class="cart_item clearfix">

                                    <div class="cart_item_image">
                                    <img src="/img/banana.jpg" alt=""></div>
                                    <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
                                        <div class="cart_item_name cart_info_col">
                                            <div class="cart_item_title">Name</div>
                                            <div class="cart_item_text">Banana</div>
                                        </div>
                                        <div class="cart_item_quantity cart_info_col">
                                            <div class="cart_item_title">Quantity</div>
                                            <div class="cart_item_text">1</div>
                                        </div>
                                        <div class="cart_item_price cart_info_col">
                                            <div class="cart_item_title">Price</div>
                                            <div class="cart_item_text">₹22000</div>
                                        </div>
                                         <div class="cart_item_total cart_info_col">
                                            <div class="cart_item_title">Total</div>
                                            <div class="cart_item_text">₹22000</div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="order_total">
                            <div class="order_total_content text-md-right">
                                <div class="order_total_title">Order Total:</div>
                                <div class="order_total_amount">₹22000</div>
                            </div>
                        </div>
                        <div class="cart_buttons"> 
                        <button type="button" class="button cart_button_clear">Continue Shopping</button> 
                        <button type="button" class="button cart_button_checkout">Add to Cart</button> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
