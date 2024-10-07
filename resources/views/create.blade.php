<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('store') }}" method="POST">
        @csrf
        <label for="">nama</label>
        <input type="text" name="nama">
        <label for="">umur</label>
        <input type="number" name="umur">
        <label for="">model</label>
        <input type="text" name="model">
        <label for="">harga</label>
        <input type="text" name="harga">
        <button type="submit">Submit</button>
    </form>
</body>
</html>