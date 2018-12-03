@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html>
<head>
<h1> ADD PRODUCT </h1>
</head>
<body>
@if(count($errors)>0)
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{$error}}</li>
@endforeach
</ul></div>
@endif

<form action="add" method="POST">
{{ csrf_field() }}
<div class="form-group{{$errors -> has('name') ? 'has-error' : ''}}">
Prouduct name: <input type="text" name="name" value="{{Request::old('name')}}" class="form-control"  placeholder="enter the product name" />
</div>
</br>
<div class="form-group{{$errors -> has('price') ? 'has-error' : ''}}">
Prouduct price: <input type="text" name="price" value="{{Request::old('price')}}"  class="form-control" placeholder="enter the product price" />
</div>
</br>
<input  class="btn btn-primary" type="submit" value="Add product">
</form>
</body>
</html>
@endsection
