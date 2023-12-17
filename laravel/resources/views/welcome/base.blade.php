<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    {{-- <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
    
    </style>
<body>
<nav class="navbar navbar-light p-3" style="background-color: rgba(108, 117, 125, 0.7); color: #5a5a5b;">
    <h1 style="font-weight: 400; font-family:'Courier New', Courier, monospace">LARAVEL</h1>
    <ul class="nav justify-content-end float-right nav-pills">
    <li class="nav-item">
        <a class="nav-link {{Route::is('home') ? 'active' : ''}}" style="color: #5a5a5b;" href="{{ url('/') }}">HOME</a>
    </li> 
    <li class="nav-item">
        <a class="nav-link {{Route::is('users') ? 'active' : ''}}" style="color: #5a5a5b;" href="{{ url('/users')}}">USERS</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{Route::is('merchandises') ? 'active' : ''}}" style="color: #5a5a5b;" href="{{ url('/merchandises') }}">MERCHANDISES</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{Route::is('suppliers') ? 'active' : ''}}" style="color: #5a5a5b;" href="{{ url('/suppliers') }}">SUPPLIERS</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{Route::is('customers') ? 'active' : ''}}" style="color: #5a5a5b;" href="{{ url('/customers') }}">CUSTOMERS</a>
    </li>
    </li>
    <li class="nav-item">
        <a class="nav-link {{Route::is('purchases') ? 'active' : ''}}" style="color: #5a5a5b;" href="{{ url('/purchases') }}">PURCHASES</a>
    </li>
    </li>
    <li class="nav-item">
        <a class="nav-link {{Route::is('sales') ? 'active' : ''}}" style="color: #5a5a5b;" href="{{ url('/sales') }}">SALES</a>
    </li>
    </li>
    <li class="nav-item">
        <a class="nav-link {{Route::is('purchased_items') ? 'active' : ''}}" style="color: #5a5a5b;" href="{{ url('/purchased_items') }}">PURCHASED ITEMS</a>
    </li>
    </li>
    <li class="nav-item">
        <a class="nav-link {{Route::is('sold_items') ? 'active' : ''}}" style="color: #5a5a5b;" href="{{ url('/sold_items') }}">SOLD ITEMS</a>
    </li>
    </ul>
</nav>

<div class="main-container bg-secondary-subtle">
    <div class="container pt-5" style="height: 86.5vh">
    @yield('content')
    </div>
</div>
</body>
</html>