@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Products</h1>
    <a href="{{ route('producten.create') }}" class="btn btn-primary">Add Product</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>€{{ $product->price }}</td>
                <td>{{ $product->quantity }}</td>
                <td>
                    <a href="{{ route('producten.edit', $product->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('producten.destroy', $product->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
