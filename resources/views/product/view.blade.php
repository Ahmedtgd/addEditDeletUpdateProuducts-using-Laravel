@extends('layouts.app')
@section('content')
<table>

<tr>
<td>
NAME
 </td>
<td>
PRICE
</td>
<td>
EDIT
</td>
<td>
DELETE
</td>
</tr>
@foreach($product as $myproduct)
<tr>
<td>
name:{{$myproduct->name}}
 </td>
<td>
price:{{$myproduct->price}}
</td>
<td>
<a class="btn btn-primary" href="edit/{{$myproduct->id}}">EDIT</a>
</td>
<td>
<a class="btn btn-danger" href="add/{{$myproduct->id}}">Delete</a>
</td>
</tr>
@endforeach
</table>
@endsection


