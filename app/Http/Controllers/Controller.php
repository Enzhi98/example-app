<?php

namespace App\Http\Controllers;

use Faker\Factory;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getCategory(int $id_c = null): array
    {
        $categories=[];
        if($id_c) {
            return   $categories = [
                '1' => 'Авто',
                '2' => 'Здоровье',
                '3' => 'Звезды',
                '4' => 'Семья',
            ];
        }
        return   $categories = [
            '1' => 'Авто',
            '2' => 'Здоровье',
            '3' => 'Звезды',
            '4' => 'Семья',
        ];
    }

    public function getNews(int $id = null): array
    {
        $news = [];
        $faker = Factory::create();
        //dd($this->getCategory());
        $k=array_rand($this->getCategory());
        if ($id) {
            return [
                'title' => $faker->jobTitle(),
                'author' => $faker->userNAme(),
                'status' => 'DRAFT',
                'description' => $faker->text(100),
                'created_at' => now('Europe/Moscow'),
                'category' => $this->getCategory()[$k],
            ];

        }
        for ($i = 1; $i < 20; $i++) {
            $k=array_rand($this->getCategory());
            $news[$i] = [
                'title' => $faker->jobTitle(),
                'author' => $faker->userNAme(),
                'status' => 'DRAFT',
                'description' => $faker->text(100),
                'created_at' => now('Europe/Moscow'),
                'category' => $this->getCategory()[$k],
            ];
        }
        return $news;
    }
}
