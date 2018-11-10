@extends('layouts.app')

@section('content')



<div style="text-align:center">
<h1>
	Въведи нов ресторант!
</h1>
<form action="{{ route('restaurant.store')}}" method="POST">
{{ csrf_field() }}
	<p>Името на ресторанта</p>
	<input type="text" name="name">
	<p>Адрес на ресторанта</p>
	<input type="text" name="address">
	<p>Места в петък вечер</p>
	<input type="number" name="capacity_friday">
	<p></p>
	<select name="menu_id">
		@foreach( $menu as $key )
		<option value="{{ $key->id }}">{{ $key->id }}</option>
		@endforeach
	</select>
	<p></p>
	<input class="btn btn-secondary" type="submit" value="Въведи">
</form>
</div>
@endsection