<?php

namespace App\Http\Controllers\Admin;

use App\Model\Services;
use App\Helpers\Services as ServicesHelp;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Услуги',
            'content' => view('admin.content.services', [
                'servicesList' => Services::select(['id', 'head', 'url'])->where('url', '!=', '')->orderBy('id', 'desc')->paginate(20),
            ]),
        ];
        return view('admin.panel', $data);
    }

    public function serviceCreate(Request $request)
    {
        if ($request->isMethod('post')) {
            return ServicesHelp::create($request);
        }
        $data = [
            'title' => 'Добавить услугу',
            'content' => view('admin.content.serviceCreate'),
        ];
        return view('admin.panel', $data);
    }

    public function serviceUpdate(Request $request, $id=null)
    {
        if ($request->isMethod('post')) {
            return ServicesHelp::update($request, $id);
        }
        $data = [
            'title' => 'Редактировать услугу',
            'content' => view('admin.content.serviceUpdate', [
                'service' => Services::find($id),
            ]),
        ];
        return view('admin.panel', $data);
    }

    public function serviceDelete($id)
    {
        Services::find($id)->delete();
        return redirect()->route('adminServices')->with('status', 'Услуга успешно удалена.');
    }
}
