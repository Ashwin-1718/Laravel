<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Product</title>
</head>
<body>
    <h1>Edit Product</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="product_id">Product ID:</label>
        <input type="text" name="product_id" id="product_id" value="{{ $product->product_id }}" required><br><br>
        <label for="product_name">Product Name:</label>
        <input type="text" name="product_name" id="product_name" value="{{ $product->product_name }}" required><br><br>
        <label for="product_quantity">Quantity:</label>
        <input type="number" name="product_quantity" id="product_quantity" value="{{ $product->product_quantity }}" required><br><br>
        <label for="product_sold">Sold:</label>
        <input type="number" name="product_sold" id="product_sold" value="{{ $product->product_sold }}" required><br><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>
