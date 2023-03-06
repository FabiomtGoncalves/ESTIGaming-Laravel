<!DOCTYPE html>
<html lang="pt">
<head>
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>

@include('header')

    <div class="column">
        <div class="cart_game_grid">
            <h2>Iniciar Sessão</h2>
            <form action="/login" method="POST">
                <input type="text" id="email" name="email" placeholder="&#xf0e0  Email" class="lr_input font_awesome" required/><br>
                <input type="password" id="password" name="password" placeholder="&#xf084  Palavra-Passe" class="lr_input font_awesome" required/><br>
                <button type="submit" class="lr_btn">Entrar</button>
            </form>
            @isset($erroLogin)
                <p class="error"><i class="fa-solid fa-circle-exclamation"></i> {{$erroLogin}}</p>
            @endisset
        </div>
    </div>
    <div class="column">
        <div class="cart_game_grid">
            <h2>Registo</h2>
            <form action="/register" method="POST">
                <input type="text" id="name" name="name" placeholder="&#xf2bd  Nome" class="lr_input font_awesome" required/><br>
                <input type="text" id="email" name="email" placeholder="&#xf0e0  Email" class="lr_input font_awesome" required/><br>
                <input type="password" id="password" name="password" placeholder="&#xf084  Palavra-Passe" class="lr_input font_awesome" required/><br>
                <input type="password" id="confirm_password" name="confirm_password" placeholder="&#xf084  Repetir Palavra-Passe" class="lr_input font_awesome" required/><br>
                <button type="submit" class="lr_btn">Registar</button>
            </form>

        @isset($registoSuccess)
                <p class="success"><i class="fa-sharp fa-solid fa-circle-check"></i> {{$registoSuccess}}</p>
        @endisset

        @isset($errors)
            @foreach ($errors->all() as $error)
                <p class="error"><i class="fa-solid fa-circle-exclamation"></i> {{$error}}</p>
            @endforeach
        @endisset
        </div>
    </div>

</body>
</html>
