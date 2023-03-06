<!DOCTYPE html>
<html lang="pt">
<head>
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
    <meta charset="UTF-8">
    <title>Conta</title>
</head>
<body>

@include('header')

<br>
<div class="grid-container">
    <div class="grid-item grid-title"><b>Jogo</b></div>
    <div class="grid-item grid-title"><b>Código de Ativação</b></div>
    <div class="grid-item grid-title"><b>Preço</b></div>
    <!--<div class="grid-item"><b>Status</b></div>-->
    <div class="grid-item grid-title"><b>Método de Pagamento</b></div>
    <div class="grid-item grid-title"><b>Data da Compra</b></div>

@unless(count($games) == 0)
        @foreach($games as $game)
            <a href="/game/{{$game->id}}">
                <div class="grid-item game_account_txt"><u>{{$game->name}}</u></div>
            </a>
            <div class="grid-item">{{$game->key_code}}</div>
            <div class="grid-item">{{$game->price}}€</div>
            <!--<div class="grid-item">{$game->status}</div>-->
            <div class="grid-item">{{$game->payment}}</div>
            <div class="grid-item">{{$game->order_date}}</b></div>
        @endforeach
</div>
@else
    <h2>Nenhum jogo comprado.</h2>
@endunless


</body>
</html>
