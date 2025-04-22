<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>layout</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success p-3">
            <a class="navbar-brand h3" href="#">Play Money</a>
            <div class="lead">
                <a class="navbar-brand" href="{{url('/dashboard')}}">Dashboard</a>
                <a class="navbar-brand" href="{{url('/add expense')}}">add expense</a>
                <a class="navbar-brand" href="{{url('/expense list')}}">expense list</a>
            </div>
    </nav>
    @yield('content')

</body>
</html>
