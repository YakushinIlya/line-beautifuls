<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrivilegeController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Преимущества',
            'content' => 'Текст панели администратора',
        ];
        return view('admin.panel', $data);
    }
}
