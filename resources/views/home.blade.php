@extends('layouts.app')

@section('content')

<div class="reveal active" style="background-color: rgba(0, 0, 0, 0.7);color: #fff; height:89vh; ">
    <div style="justify-items:center; padding-top: 40px;">
        <h1 style="text-align:left;">A Trusted</h1>
        <img src="{{url('img/yamaha.png ')}}" alt="">
        <h2 style="text-align:right;">distributor.</h2>
    </div>
    <div style="text-align: left; margin-top: 200px; padding-left: 200px;">
        <h1>GENUINE PARTS</h1>
        <p style="font-size:20px;">Only the best quality and all original components for your motorcycle. <br>We take pride in providing only trusted materials to give you the confidence <br>in having the best ride possible.</p>
        <a href="#1"><button class="explore">Explore</button></a>
    </div>
</div>
<section id="1" style="height:100%; background-color:#1E252B; text-align:left; padding-bottom:50px;">
    <div class="reveal">
        <h1 style="margin-left:200px; padding-top:70px;">MAINTENANCE PARTS</h1>

        @php
        $paths = ['ac.webp', 'ao.webp', 'aac.webp', 'bp.webp', 'bs.webp', 'vb.webp', 'oily.webp', 'oilb.webp'];
        @endphp

        <div style="margin-left:200px; margin-right:200px;display:flex;flex-wrap: wrap;">
            <div class="product_container">
                @for ($x = 0; $x < count($paths); $x++)
                    @php
                    $url='img/' . $paths[$x]
                    @endphp
                    <div class="product">
                    <img src="{{url($url)}}" alt="">
                    <div class="desc">
                        <h5>{$product_name}</h5>
                        <h4>&#x20B1; {$product_price}</h4>
                    </div>
            </div>
            @endfor
        </div>
    </div>
    </div>
</section>

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
        background-position-y: 7%;
        right: 0;
        transition: all 1s ease;
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
        width: 20%;
        min-width: 100px;
        padding: 10px 12px;
        border: 1px solid #1F2125;
        border-radius: 25px;
        box-shadow: 20px 20px 30px rgba(0, 100, 255, 0.1);
        margin: 25px 10px;
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
        background-color: #333A73;
        box-shadow: 20px 20px 30px rgba(255, 255, 255, 0.3);
    }
</style>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">



@endsection