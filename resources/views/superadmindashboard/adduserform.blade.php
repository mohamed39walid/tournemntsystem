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
    <title>Add New User</title>
</head>

<body class="bg-dark text-white">
    <div class="container">
        @include('layouts.navigation')
        <h1 class="text-center m-4" style="font-size: 50px">Add User</h1>
        <form class="bg-dark text-white w-50 m-auto" action="/adduser" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label">User Name</label>
                <input type="text" class="form-control rounded" name="name">
            </div>
            @error('name')
            <span class="text-danger">{{ $message }}</span><br><br>
            @enderror
            <div class="mb-3">
                <label class="form-label">User Email</label>
                <input type="text" class="form-control rounded" name="email">
            </div>
            @error('email')
            <span class="text-danger ">{{ $message }}</span><br><br>
            @enderror
            <div class="mb-3">
                <label class="form-label">User Password</label>
                <input type="password" class="form-control rounded" name="password">
            </div>
            @error('password')
            <span class="text-danger ">{{ $message }}</span><br><br>
            @enderror
            <div class="mb-3">
                <label class="form-label">User Role</label>
                <select class="form-select rounded" id="role" name="role">
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
            <input class="btn btn-primary" value="Add User" type="submit">
            <a class="btn btn-success" href="/userdashboard">Back</a>
        </form>
    </div>
</body>
</html>
