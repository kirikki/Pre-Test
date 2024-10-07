<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f4f4f4;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        h1 {
            text-align: center;
            font-size: 24px;
        }

        .action-btn {
            padding: 8px 12px;
            margin: 4px;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
        }

        .edit-btn {
            background-color: #4CAF50;
        }

        .delete-btn {
            background-color: #f44336;
        }

        .delete-btn:hover {
            background-color: #d32f2f;
        }

        .edit-btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Data Table</h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Umur</th>
                <th>Model</th>
                <th>Harga</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $d)
            <tr>
                <td>{{ $d->nama }}</td>
                <td>{{ $d->umur }}</td>
                <td>{{ $d->model }}</td>
                <td>{{ $d->harga }}</td>
                <td>
                    <a href="{{ route('edit', $d->id_user) }}" class="action-btn edit-btn">Edit</a>
                    <form action="{{ route('delete', $d->id_user) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="action-btn delete-btn">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
