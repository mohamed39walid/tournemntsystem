<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Home</title>
</head>
<body class="text-white bg-dark">
    @include('layouts.navigation')
    <div class="container d-flex justify-content-center align-items-center" style="height: 80vh">
        <div class="m-auto text-center">
            <h1 style="font-size: 60px">Welcome to the tournment system</h1><br>
            <a href="/login" class="btn btn-success m-auto text-center m-3 items-center">Get Started</a>
        </div>
    </div>
</body>
</html>
