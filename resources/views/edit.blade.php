<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('update') }}" method="POST">
        @csrf
        @method('PUT')
        @foreach ($data as $d)
            <input type="hidden" name="id" value="{{ $d->id_user }}">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" value="{{ $d->nama }}">
            <label for="umur">Umur</label>
            <input type="number" name="umur" id="umur" value="{{ $d->umur }}">
            <label for="model">Model</label>
            <input type="text" name="model" id="model" value="{{ $d->model }}">
            <label for="harga">Harga</label>
            <input type="text" name="harga" id="harga" value="{{ $d->harga }}">
        @endforeach
        <button type="submit">Submit</button>
    </form>
    

</body>

</html>
