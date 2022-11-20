<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Categorie;
use App\Models\Post;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $names = ['Vasia', 'Petya', 'Ivan', 'Maxim'];
        $emails = ['vasia@mail.ru', 'petya@mail.ru', 'ivan@mail.ru', 'maxim@mail.ru'];
        $password = Hash::make('user');

        $cat_names = ['Дороги', 'Дома', 'Обустройство'];
        $cat_desc = ['Проблемы с дорогами', 'Проблемы с жилыми домами', 'Проблемы с обустройством домов'];
        $cat_user = [1, 2, 4];

        $post_users = [1, 4, 4];
        $post_names = ['Ямы на дороге', 'Дом обрушился', 'Нет воды'];
        $post_descs = ['Очень много ям на улице Красной', 'В доме по адресу Красная 12/1 заклинило дверь', 'Нет воды в доме 2 недели'];
        $post_times = ['12:30:00', '16:00:00', '22:15:10'];
        $post_dates = ['2022-09-10', '2019-10-10', '2022-12-23'];
        $post_categories = [1, 2, 3];

        for ($i=0; $i < count($names); $i++) { 
            User::create([
                'name' => $names[$i],
                'email' => $emails[$i],
                'password' => $password,
            ]);
        }

        for ($i=0; $i < count($cat_names); $i++) { 
            Categorie::create([
                'name' => $cat_names[$i],
                'desc' => $cat_desc[$i],
                'user_id' => $cat_user[$i],
            ]);
        }

        for ($i=0; $i < count($post_users); $i++) { 
            Post::create([
                'user_id' => $post_users[$i],
                'name' => $post_names[$i],
                'desc' => $post_descs[$i],
                'time' => $post_times[$i],
                'date' => $post_dates[$i],
                'categorie_id' => $post_categories[$i],
            ]);
        }
    }
}
