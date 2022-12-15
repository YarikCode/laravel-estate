<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Offer;
use App\Models\Application;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Создание пользователей
        $names = ['Иванов Ярослав Григорьевич', 'Фомин Ратибор Дмитриевич'];
        $emails = ['yarosla.yarosl.ivanov@mail.ru', 'ratiborfomin903@mail.ru'];
        $numbers = ['+7 (964) 922-38-71', '+7 (935) 730-70-44'];
        $password = Hash::make('user');

        User::create(['name' => 'Admin', 
                        'email' => 'admin@mail.ru',
                        'status' => 'Admin',
                        'number' => '+7 (777) 777-77-77', 
                        'password' => Hash::make('user')]);

        for($i = 0; $i < count($names); $i++){
            User::create(['name' => $names[$i], 
                        'email' => $emails[$i], 
                        'number' => $numbers[$i], 
                        'password' => $password]);
        }

        // Создание предложений
        $types = ['Продажа', 'Продажа', 'Аренда'];
        $estate_types = ['Квартира', 'Частный дом', 'Квартира'];
        $address = ['177219, Амурская область, город Дорохово, въезд Ломоносова, 30', 
        '029838, Ленинградская область, город Люберцы, наб. Гагарина, 02',
        '629559, Тульская область, город Видное, пл. Бухарестская, 22'];
        $rooms = ['4', '3', '5'];
        $floors = ['1', 'Отсутствует', '4'];
        $squares = ['40', '30', '26'];
        $prices = ['3000000', '2500000', '1400000'];
        $users = ['2', '2', '3'];

        for($i = 0; $i < count($types); $i++){
            Offer::create(['type' => $types[$i], 
            'estate_type' => $estate_types[$i],
            'address' => $address[$i],
            'rooms' => $rooms[$i],
            'floor' => $floors[$i],
            'square' => $squares[$i], 
            'price' => $prices[$i],
            'user_id' => $users[$i]]);
        }

        // Создание заявок
        $offers = ['1', '2', '3'];
        $users = ['1', '1', '2'];
        for($i = 0; $i < count($offers); $i++){
            Application::create(['offer_id' => $offers[$i],
                                'user_id' => $users[$i]]);
        }
    }
}
