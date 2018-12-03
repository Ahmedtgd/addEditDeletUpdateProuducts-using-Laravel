@extends('layouts.app')
@section('content')
<html>
<head>
<h1> EDIT PRODUCT </h1>
</head>
<body>
<form action="/edit/{{$product->id}}" method="POST">
{{ csrf_field() }}
Prouduct name: <input type="text" name="name" value="{{$product->name}}" placeholder="enter the product name" />
</br>
Prouduct price: <input type="text" name="price"value="{{$product->price}}" placeholder="enter the product price" />
</br>
<input type="submit" value="Add product">
</form>
</body>
</html>
@endsection('content')
