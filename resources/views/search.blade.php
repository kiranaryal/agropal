@extends('layouts.app')

@section('content')

<div>
@if(isset($products))
<p>the search results for your query</p>{{$q}}
</b>are </b>
product details 
<table>
<thead>
<tr>

<th>name</th>
<th>description</th>

</tr></thead>



<tbody>

@foreach ($products as $product)
<tr>
<td>

<img src="/storage/{{$product->image}}" class=" rounded-circle" style="height:40px;width:40px">
<a href="/">{{ $product->name }}</a>

</td>

<td>
{{$product->description}}</td>

</tr>
@endforeach





</tbody>











</table>



@else
sorry no products found
@endif


</div>



@endsection