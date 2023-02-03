@extends('layouts.app')

@section('content')

<h1 class="text-center mt-2">All Products</h1>
<hr>
<br>


<div class="container">
  <div class="row">
@foreach ($products as $product)
        <div class="col-md-3" style="display:flex">
            
            <div class="card text-center  m-2 p-2" style="width: 15rem;">
                <img src="/images/{{ $product->picture }}" class="card-img-top justify-content-center" style="height: 10rem;width: 10rem;" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $product->title }}</h5>
                  <h5 class="card-title">Price: ${{ $product->price }}</h5>
                  <hr>
                  <p class="card-text">{{ $product->description}} </p>
                  <a href="{{route('products.show',$product->id)}}" class="btn btn-primary">View Detail</a>
                </div>
              </div>
            
        </div>
        @endforeach
    </div>
  </div>


@endsection