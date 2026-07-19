<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Products List</title>
    <style>
          th,td,tr{
            border: 1px solid blue;
        }
    </style>
</head>
<body>
    <h1>Products List</h1>
    <a href="{{ route('products.create') }}">Create New Product</a>
    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <table cellspacing="10px" cellpadding="10px">
        <tr>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Product Quantity</th>
            <th>Product Sold</th>
            <th>Actions</th>
        </tr>
        @foreach($products as $product)
        <tr>
            <td>{{ $product->product_id }}</td>
            <td>{{ $product->product_name }}</td>
            <td>{{ $product->product_quantity }}</td>
            <td>{{ $product->product_sold }}</td>
            <td>
                <a href="{{ route('products.edit', $product->id) }}">Edit</a>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
