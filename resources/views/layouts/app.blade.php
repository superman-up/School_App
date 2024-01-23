<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student List</title>
    <link rel="stylesheet" href="/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/bootstrap/style.css">

    <style>
       
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
            <a class="navbar-brand h1 m-2" href="/">Enrollment App</a>
            <div class="text-white">
                <span class="">Admin Login <img class="rounded-circle p-1 " src="{{URL::asset('images/avatar.jpg')}}" width="40px" height="40px" alt="" id="avatar" ></span>
            </div>
            </div>
        </nav>
    </header>
@yield('main')

<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>

</body>
</html>
