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
                @if (session())
                <li class="listt"><a href="{{route('login')}}">{{'$username'}}</a></li>
                @endif
                <li class="listt"><a href="{{route('login')}}">Login</a></li>
            </ul>
        </nav>
    </div>
    <div class="reveal active" style="background-color: rgba(0, 0, 0, 0.5);color: #fff; height:89vh; ">
        <div style="justify-items:center; padding-top: 40px;">
            <h1 style="text-align:left;">A Trusted</h1>
            <img src="{{url('img/yamaha.png ')}}" alt="">
            <h2 style="text-align:right;">distributor.</h2>
        </div>
        <div style="text-align: left; margin-top: 200px; padding-left: 200px;">
            <h1>GENUINE PARTS</h1>
            <p style="font-size:20px;">Only the best quality and all original components for your motorcycle. <br>We take pride in providing only trusted materials to give you the confidence <br>in having the best ride possible.</p>
            <a href="#1"><button class="explore" >Explore</button></a>
        </div>
    </div>
    <section class="reveal" id="1" style="height:100vh; background-color:#1E252B; text-align:left;">
        <h1 style="margin-left:200px; padding-top:70px;">MAINTENANCE PARTS</h1>
        <div style="text-align:center; margin-left:200px; ">
            <div class="product_container">
                <div class="product">
                    <img src="" alt="">
                    <div class="desc">
                        <h5>{$product_name}</h5>
                        <h4>&#x20B1; {$product_price}</h4>
                    </div>
                </div>
            </div>
        </div>

</body>

</html>

<style>
    body {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        background-color: #1E252B;
        color: #fff;
        background-image: url('img/bg.png');
        background-repeat: no-repeat;
        background-size: contain;
        background-position-y: 10%;
        right: 0;
        transition: all 1s ease;
    }

    .header {
        position: relative;
        display: flex;
        background-color: #333A73;
        padding: 20px;
        width: 99.2vw;
        justify-content: center;
        justify-items: center;
        border: 0;
        margin: 0;
    }

    .listt {
        width: auto;
        text-align: center;
        list-style-type: none;
        margin-left: 25px;
        padding: 7px;
        position: relative;
    }

    .listt::before {
        content: '';
        position: absolute;
        transform: translate(-50%, -50%);
        left: 50%;
        top: 100%;
        width: 0;
        height: 2px;
        background: #fff;
        transition-duration: .5s;
    }

    .listt:hover::before {
        width: 70px;
    }

    a {
        color: #fff;
        text-decoration: none;
        font-size: 20px;
        font-weight: 600;
        position: relative;
        padding: 0 20px;
    }

    h2 {
        font-size: 36px;
        font-weight: 500;
    }

    h1 {
        font-weight: bold;
        font-size: 42px;
    }

    .gen {
        justify-items: start;
        text-align: start;
        align-content: start;
    }

    .explore {
        margin-top: 20px;
        width: 130px;
        height: 50px;
        background: transparent;
        border: 2px solid #fff;
        outline: none;
        border-radius: 6px;
        cursor: pointer;
        font-size: 1.1em;
        color: #fff;
        font-weight: 500;
        transition: .5s;
    }

    .explore:hover {
        background: #3E4AA8;
        border: 0;
        color: #fff;
    }

    .product_container {
        color: #fff;
        display: flex;
        justify-content: space-between;
        padding-top: 20px;
        flex-wrap: wrap;
    }

    .product {
        width: 23%;
        min-width: 50px;
        padding: 10px 12px;
        border: 1px solid #1F2125;
        border-radius: 25px;
        box-shadow: 20px 20px 30px rgba(255, 255, 255, 0.1);
        margin: 15px 0;
        transition: .2s ease;
        position: relative;
        background-color: #1F2125;
    }

    .product img {
        background-color: #262D34;
        width: 100%;
        border-radius: 20px;
    }

    .product .desc {
        text-align: start;
        padding: 10px 10px;
    }

    .product:hover {
        box-shadow: 20px 20px 30px rgba(255, 255, 255, 0.3);
    }
</style>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">

<script>
     window.addEventListener('scroll', reveal);

function reveal() {
    var reveals = document.querySelectorAll('.reveal');

    for (var i = 0; i < reveals.length; i++) {
        var windowheight = window.innerHeight;
        var revealtop = reveals[i].getBoundingClientRect().top;
        var revealpoint = 150;

        if (revealtop < windowheight - revealpoint) {
            reveals[i].classList.add('active');
        } else {
            reveals[i].classList.remove('active');
        }
    }
}
</script>