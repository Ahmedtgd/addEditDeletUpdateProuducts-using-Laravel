@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Welcome To our web site</h1> </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                     <a class="btn btn-primary" href="/product"><h3> Veiw Our Product</h3> </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
