@extends('layouts.app')

@section('content')

<h1 class="text-center">Admin All Table Products</h1>
<br>


<div class="container">
    <div class="row">
        <div class="col-md-12" style="display:flex">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Img</th>
                        <th scope="col">Title</th>
                        <th scope="col">Price</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td><img src="/images/{{ $product->picture }}" height="50px" alt="..."></td>
                                <td>{{ $product->title }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->description }}</td>
                                <td><a href="{{ route('products.create')}}" class="btn-sm btn-primary">Create</a>
                                <a href="{{ route('products.show', $product->id)}}" class="btn-sm btn-info">View</a>
                                <a href="{{ route('products.edit', $product->id)}}" class="btn-sm btn-success">Edit</a></td>
                                <td>
                                    <form action="{{ route('admin.products.delete', $product->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
    </div>
</div>


@endsection