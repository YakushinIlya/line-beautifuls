<?php

namespace App\Http\Controllers;

use App\Model\Page;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index($page)
    {
        if($page=Page::where('url', $page)->first()) {
            return view('front.page', $page);
        }
        return redirect()->route('error', ['num'=>404]);
    }

    public function error($num)
    {
        return view('error', [
            'head' => config('view.error'.$num.'.head'),
            'message' => config('view.error'.$num.'.message'),
        ]);
    }

}
