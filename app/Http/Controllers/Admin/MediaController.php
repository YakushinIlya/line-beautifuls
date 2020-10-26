<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Примеры работ',
            'content' => 'Текст панели администратора',
        ];
        return view('admin.panel', $data);
    }
}
