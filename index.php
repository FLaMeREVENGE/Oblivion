<?php require_once("snippets/header.php"); ?>

<nav class="navbar">
    <a href="/" class="navbar_logo">SASS</a>
    <div class="navbar_bars"><i class="fas fa-bars"></i></div>
    <div class="navbar_menu">
        <a href="/" class="navbar_menu-links">Start</a>
        <a href="/" class="navbar_menu-links">Produkty</a>
        <a href="/" class="navbar_menu-links">Serwis</a>
        <a href="/" class="navbar_menu-links" id="button">Zaloguj</a>
    </div>
</nav>


<div class="hero">
    <div class="hero_container">
        <div class="hero_container-left">
            <h1>Nadchodzą!</h1>
            <h2>Przygotuj się...</h2>
            <p>Zaloguj się teraz na listę</p>
            <button class="hero_container-btn"><a href="#">Zaloguj</a></button>
        </div>
        <div class="hero_container-right">
            <img src="img/alien.png" alt="alien" class="hero_container-img">
        </div>
    </div>
</div>

<?php require_once("snippets/footer.php"); ?>
