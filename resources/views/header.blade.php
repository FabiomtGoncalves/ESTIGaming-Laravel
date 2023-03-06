<a href="/">
    <img class="logo" src="/img/logo.png" alt="logo-image">
</a>

<br>

<div class="parent">
    <div class="child">
        <a href="/">
            <button class="btn"><i class="fa-solid fa-house"></i></button>
        </a>
    </div>
    <div class="child">
        <form action="/search">
            <div class="searchBox">
                <input class="searchInput" type="text" id="game" name="game" placeholder="Nome do Jogo" />
                <button class="searchButton" type="submit"><i class="fa fa-search"></i></button>
            </div>
        </form>
    </div>
    <div class="child">
    </div>
    <div class="child">
        <form action="/cart" method="GET">
            <button class="btn" type="submit"><i class="fa-solid fa-cart-shopping"></i></button>
        </form>
    </div>
    <div class="child">
        <form action="/account" method="GET">
            <button class="btn" type="submit"><i class="fa-solid fa-user"></i></button>
        </form>
    </div>
    @if (Auth::check())
        <div class="child">
            <p class="username">Olá, <b>{{Auth::user()->name}}</b> !</p>
        </div>
        <div class="child">
            <form action="/logout" method="POST">
                <button class="btn_logout" type="submit"><i class="fa-solid fa-right-from-bracket"></i> <b>Sair</b></button>
            </form>
        </div>
    @endif
</div>

<div class="parent">
    <form action="/filter" method="GET">
        <div class="child">
            <select class="filter font_awesome" name="platform" id="platform">
                <option value="">&#xf390 Plataforma</option>
                <option value="Steam">&#xf1b6 Steam</option>
                <option class="ps" value="Playstation">&#xf3df Playstation</option>
                <option class="xbox" value="Xbox">&#xf412 Xbox</option>
            </select>
        </div>
        <div class="child">
            <select class="filter font_awesome" name="genre" id="genre">
                <option value="">&#xf091 Género</option>
                <option value="Single-Player">&#xf11b Single-Player</option>
                <option value="Ação">&#xe19b Ação</option>
                <option value="Aventura">&#xf6e2 Aventura</option>
                <option value="RPG">&#xf669 RPG</option>
                <option value="Online">&#xf57d Online</option>
            </select>
        </div>
        <div class="child">
            <select class="filter font_awesome" name="orderby" id="orderby">
                <option value="">&#xf160 Ordenar Por Preço</option>
                <option value="ASC">&#xf53a Baixo - Alto &#xf161</option>
                <option value="DESC">&#xf53a Alto - Baixo &#xf885</option>
            </select>
        </div>
        <div class="child">
            <button class="btn_filter" id="procc" type="submit"><i class="fa-solid fa-magnifying-glass"> Procurar</i></button>
        </div>
        <div class="child">
            <a href="/sale">
                <button class="btn_sale font_awesome" type="button">&#xf02c Promoções</button>
            </a>
        </div>
    </form>

</div>
