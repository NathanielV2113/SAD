<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mctrish Custom</title>
</head>
<body>
    <div style=" display:flex;background-color: #333A73; padding: 20px ; width:100vw; justify-content:center; justify-items:center;border:0;">
        <div><img src="{{url('img/logo.png')}}" alt="" style="margin-right: 100px; height:80px;"></div>
        <input type="text" style="background-color: #fff; border-radius: 20px; padding: 5px 300px;">
        <nav style="display: flex;align-items: center;justify-content: center;transition: 1s ease;">
            <ul style="text-align: center;display: flex;flex-direction: row;">
                <li class="listt"><a href="">My Cart</a></li>
                <li class="listt"><a href="">Order Status</a></li>
                <li class="listt"><a href="{{route('login')}}">Login</a></li>
            </ul>
        </nav>
    </div>
    <div style="background-color: rgba(0, 0, 0, 0.5); width:100vw; color: #fff; height:80vh; ">
        <div style="justify-items:center;">
            <h1 style="text-align:left;">A Trusted</h1>
            <img src="{{url('img/yamaha.png ')}}" alt="">
            <h2 style="text-align:right;">distributor.</h2>
        </div>
        <div style="text-align: left; margin-top: 100px; padding-left: 200px;">
            <h1>GENUINE PARTS</h1>
            <p>Only the best quality and all original components for your motorcycle. <br>We take pride in providing only trusted materials to give you the confidence <br>in having the best ride possible.</p>
            <button class="explore">Explore</button>
        </div>
    </div>
    <div style="height:100vh; width:100vw; background-color:#1E252B; text-align:left;">
        <h1 style="margin-left:200px">MAINTENANCE PARTS</h1>
        <div style="text-align:center; margin-left:200px; ">
            <div class="product_container">
                <div class="product">
                    <img src="" alt="">
                    <div class="desc">
                        <h5>{$product_name}</h5>
                        <h4>&#x20B1; {$product_price}</h4>
                    </div>
                    <a href="#" onclick="added()"><i class="cart fas fa-shopping-cart"></i></a>
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
        justify-items: center;
        background-color: #1E252B;
        color: #fff;
        background-image: url('img/bg.png');
        background-repeat: no-repeat;
        background-size: 1920px;
        background-position: top;
        right: 0;
    }

    .listt {
        width: auto;
        text-align: center;
        list-style-type: none;
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
        background: var(--cream);
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
        text-align: right;
    }

    .gen {
        justify-items: start;
        text-align: start;
        align-content: start;
    }

    .explore {
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
        border: 1px solid ;
        border-radius: 25px;
        box-shadow: 20px 20px 30px rgba(255, 255, 255, 0.1);
        margin: 15px 0;
        transition: .2s ease;
        position: relative;
        background-color:#262D34;
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