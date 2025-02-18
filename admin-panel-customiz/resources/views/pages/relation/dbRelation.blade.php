@extends('master')
@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts by Country</title>
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

    <h2 style="text-align: center;">Posts by Country (Has Many Through)</h2>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employee as $user)
            <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->Name }}</td>
                        <td>{{ $user->Email }}</td>
                        <td>{{ $user->Phone }}</td>
                        <td>{{ $user->Salary}}</td>
                    </tr>
             
            @endforeach
        </tbody>
    </table>

</body>
</html>



@endsection