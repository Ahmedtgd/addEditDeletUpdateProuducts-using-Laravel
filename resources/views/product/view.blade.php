@extends('layouts.app')
@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">



                <div class="card-body">
                  <div class="card-header  row justify-content-center"><h3>Modify products list</h3> </div>
                  <h5> <a class="btn btn-primary" href="/add">Add New Product</a></h5>

                 <table class="table table-striped">
                   <thead>
                     <tr>
                       <th scope="col">NAME</th>
                       <th scope="col">PRICE</th>
                       <th scope="col">EDIT</th>
                       <th scope="col">DELETE</th>
                     </tr>
                   </thead>
                   <tbody>
                     @foreach($product as $myproduct)
                    <tr>

                      <td> name:{{$myproduct->name}}</td>
                      <td> price:{{$myproduct->price}}</td>
                      <td>
                      <a class="btn btn-primary" href="edit/{{$myproduct->id}}">EDIT</a>
                      </td>
                      <td>
                      <a class="btn btn-danger" href="add/{{$myproduct->id}}">Delete</a>
                      </td>
                      </tr>
                    </tr>

                  @endforeach
                  </tbody>
                </table>

                </div>
            </div>
        </div>
    </div>
</div>
</div>


@endsection
