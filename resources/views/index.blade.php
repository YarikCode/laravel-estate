@extends('layouts.base')

@section('title', 'Главная')

@section('main')
    <div class="container p-0 pb-4 d-flex flex-column justify-content-center" style="min-height: 100vh">
        <div class="index_image d-flex align-items-center justify-content-center m-0 p-0" style='background-image: url("/img/index_image.jpg");'>
            <p class="light_text" style="color: white; font-size: 50px">Вот оно счастье</p>
        </div>
        <div class="row m-0 p-0 pt-2 gap-2">
            <div class="col col_index_image" style='background-image: url("/img/index_image_col_1.jpg")'>
                <p class="light_text" style="color: white; font-size: 30px">Жилая недвижимость</p>
            </div>
            <div class="col col_index_image" style='background-image: url("/img/index_image_col_2.jpg")'>
                <p class="light_text" style="color: white; font-size: 30px">Загородная недвижимость</p>
            </div>
            <div class="col col_index_image" style='background-image: url("/img/index_image_col_3.jpg")'>
                <p class="light_text" style="color: white; font-size: 30px">Машиноместа</p>
            </div>
            <div class="col col_index_image" style='background-image: url("/img/index_image_col_4.jpg")'>
                <p class="light_text" style="color: white; font-size: 30px">Коммерческая недвижимость</p>
            </div>
        </div>
    </div>
    <div class="container-fluid d-flex flex-column justify-content-center all_height_image" style='background-image: url("/img/index_image_2.jpg");'>
        <div class="container d-flex flex-column gap-4">
            <p class="montserrat_light media_text" style="color: white; font-size: 50px">Качество</p>
            <p class="montserrat_extraLight media_text" style="color: white; font-size: 20px;">Опираясь на лучшие практики мировых лидеров, мы успешно задаём тренды в индустрии и создаём новый продукт, не имеющий аналогов.</p>
            <p class="montserrat_bold media_text" style="color: white; font-size: 18px;">Мы заслуживаем доверие наших клиентов, благодаря ответственному отношению, качественному выполнению работ и повышенному вниманию к деталям.</p>
        </div>
    </div>
@endsection('main')