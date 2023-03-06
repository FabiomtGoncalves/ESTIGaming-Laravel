<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
    <meta charset="UTF-8">
    <title>Carrinho de Compras</title>
</head>
<body>

@include('header')

@php
    $sumPrice = 0
@endphp

@unless(count($cartGames) == 0)
    <div class="columnGame">
        <div class="cart_container">

    @foreach($cartGames as $game)

            <div class="cart_game_grid">
                <a href="/game/{{$game->game_id}}">
                    <img class="cart_game_img" src="{{$game->image}}" alt="Game_image"/>
                </a>
                <div class="cart_img_text_align">
                    <h2>
                        <a href="/game/{{$game->game_id}}"> {{$game->name}}</a>
                    </h2>
                    @if($game->sale != null)
                        <h2 class="inLine price"><b>Preço:</b></h2>
                        <h2 class="inLine price">{{$game->price - ($game->price*($game->sale/100))}}€</h2>
                        <h2 class="inLine price sale_price aditional_info"> {{$game->price}}€</h2>
                    @else
                        <h2><b>Preço: </b>{{$game->price}}€</h2>
                    @endif
                    <form action="/cart/deleteFromCart/{{$game->cart_id}}" method="POST">
                        <button class="delete_btn"><i class="fa-solid fa-trash"></i></button>
                    </form>
                    <br>
                    <br>
                    <br>
                </div>

            </div>
                @if($game->sale != null)
                    @php
                        $sumPrice += $game->price - ($game->price*($game->sale/100))
                    @endphp
                @else
                    @php
                        $sumPrice += $game->price
                    @endphp
                @endif
    @endforeach
        </div>
    </div>
    <div class="columnGame">
        <div class="title_price_cart">
            <h2 class="title">
                <b>Preço total:</b> {{$sumPrice}}€
            </h2>
            <form action="/cart/buy" method="POST">
                <label class="font_awesome"><b>&#xf53a Método de Pagamento:</b></label>
                <select class="filter font_awesome" name="payment" id="payment">
                    <option value="Paypal">&#xf1ed PayPal</option>
                    <option value="Cartão de Crédito">&#xf09d Cartão de Crédito</option>
                    <option value="MB WAY">&#xf3cd MB WAY</option>
                    <option value="Google Pay">&#xf1a0 Google Pay</option>
                    <option value="Apple Pay">&#xf179 Apple Pay</option>
                </select>
                <button class="cart_btn" type="submit"><i class="fa-solid fa-cart-shopping"> Finalizar Compra</i></button>
            </form>
        </div>
    </div>

@else
    <h2>Nenhum jogo no carrinho de compras.</h2>
@endunless

</body>
</html>
