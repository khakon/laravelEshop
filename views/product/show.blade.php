@extends('app')

@section('content')

<img class="pull-left product-img" src="/imgs/products/{{ $product->sku }}.png"/>

<h1>{{ $product->name }}</h1>

{!! Form::open(array('url' => '/checkout')) !!}
{!! Form::hidden('product_id', $product->id) !!}
<script
src="https://checkout.stripe.com/checkout.js" class="stripe-button"
data-key="{{env('STRIPE_API_PUBLIC')}}"
data-name="WeDewLawns.com"
data-billingAddress=true
data-shippingAddress=true
data-label="Buy ${{ $product->price }}"
data-description="{{ $product->name }}"
data-amount="{{ $product->priceToCents() }}">
</script>
{!! Form::close() !!}

<p>
{{ $product->description }}
</p>

@endsection