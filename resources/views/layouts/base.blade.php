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
    <!-- Навигационное меню -->
    <nav class="py-2 bg-light border-bottom">
        <div class="container d-flex flex-wrap">
          <ul class="nav me-auto">
            <li class="nav-item"><a href="#" class="nav-link link-dark px-2 active" aria-current="page">Главная</a></li>
            <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Домашняя страница</a></li>
            <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Недвижимость</a></li>
          </ul>
          <ul class="nav d-flex align-items-center">
            <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Войти</a></li>
            <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Зарегистрироваться</a></li>
            <div class="dropdown text-end">
                <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle show" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="true">
                  <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                </a>
                <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1" data-popper-placement="bottom-end" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(-110px, 34px);">
                  <li><a class="dropdown-item" href="#">Домашняя страница</a></li>
                  <li><a class="dropdown-item" href="#">Главная</a></li>
                  <li><a class="dropdown-item" href="#">Недвижимость</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Выйти</a></li>
                </ul>
            </div>
          </ul>
        </div>
    </nav>  

    <!-- Шапка сайта -->
    <header class="py-3">
        <div class="container d-flex flex-wrap justify-content-center">
          <a href="/" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-dark text-decoration-none">
            <span class="fs-4 ps-2">Продажа и аренда недвижимости</span>
          </a>
          <form class="col-12 col-lg-auto mb-3 mb-lg-0">
            <input type="search" class="form-control" placeholder="Поиск..." aria-label="Search">
          </form>
        </div>
    </header>
    
    <!-- Основной контент -->
    <div>
        @yield('main')
    </div>
</body>
</html>