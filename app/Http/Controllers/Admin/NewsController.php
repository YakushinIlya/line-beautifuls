<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Новости',
            'content' => 'Текст панели администратора',
        ];
        return view('admin.panel', $data);
    }
}
