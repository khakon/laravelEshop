@extends('app')

@section('content')

<h1>Product Catalog</h1>

@if (count($products) > 0)

@foreach ($products as $product)

<div class="row product">
    <div class="span4">
        <div class="clearfix content-heading">
            <img class="pull-left product-img" src="/imgs/products/{{ $product->sku }}.png"/>
            <h3>
                {!! link_to_route('products.show', $product->name, [$product->id]) !!}
            </h3>
            <p>
                <strong>${{ $product->price }}</strong><br />



                {{ $product->description }}
          </p>
  </div>
</div>
</div>

@endforeach

@else
<p>
  The product catalog is currently offline.
</p>
@endif

@endsection