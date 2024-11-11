<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Mctrish Custom</title>
</head>
<body>
<div class="header">
        <img src="{{url('img/logo.png')}}" alt="" style="margin-right: 80px; height:80px;">
        <div style="width: 650px;"></div>
        <nav style="display: flex;align-items: center;transition: 1s ease;">
            <ul style="text-align: center;display: flex; flex-direction: row;">
                <li class="listt"><a href="{{route('cart')}}"><span style="font-size: 30px; cursor:pointer" class="material-symbols-outlined">
                        shopping_bag
                    </span></li></a>
                <li class="listt"><a href="{{route('orders')}}"><span style="font-size: 30px; cursor:pointer" class="material-symbols-outlined">
                        notifications
                    </span></li></a>
                <li class="listt"><a href="{{route('login')}}">Login</a></li>
            </ul>
        </nav>
    </div>
</body>
</html>