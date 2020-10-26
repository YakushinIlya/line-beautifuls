<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Контакты',
            'content' => 'Текст панели администратора',
        ];
        return view('admin.panel', $data);
    }
}
