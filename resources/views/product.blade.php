
@php
	$product = $viewdata['product'];
	$publicPath = '/img/products/'.$product->slug;
	$internalPath = public_path($publicPath);
	$images = scandir($internalPath);
@endphp

@extends('layout')
@section('content')

<div class="container">
	<h1 id="product-title">{{ $product->name }}</h1>

	<div class="row">

		<div id="product-images" class="col-lg-6 col-md-12">
			
			<div class="fotorama" data-width="1200" data-max-width="100%" data-loop="true" data-autoplay="true" data-allowfullscreen="true" data-fit="cover">
				@foreach ($images as $filename)
					@if(substr($filename, 0)=='.')
						@continue
					@endif
					<img src="{{$publicPath}}/{{$filename}}" />
				@endforeach
			</div>
			
		</div>

		<div id="product-detail" class="col-lg-6 col-md-12">
			<div id="product-price">
				{{$product->price}} грн.
			</div>

			<div id="prodict-description">
				{!!$product->description!!}
			</div>
		</div>

	</div>

</div>

@endsection

@section('head')
<link href="/fotorama.css" rel="stylesheet">
@endsection

@section('scripts')
<script src="/fotorama.js"></script>
@endsection