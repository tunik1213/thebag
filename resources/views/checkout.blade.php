@extends('layout')
@section('content')
<div class="container">
	<br />
	<h1>Обрана сумка: {{$product->name}}</h1>
	<br />
	<h4>Вкажіть дані для відправки:</h4>
	<form action="/ordercomplete" method="POST">
		@csrf
		<input type="hidden" id="product" name="product" value="{{$product->slug}}" />
		<div class="form-group">
		    <label for="username">Ім'я та прізвище:</label>
		    <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{old('username')}}" required>
		</div>
		<div class="form-group">
		    <label for="phone">Номер телефону:</label>
		    <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{old('phone')}}" required>
		    @error('phone')
			    <div class="alert alert-danger">{{ $message }}</div>
			@enderror
		</div>
		<div class="form-group">
		    <label for="shipping_address">Куди відправляти:</label>
		    <input type="text" class="form-control" id="shipping_address" name="shipping_address"  value="{{old('shipping_address')}}" >
		</div>
		<div class="form-group">
		    <label for="payment_type">Спосіб оплати:</label>
		    <select class="custom-select my-1 mr-sm-2" id="payment_type" name="payment_type"  value="{{old('payment_type')}}">
			    <option value="0" {{ (old("payment_type") == "0" ? "selected":"") }}>Виберіть...</option>
			    <option value="1" {{ (old("payment_type") == "1" ? "selected":"") }}>Післяплата за тарифами перевізника</option>
			    <option value="2" {{ (old("payment_type") == "2" ? "selected":"") }}>Оплата на карту ПриватБанк</option>
			</select>
		</div>
		<div class="form-group">
		    <label for="comment">Коментар:</label>
		    <input type="text" class="form-control" id="comment" name="comment"  value="{{old('comment')}}" >
		</div>

		<button type="submit" class="btn btn-primary my-1">Оформити замовлення</button>

	</form>
</div>
@endsection