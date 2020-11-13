<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\News;
use App\Helpers\News as NewsHelp;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Новости',
            'content' => view('admin.content.news', [
                'newsList' => News::select(['id', 'head', 'url'])->where('url', '!=', '')->orderBy('id', 'desc')->paginate(20),
            ]),
        ];
        return view('admin.panel', $data);
    }

    public function newCreate(Request $request)
    {
        if ($request->isMethod('post')) {
            return NewsHelp::create($request);
        }
        $data = [
            'title' => 'Добавить новость',
            'content' => view('admin.content.newCreate'),
        ];
        return view('admin.panel', $data);
    }

    public function newUpdate(Request $request, $id=null)
    {
        if ($request->isMethod('post')) {
            return NewsHelp::update($request, $id);
        }
        $data = [
            'title' => 'Редактировать новость',
            'content' => view('admin.content.newUpdate', [
                'new' => News::find($id),
            ]),
        ];
        return view('admin.panel', $data);
    }

    public function newDelete($id)
    {
        News::find($id)->delete();
        return redirect()->route('adminNews')->with('status', 'Новость успешно удалена.');
    }
}
