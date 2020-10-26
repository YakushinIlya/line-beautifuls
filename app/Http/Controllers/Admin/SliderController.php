<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Слайдер',
            'content' => 'Текст панели администратора',
        ];
        return view('admin.panel', $data);
    }
}
