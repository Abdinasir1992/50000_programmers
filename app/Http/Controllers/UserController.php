<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController
{
    public function index()
    {
        echo "Страница списка пользователей";
    }

    public function create()
    {
        echo "Страница создания пользователя";
    }

    public function edit()
    {
        echo "Страница изменения данных пользователя";
    }

    public function delete()
    {
        echo "Страница удаления пользователя";
    }
}