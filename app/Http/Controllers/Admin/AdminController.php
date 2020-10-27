<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function panel()
    {
        $arrAsk = config('view.randAsk');
        $randAsk = $arrAsk[rand(0, count($arrAsk)-1)];
        $data = [
            'title' => 'Панель администратора',
            'content' => view('admin.content.panel', [
                'user' => Auth::user(),
                'randAsk' => $randAsk,
            ]),
        ];
        return view('admin.panel', $data);
    }

}
