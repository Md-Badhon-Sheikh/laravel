@extends('master')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Categories & Products</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }
        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #3498db;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h2 style="text-align: center;">Admins with Categories & Products</h2>

    <table>
        <thead>
            <tr>
                <th>Admin</th>
                <th>Categories</th>
                <th>Products</th>
            </tr>
        </thead>
        <tbody>
            @foreach($admins as $admin)
                <tr>
                    <td>{{ $admin->name }}</td>
                    <td>
                        {{ optional($admin->categories)->pluck('name')->implode(', ') ?: 'No categories' }}
                    </td>
                    <td>
                        {{ optional($admin->products)->pluck('name')->implode(', ') ?: 'No products' }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>


@endsection