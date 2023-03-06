<!DOCTYPE html>
<html lang="pt">
<head>
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
    <meta charset="UTF-8">
</head>

<body>

@include('header')

    @if(is_null($game))
        <title>ESTIGaming</title>
        <h2>Jogo não existe.</h2>
    @else

        <title>{{$game->name}}</title>
        <style>
            body, html{
                background-image: url({{$game->background}});
            }
        </style>

        <div class="columnGame">
            <iframe src={{$game->trailer}}></iframe>
            <div class="description">
                <h2 class="aditional_info">Acerca do Jogo</h2>
                <p>{{$game->description}}</p>
            </div>
        </div>
        <div class="columnGame">
            <div class="title_price_cart">
            <h2 class="title">
                {{$game->name}}
            </h2>
                @if($game->sale != null)
                    <h2 class="inLine price"><b>Preço:</b></h2>
                    <h2 class="inLine price">{{$game->price - ($game->price*($game->sale/100))}}€</h2>
                    <h2 class="inLine price sale_price aditional_info"> {{$game->price}}€</h2>
                    <h2 class="inLine price aditional_info"><b>({{$game->sale}}%)</b></h2><br><br>
                @else
                    <h2><b>Preço:</b> {{$game->price}}€</h2>
                @endif

            @if (Auth::user())
                    <form action="/game/{{$game->id}}/addToCart" method="POST">
                        <input type="hidden" id="user_id" name="user_id" value="{{Auth::user()->id}}">
                        <input type="hidden" id="game_id" name="game_id" value="{{$game->id}}">
                        <input type="hidden" id="game_key" name="game_key" value="{{ Str::random(6) . '-' . Str::random(6) . '-' . Str::random(6) }}">
                        <button class="cart_btn" type="submit"><i class="fa-solid fa-cart-shopping"> Adicionar ao carrinho</i></button>
                    </form>
            @else
                    <button disabled class="cart_btn"><i class="fa-solid fa-cart-shopping"> Adicionar ao carrinho</i></button>
                    <p><a class="game_account_txt" href="/login"><b><u>Inicia sessão</u></b></a> para adicionar o jogo ao carrinho.</p>
            @endif
            </div>
        </div>

        <div class="columnGame">
            <div class="title_price_cart">
                <h2 class="aditional_info">Informações adicionais:</h2>
                @switch($game->platform)
                    @case('Steam')
                        <p><b>Plataforma:</b> {{$game->platform}} <i class="fa-brands fa-steam"></i></p>
                        @break
                    @case('Playstation')
                        <p><b>Plataforma:</b> {{$game->platform}} <i class="fa-brands fa-playstation ps"></i></p>
                        @break
                    @case('Xbox')
                        <p><b>Plataforma:</b> {{$game->platform}} <i class="fa-brands fa-xbox xbox"></i></p>
                        @break
                    @default
                        <p><b>Plataforma:</b> {{$game->platform}} <i class="fa-solid fa-computer"></i></p>
                @endswitch
                    <p><b>Género:</b> {{$game->genre}}</p>
                    <p><b>Data de Lançamento:</b> {{$game->release_date}}</p>
                    <p><b>Desenvolvedora:</b> {{$game->developer}}</p>
                    <p><b>Rating:</b> {{$game->rating}}</p>
            </div>
        </div>

    @endif
</body>
</html>

