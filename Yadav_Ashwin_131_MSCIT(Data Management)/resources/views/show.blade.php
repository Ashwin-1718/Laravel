<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Product</title>
</head>
<body>
    <h1>View Product</h1>
    <p>Product ID: {{ $product->product_id }}</p>
    <p>Product Name: {{ $product->product_name }}</p>
    <p>Quantity: {{ $product->product_quantity }}</p>
    <p>Sold: {{ $product->product_sold }}</p>
    <a href="{{ route('products.index') }}">Back to List</a>
</body>
</html>
