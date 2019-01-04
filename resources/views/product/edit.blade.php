@extends('layouts.app')
@section('content')
<html>
<head>
<h1> EDIT PRODUCT </h1>
</head>
<body>
<form action="/edit/{{$product->id}}" method="POST">
{{ csrf_field() }}
<h4>Prouduct name:</h4> <input type="text" name="name" value="{{$product->name}}" class="form-control" placeholder="enter the product name" />
</br>
<h4>Prouduct price:</h4> <input type="text" name="price"value="{{$product->price}}" class="form-control" placeholder="enter the product price" />
</br>
<input class="btn btn-primary"  type="submit" value="Confirm changes">
</form>
</body>
</html>
@endsection('content')
