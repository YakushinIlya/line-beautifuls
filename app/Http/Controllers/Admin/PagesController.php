<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Helpers\Pages;
use App\Model\Page;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Страницы',
            'content' => view('admin.content.pages', [
                'pagesList' => Page::select(['id', 'head', 'url'])->where('url', '!=', '')->orderBy('id', 'desc')->paginate(20),
            ]),
        ];
        return view('admin.panel', $data);
    }

    public function pageCreate(Request $request)
    {
        if ($request->isMethod('post')) {
            Pages::create($request);
        }
        $data = [
            'title' => 'Добавить страницу',
            'content' => view('admin.content.pageCreate'),
        ];
        return view('admin.panel', $data);
    }

    public function pageUpdate(Request $request, $id=null)
    {
        if ($request->isMethod('post')) {
            Pages::update($request, $id);
        }
        $data = [
            'title' => 'Редактировать страницу',
            'content' => view('admin.content.pageUpdate', [
                'page' => Page::find($id),
            ]),
        ];
        return view('admin.panel', $data);
    }

    public function pageDelete($id)
    {
        Page::find($id)->delete();
        return redirect()->route('adminPages')->with('status', 'Страница успешно удалена.');
    }
}
