@extends('layouts.base')

@section('main')
    <div class="container p-2">

        <h1 class="montserrat_light p-2">Информация о пользователе</h1>
        <div class="content_block p-2">
            <div class="row">
                <div class="col pb-2 d-flex flex-column justify-content-start align-items-center">
                    <img src="/img/default.jpg" class="home_user_image img-fluid">
                    <a href="#" class="mt-4"><button class="custom_button">Редактировать данные</button></a>
                    <a href="#" class="mt-4"><button class="white_custom_button">Удалить</button></a>
                </div>
                <div class="col d-flex flex-column justify-content-center">
                    <div>
                        <p class="text mb-1" style="color: gray">Имя пользователя</p>
                        <p class="text pb-2 border-bottom" style="font-size: 18px">{{ Auth::user()->name }}</p>
                    </div>
                    <div>
                        <p class="text mb-1" style="color: gray">Электронная почта</p>
                        <p class="text pb-2 border-bottom" style="font-size: 18px">{{ Auth::user()->email }}</p>
                    </div>
                    <div>
                        <p class="text mb-1" style="color: gray">Мобильный телефон</p>
                        <p class="text pb-2 border-bottom" style="font-size: 18px">{{ Auth::user()->number }}</p>
                    </div>
                    <div>
                        <p class="text mb-1" style="color: gray">Статус пользователя</p>
                        <p class="text pb-2 border-bottom" style="font-size: 18px">{{ Auth::user()->status }}</p>
                    </div>
                </div>
            </div>
        </div>

        <h1 class="montserrat_light p-2 pt-4">Ваши заявки</h1>
        @foreach ($applications as $application)
            <div class="content_block p-2 mb-4">
                <div class="row">
                    <div class="col pb-2 d-flex flex-column justify-content-start align-items-center">
                        <img src="/img/default.jpg" class="home_user_image img-fluid">
                        <a href="#" class="mt-4"><button class="white_custom_button">Отменить заявку</button></a>
                    </div>
                    <div class="col d-flex flex-column justify-content-center">
                        <div>
                            <p class="text mb-1" style="color: gray">Номер заявки</p>
                            <p class="text pb-2 border-bottom" style="font-size: 18px">{{ $application->id }}</p>
                        </div>
                        <div>
                            <p class="text mb-1" style="color: gray">Вид предложения</p>
                            <p class="text pb-2 border-bottom" style="font-size: 18px">{{ $application->offer->type }}</p>
                        </div>
                        <div>
                            <p class="text mb-1" style="color: gray">Недвижимость</p>
                            <p class="text pb-2 border-bottom" style="font-size: 18px">{{ $application->offer->estate_type }}</p>
                        </div>
                        <div>
                            <p class="text mb-1" style="color: gray">Статус заявки</p>
                            <p class="text pb-2 border-bottom" style="font-size: 18px">{{ $application->status }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        <h1 class="montserrat_light p-2 pt-4">Ваши предложения</h1>
        @foreach ($offers as $offer)
            <div class="content_block p-2 mb-3">
                <div class="row">
                    <div class="col pb-2 d-flex flex-column justify-content-start align-items-center">
                        <img src="/img/default.jpg" class="home_user_image img-fluid">
                        <a href="#" class="mt-4"><button class="custom_button">Открыть детально</button></a>
                        <a href="#" class="mt-4"><button class="white_custom_button">Удалить предложение</button></a>
                    </div>
                    <div class="col d-flex flex-column justify-content-center">
                        <div>
                            <p class="text mb-1" style="color: gray">Номер предложения</p>
                            <p class="text pb-2 border-bottom" style="font-size: 18px">{{ $offer->id }}</p>
                        </div>
                        <div>
                            <p class="text mb-1" style="color: gray">Вид предложения</p>
                            <p class="text pb-2 border-bottom" style="font-size: 18px">{{ $offer->type }}</p>
                        </div>
                        <div>
                            <p class="text mb-1" style="color: gray">Недвижимость</p>
                            <p class="text pb-2 border-bottom" style="font-size: 18px">{{ $offer->estate_type }}</p>
                        </div>
                        <div>
                            <p class="text mb-1" style="color: gray">Стоимость</p>
                            <p class="text pb-2 border-bottom" style="font-size: 18px">{{ $offer->price }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
@endsection
