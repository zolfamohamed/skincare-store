<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lumera Skincare</title>
    <link rel="stylesheet" href="{{ asset('assets/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/main.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet">

</head>

<body>
    <div class="cont">
        <nav class="navbar">
            <div class="navbar-container">
                <h3 class="logo">Luméra</h3>
                <div class="nav-links">
                    <a href=""><i class="fa-solid fa-basket-shopping "
                            style="color: #ef6a97; font-size: 24px;"></i></a>
                    @auth

                        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit" style="background: none; border: none; cursor: pointer;">
                                <i class="fa-solid fa-right-from-bracket"style="color: #ef6a97; font-size: 24px;"
                                    title="Logout"></i>
                            </button>
                        </form>
                    @else
                        <a href="{{ route('login.form') }}">Login</a>
                        <a href="{{ route('register.form') }}">Sign up</a>
                    @endauth
                </div>
            </div>
        </nav>
        <section class="hero-banner">
            <div class="hero-content">
                <h1>Welcome to Luméra Skincare</h1>
                <p class="para">Natural beauty starts here </p>
                <a href="#product" class="hero-btn">Shop Now</a>
            </div>
        </section>



        @auth
            @if (auth()->user()->is_admin)
                @if (session('success'))
                    <div style="color: green;"class="messege" id="success-message">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="btncreate-wrapper">
                    <a class='btncreate' href="{{ route('Product.create') }}">Create Product</a>
                </div>
            @endif
        @endauth
        {{-- <div class="product-grid" id="products">
            @foreach ($products as $product)
                <div class="product-card card">
                    <img class="product-img card-img-top" src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}">
                    <div class="product-info card-body">
                        <h3  class="card-title">{{ $product->name }}</h3>
                        <p class="card-text">{{ $product->description }}</p>
                        <p class="card-text">${{ $product->price }}</p>
                        <div class="buttons card-footer">
                            <a href="{{ route('Product.show', ['productId' => $product->id]) }}" class="btn-primary">
                                View Details
                            </a>
                            <a href="{{ route('Product.edit', ['productId' => $product->id]) }}" class="btn-primary">
                                Update
                            </a>
                            <form action="{{ route('Product.destroy', ['product' => $product->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button id="delete" class="mt-2" type="submit" onclick="return confirm('Sure?')">
                                    Delete
                                </button>
                            </form>

                        </div>
                    </div>
                </div>
            @endforeach
        </div> --}}
        {{-- <div class="product-grid container py-5" id="products">
            <div class="row justify-content-center">
                @foreach ($products as $product)
                    <div class="col-md-4 mb-4 d-flex align-items-stretch">
                        <div class="product-card card shadow-sm">
                            <img class="product-img card-img-top" src="{{ asset('images/' . $product->image) }}"
                                alt="{{ $product->name }}">
                            <div class="product-info card-body d-flex flex-column">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text flex-grow-1">{{ $product->description }}</p>
                                <p class="card-text font-weight-bold">${{ $product->price }}</p>
                                <div class="buttons mt-auto">
                                    <a href="{{ route('Product.show', ['productId' => $product->id]) }}"
                                        class="btn btn-dark btn-sm mb-1">
                                        View Details
                                    </a>
                                    <a href="{{ route('Product.edit', ['productId' => $product->id]) }}"
                                        class="btn btn-dark btn-sm mb-1">
                                        Update
                                    </a>
                                    <form action="{{ route('Product.destroy', ['product' => $product->id]) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-danger delete"
                                            onclick="return confirm('Sure?')">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach --}}


        <div id="product">
            <div class="head-product">
                <h2>Our Products</h2>
            </div>
            @guest
                <div class="needtolog">
                    <p>You need to log in to make a purchase</p>
                </div>
            @endguest


            <div class="product-grid" id="products">
                @foreach ($products as $product)
                    <div class="product-col">
                        <div class="product-card">
                            <img class="product-img" src="{{ asset('images/' . $product->image) }}"
                                alt="{{ $product->name }}">
                            <div class="product-info">
                                <h5 class="product-title">{{ $product->name }}</h5>
                                <p class="product-desc">{{ $product->description }}</p>
                                <p class="product-price">${{ $product->price }}</p>
                                @auth
                                    @if (auth()->user()->is_admin)
                                        <div class="product-buttons">
                                            <a href="{{ route('Product.show', ['productId' => $product->id]) }}"
                                                class="btn-primary-sm mr-2">
                                                View Details
                                            </a>
                                            <a href="{{ route('Product.edit', ['productId' => $product->id]) }}"
                                                class="btn-primary-sm">
                                                Update
                                            </a>

                                            <form class="delete-form"
                                                action="{{ route('Product.destroy', ['product' => $product->id]) }}"
                                                method="POST" onsubmit="return confirm('Sure?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn-product">
                                                    Delete
                                                </button>
                                            </form>
                                        </div>
                                    @else
                                        <a href="{{ route('Product.show', ['productId' => $product->id]) }}"
                                            class="btn-primary-sm">
                                            View Details
                                        </a>
                                        <form action="" method="">
                                            @csrf
                                            <button type="submit" class="btn-product mt-3">Add to Cart</button>
                                        </form>
                                    @endif
                                @endauth
                                @guest
                                    <a href="{{ route('Product.show', ['productId' => $product->id]) }}"
                                            class="btn-primary-sm">
                                            View Details
                                        </a>
                                @endguest
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    </div>

    <footer class="text-center p-2" style="background-color: #fbd4e1"> Designed by Zolfa</footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    setTimeout(function() {
        var message = document.getElementById('success-message');
        if (message) {
            message.style.display = 'none';
        }
    }, 3000);
</script>
</body>

</html>
