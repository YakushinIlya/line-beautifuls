<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Спектр услуг',
            'content' => 'Текст панели администратора',
        ];
        return view('admin.panel', $data);
    }
}
