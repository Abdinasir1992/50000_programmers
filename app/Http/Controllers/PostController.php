<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController
{
    public function index()
    {
        echo "Страница списка новостей";
    }

    public function create()
    {
        echo "Страница создания новости";
    }

    public function edit()
    {
        echo "Страница изменения новости";
    }

    public function delete()
    {
        echo "Страница удаления новости";
    }
    
}


?>