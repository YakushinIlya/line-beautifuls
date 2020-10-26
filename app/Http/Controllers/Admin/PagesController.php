<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Страницы',
            'content' => view('admin.content.pages'),
        ];
        return view('admin.panel', $data);
    }

    public function pageCreate()
    {
        $data = [
            'title' => 'Добавить страницу',
            'content' => view('admin.content.pageCreate'),
        ];
        return view('admin.panel', $data);
    }
}
