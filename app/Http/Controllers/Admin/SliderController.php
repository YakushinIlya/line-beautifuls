<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Helpers\Slider as SliderHelp;
use App\Model\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Слайдер',
            'content' => view('admin.content.slider', [
                'slider' => Slider::orderBy('id', 'desc')->get(),
            ]),
        ];
        return view('admin.panel', $data);
    }

    public function sliderUpdate(Request $request)
    {
        if($request->isMethod('post')){
            if(isset($request->ids)){
                $res = SliderHelp::slideUpdate($request);
            } else {
                $res = SliderHelp::slideCreate($request);
            }

            if($res) {
                return redirect()->route('adminSlider')->with('status', 'Слайдер успешно создам или отредактирован');
            }
        }
        $data = [
            'title' => 'Редактор слайдера',
            'content' => view('admin.content.sliderUpdate', [
                'slider' => Slider::orderByDesc('id')->get(),
            ]),
        ];
        return view('admin.panel', $data);
    }

    public function sliderDelete($id)
    {
        Slider::find($id)->delete();
        return redirect()->route('adminSliderUpdate')->with('status', 'Слайдер успешно удален');
    }
}
