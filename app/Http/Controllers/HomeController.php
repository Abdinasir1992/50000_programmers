<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController
{
    public function index()
    {
        echo "Главная страница";
    }

    public function aboutUs()
    {
        echo "Страница О нас";
    }
}


?>