<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Article extends Controller
{
    // Добавить в родительский контроллер методы для хранения данных, которые будет возвращать массивы.
    //Массивы должны содержать информацию о категориях новостей(мимнимум 5), и новостях (минимум 4 для каждой категории)
    public function category(){
        $categories=$this->getCategory();
        return view('news.category', [
            'ctgList'=> $categories
        ]);
    }
    public function index() {
        $news=$this->getNews();
        return view('news.index',[
            'newsList'=> $news
        ]);
    }
    public function show(int $id) {
        $news = $this->getNews($id);
        return view('news.show', [
            'news'=> $news
        ]);
    }
}
