<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>
    <!-- Шапка сайта -->
    <header>
      <nav class="py-2 bg-light border-bottom">
          <div class="container d-flex flex-wrap">
            <ul class="nav me-auto">
              <li class="nav-item text"><a href="{{ route('index') }}" class="nav-link link-dark px-2 active" aria-current="page">Главная</a></li>
              @auth
                <li class="nav-item text"><a href="{{ route('home') }}" class="nav-link link-dark px-2">Домашняя страница</a></li>
              @endauth
              <li class="nav-item text"><a href="#" class="nav-link link-dark px-2">Недвижимость</a></li>
            </ul>
            <ul class="nav d-flex align-items-center">
              @guest
                <li class="nav-item text"><a href="{{ route('login') }}" class="nav-link link-dark px-2">Войти</a></li>
                <li class="nav-item text"><a href="{{ route('register') }}" class="nav-link link-dark px-2">Зарегистрироваться</a></li>
              @endguest
              @auth
                <div class="dropdown text-end d-flex align-items-center">
                  <p class="text m-0 me-2">{{ Auth::user()->name }}</p>
                  <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle show" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="true">
                    <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                  </a>
                  <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1" data-popper-placement="bottom-end" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(-110px, 34px);">
                    <li><a class="dropdown-item text" href="{{ route('home') }}">Домашняя страница</a></li>
                    <li><a class="dropdown-item text" href="#">Главная</a></li>
                    <li><a class="dropdown-item text" href="#">Недвижимость</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><form action="{{ route('logout') }}" method="POST">
                      @csrf
                      <input type="submit" class="dropdown-item text" value="Выйти">
                    </form></li>
                  </ul>
                </div>
              @endauth
            </ul>
          </div>
      </nav>
    </header>
    
    <!-- Основной контент -->
    <div>
        @yield('main')
    </div>
</body>
</html>