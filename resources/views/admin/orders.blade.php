
@forelse($orders as $order)
<br>
        {{$order->id}}
<form action="/successfulorder" method="post">
@csrf
<input type="hidden" name="user_id" value="{{$order->user_id}}">
<input type="hidden" name="product_id" value="{{$order->product_id}}">
<input type="hidden" value="{{$order->quantity}}" name="quantity">
{{$order->quantity}}
<button type="submit">successful</button>
</form>
<form action="/unsuccessfulorder" method="post">
@csrf
<input type="hidden" name="user_id" value="{{$order->user_id}}">
<input type="hidden" name="product_id" value="{{$order->product_id}}">
<input type="hidden" value="{{$order->quantity}}" name="quantity">

<button type="submit">unsuccessful</button>
</form>



@empty
no orders
@endforelse