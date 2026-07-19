<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Product</title>
</head>
<body>
    <h1>Create Product</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label for="product_id">Product ID:</label>
        <input type="text" name="product_id" id="product_id" required><br><br>
        <label for="product_name">Product Name:</label>
        <input type="text" name="product_name" id="product_name" required><br><br>
        <label for="product_quantity">Quantity:</label>
        <input type="number" name="product_quantity" id="product_quantity" required><br><br>
        <label for="product_sold">Sold:</label>
        <input type="number" name="product_sold" id="product_sold" required><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
