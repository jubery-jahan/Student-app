
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/')}}css/bootstrap.css">
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-primary shadow">
    <div class="container">
        <a href="" class="navbar-brand">Project Student App</a>
        <ul class="navbar-nav">
            <li><a href="{{route('home')}}" class="nav-link">Home</a> </li>
            <li><a href="{{route('about')}}" class="nav-link">About</a> </li>
            <li><a href="{{route('contact')}}" class="nav-link">Contact</a> </li>
            <li><a href="{{route('password-generator')}}" class="nav-link">Password Generator</a> </li>
            <li><a href="{{route('student-info')}}" class="nav-link">Student Info</a> </li>
            @if(isset(Auth::user()->id))
            <li><a href="{{route('add-product')}}" class="nav-link">Add Product</a> </li>
            <li><a href="{{route('manage-product')}}" class="nav-link">Manage Product</a> </li>
            <li><a href="" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();" class="nav-link">Logout</a> </li>
                <form action="{{route('logout')}}" method="post" id="logoutForm">
                    @csrf
                </form>
            @else
                <li><a href="{{route('login')}}" class="nav-link">Login</a> </li>
            @endif
        </ul>
    </div>
</nav>

@yield('body')

<script src="{{asset('/')}}js/bootstrap.bundle.js"></script>
</body>
</html>

