unverified 
productdetails
@forelse($products as $product)
<br>
{{$product->id}}
<a href="/productdetails/{{$product->id}}">look</a>
<a href="/verifyproduct/{{$product->id}}">verify</a>


@empty
@endforelse


<br>
verified

@forelse($productss as $product)
<br>
{{$product->id}}
<a href="/productdetails/{{$product->id}}">look</a>
<a href="/unverifyproduct/{{$product->id}}">unverify</a>


@empty
@endforelse