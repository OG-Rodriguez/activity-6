<!DOCTYPE html>
<html>
<head>
    <title>Product View</title>
    <!-- Include Bootstrap or any CSS framework here for styling -->
</head>
<body>
    <h1>Product List</h1>
    
    <a href="{{ route('products.create') }}" class="btn btn-primary">Add Product</a>

    <!-- Optional: Include a section to display the list of products here -->
    <div>
        <ul>
            <!-- Example: Loop through products and display them -->
            <!-- @foreach ($products as $product) -->
            <!-- <li>{{ $product->name }}</li> -->
            <!-- @endforeach -->
        </ul>
    </div>
</body>
</html>
