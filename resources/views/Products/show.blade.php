<!DOCTYPE html>
<html>

<head>
    <title>Product Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/show.css') }}">
</head>

<body>

    <div class="container">
        <h1 class="title">{{ $product->name }}</h1>

        <div class="product-box">
            <img class="product-img" src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}">

            <div class="product-info">
                <p class="desc">{{ $product->description }}</p>
                <p class="price">${{ $product->price }}</p>
                    <a href="{{ route('Product.index') }}" class="btn-back">Back to Products</a>
            </div>
        </div>
    </div>
</body>

</html>
