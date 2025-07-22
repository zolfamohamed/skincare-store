<!DOCTYPE html>
<html>

<head>
    <title>Create Product</title>
    <link rel="stylesheet" href="{{ asset('assets/create.css') }}">
</head>

<body>
    <div class="contain">
        <h2 class="heading">Add New Product</h2>


        @if (session('success'))
            <div style="color: green;" class="messege">
                {{ session('success') }}
            </div>
        @endif


        @if ($errors->any())
            <div style="color: red;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="form">
            <form action="{{ route('Product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <label class='label'>Product Name:</label><br>
                <input class='input' type="text" name="name" value="{{ old('name') }}"><br><br>

                <label class='label'>Description:</label><br>
                <textarea class='input'name="description">{{ old('description') }}</textarea><br><br>

                <label class='label'>Price:</label><br>
                <input class='input'type="number" step="0.01" name="price" value="{{ old('price') }}"><br><br>

                <label class='label'>Image:</label><br>
                <input class='input' type="file" name="image"><br><br>

                <button class="bc" type="submit">Add Product</button>
            </form>

        </div>

    </div>


</body>

</html>
