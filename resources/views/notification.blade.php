@extends('layout')
@section('content')
<div class="container">
	<br />
	<h1>Обрана сумка: {{$product->name}}</h1>
	<br />
	<h4>Сповістити мене про наявність:</h4>
	<form action="/addnotification" method="POST">
		@csrf
		<input type="hidden" id="product" name="product" value="{{$product->slug}}" />
		<div class="form-group">
		    <label for="contact">Вкажіть контакт куди Вам прислати сповіщення:</label>
		    <input type="text" class="form-control @error('contact') is-invalid @enderror" id="contact" name="contact" value="{{old('contact')}}" required>
		</div>
        <button type="submit" class="btn btn-primary my-1">Відправити</button>

	</form>
</div>
@endsection
