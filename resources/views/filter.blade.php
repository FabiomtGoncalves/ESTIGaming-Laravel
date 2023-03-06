<!DOCTYPE html>
<html lang="pt">
<head>
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
    <meta charset="UTF-8">
    <title>{{count($games)}} Resultados</title>
</head>

<body>

@include('header')

<div class="parent">
    <div class="child">
    @if(request()->platform != "")

            <h2><i class="fa-solid fa-desktop"></i> {{request()->platform}}</h2>
    @else
            <h2><i class="fa-solid fa-desktop"></i> Todas as Plataformas</h2>
    @endif
    </div>
    <div class="child">
    @if(request()->genre != "")
            <h2><i class="fa-solid fa-trophy"></i> {{request()->genre}}</h2>
    @else
            <h2><i class="fa-solid fa-trophy"></i> Todos os Géneros</h2>
    @endif
    </div>
    <div class="child">
    @if(request()->orderby != "")
            @if(request()->orderby == "ASC")
                <h2><i class="fa-solid fa-arrow-down-short-wide"></i>Ordem de Preço: Baixo - Alto</h2>
            @else
                <h2><i class="fa-solid fa-arrow-down-wide-short"></i>Ordem de Preço: Alto - Baixo</h2>
    </div>
        @endif
    @endif
</div>
    @unless(count($games) == 0)
        <h2><b>{{count($games)}}</b> resultado(s)</h2>
        <br>
        <div class="align">
            @foreach($games as $game)
                @if($game->sale != null)
                    <div class="card columnAlign">
                        <div class="imagewrap">
                            <a href="/game/{{$game->id}}">
                                <img src="{{$game->image}}" alt="Game_Image">
                            </a>
                            <button class="sale_img"><b>{{$game->sale}}%</b></button>
                        </div>
                        <div class="container">
                            <a href="/game/{{$game->id}}">
                                <h4 class="inLine"><b>{{$game->name}}</b></h4>
                            </a><br>
                            <p class="inLine price sale_price aditional_info">{{$game->price}}€</p>
                            <p class="inLine price">{{$game->price - ($game->price*($game->sale/100))}}€</p>
                        </div>
                    </div>
                @else
                    <div class="card columnAlign">
                        <a href="/game/{{$game->id}}">
                            <img src="{{$game->image}}" alt="Avatar">
                        </a>
                        <div class="container">
                            <a href="/game/{{$game->id}}">
                                <h4 class="inLine"><b>{{$game->name}}</b></h4>
                            </a><br>
                            <p class="inLine price">{{$game->price}}€</p>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
@else
        <h2>Nenhum jogo encontrado.</h2>
@endunless
</body>

</html>



