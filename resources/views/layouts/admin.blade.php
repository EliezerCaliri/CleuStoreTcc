<!doctype html>
<html lang="pt-br">
    <head>
        <title>Admin | CleuStore</title>
        <meta charset="utf-8">  
        @vite(['resources/sass/admin/admin.scss'])


        <title>@yield('title') {{ config('app.name') }}</title>
    </head>

    <body>
        <style>* {
    margin: 0;
    padding: 0;
  }
  
  a {
    color: #fff;
    text-decoration: none;
    transition: 0.3s;
  }
  
  a:hover {
    opacity: 0.7;
  }
  
  .logo {
    font-size: 24px;
    text-transform: uppercase;
    letter-spacing: 4px;
  }
  
  nav {
    display: flex;
    justify-content: space-around;
    align-items: center;
    font-family: system-ui, -apple-system, Helvetica, Arial, sans-serif;
    background: #23232e;
    height: 8vh;
  }
  
  main {
    background: url("bg.jpg") no-repeat center center;
    background-size: cover;
    height: 92vh;
  }
  
  .nav-list {
    list-style: none;
    display: flex;
  }
  
  .nav-list li {
    letter-spacing: 3px;
    margin-left: 32px;
  }
  
  .mobile-menu {
    display: none;
    cursor: pointer;
  }
  
  .mobile-menu div {
    width: 32px;
    height: 2px;
    background: #fff;
    margin: 8px;
    transition: 0.3s;
  }
  
  @media (max-width: 999px) {
    body {
      overflow-x: hidden;
    }
    .nav-list {
      position: absolute;
      top: 8vh;
      right: 0;
      width: 50vw;
      height: 92vh;
      background: #23232e;
      flex-direction: column;
      align-items: center;
      justify-content: space-around;
      transform: translateX(100%);
      transition: transform 0.3s ease-in;
    }
    .nav-list li {
      margin-left: 0;
      opacity: 0;
    }
    .mobile-menu {
      display: block;
    }
  }
  
  .nav-list.active {
    transform: translateX(0);
  }
  
  @keyframes navLinkFade {
    from {
      opacity: 0;
      transform: translateX(50px);
    }
    to {
      opacity: 1;
      transform: translateX(0);
    }
  }
  
  .mobile-menu.active .line1 {
    transform: rotate(-45deg) translate(-8px, 8px);
  }
  
  .mobile-menu.active .line2 {
    opacity: 0;
  }
  
  .mobile-menu.active .line3 {
    transform: rotate(45deg) translate(-5px, -7px);
  }</style>
    <!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Navbar</title>
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <header>
      <nav>
        <a class="logo" href="{{ route('admin.index') }}">Bem vindo {{$admins->name}}</a>
        <div class="mobile-menu">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
        <ul class="nav-list">
          <li><a href="#">Início</a></li>
          <li><a href="#">Sobre</a></li>
          <li><a href="#">Produtos</a></li>
          <li><a href="#">Contato</a></li>
        </ul>
      </nav>
    </header>
    <main></main>
    <script src="mobile-navbar.js"></script>
  </body>
</html>
        @yield('conteudo')
    </body>
</html>
