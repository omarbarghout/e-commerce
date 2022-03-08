@extends('layouts.app')
@section('content')
@foreach ($products as $product)
<div class="col-md-3 mb-3 trending">
        <div class="card">
            <img src="{{ asset('img/' . $product->image) }}" height="400vh" alt="product-image">
            <div class="card-body">
                <h5>{{ $product->name }}</h5>
                <small>{{ $product->selling_price }}</small>
            </div>
        </div>
    
</div>
@endforeach
@endsection
