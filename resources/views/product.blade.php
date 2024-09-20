
@php
	$product = $viewdata['product'];
	$publicPath = '/img/products/'.$product->slug;
	$internalPath = public_path($publicPath);
	$images = scandir($internalPath);
@endphp

@extends('layout')
@section('content')

<div class="container" id="product-page">

	<div class="row">

		<div id="product-images" class="col-lg-6 col-md-12">
			
			<div class="fotorama" 
				data-width="1200" 
				data-max-width="100%" 
				data-height="600" 
				data-fit="cover"
				data-loop="true" 
				data-autoplay="true" 
				data-allowfullscreen="true"
			>
				@foreach ($images as $filename)
					@if(substr($filename, 0, 1)=='.')
						@continue
					@endif
					<img src="{{$publicPath}}/{{$filename}}" />
				@endforeach
			</div>
			
		</div>

		<div id="product-detail" class="col-lg-6 col-md-12">
			<div id="product-title">
				<h1>{{ $product->name }}</h1>
				<div id="product-price">
					{{$product->price}} грн.
				</div>
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