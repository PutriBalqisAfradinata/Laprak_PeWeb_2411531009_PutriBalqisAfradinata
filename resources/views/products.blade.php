<!DOCTYPE html>
<html>
<head>
    <title>Data Produk</title>
</head>
<body>

<h1>Daftar Produk</h1>

<ul>
@foreach ($products as $product)
    <li>{{ $product->name }}</li>
@endforeach
</ul>

</body>
</html>