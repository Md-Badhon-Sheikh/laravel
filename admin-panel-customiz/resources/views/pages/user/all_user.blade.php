@extends('master')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple Layout</title>
  <style>
    /* General Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
    }

    /* Navbar Styles */
    nav {
      background-color: #333;
      color: #fff;
      padding: 10px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    nav a {
      color: #fff;
      text-decoration: none;
      margin-left: 15px;
    }

    nav a:hover {
      color: #f39c12;
    }

    .nav-links {
      display: flex;
    }

    /* Main Content Styles */
    main {
      padding: 20px;
      text-align: center;
    }

    main h1 {
      font-size: 2.5rem;
      color: #333;
      margin-bottom: 20px;
    }

    main p {
      font-size: 1.2rem;
      color: #666;
      margin-bottom: 10px;
    }

    /* Footer Styles */
    footer {
      background-color: #333;
      color: #fff;
      text-align: center;
      padding: 15px 20px;
      margin-top: 20px;
    }

    footer p {
      margin: 5px 0;
    }

    footer a {
      color: #f39c12;
      text-decoration: none;
    }

    footer a:hover {
      text-decoration: underline;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    table,
    th,
    td {
      border: 1px solid black;
    }

    th,
    td {
      padding: 8px;
      text-align: center;
    }

    th {
      background-color: #f2f2f2;
    }
    form{
      text-align: center;
    }
  </style>
</head>

<body>

  <!-- Navbar -->
  <nav>
    <div class="logo">
      <h2>MyWebsite</h2>
    </div>
    <div class="nav-links">
      <a href="#home">Home</a>
      <a href="#about">About</a>
      <a href="#services">Services</a>
      <a href="#contact">Contact</a>
    </div>
  </nav>

  <!-- Main Content -->

  <main>
    <h1>Welcome to My Website</h1>

    <table>
      <thead>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $d)
        <tr>
          <td>{{$d->name}}</td>
          <td>{{$d->email}}</td>
          <td>{{$d->contact}}</td>
          <td>{{$d->student}}</td>
       

        </tr>
        @endforeach
      </tbody>
    </table>


  </main>

  

</body>

</html>

@endsection
