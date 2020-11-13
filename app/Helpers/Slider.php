<?php

namespace App\Helpers;

use App\Model\Slider as SliderModel;

class Slider
{
    public static function slideUpdate($data)
    {
        $data2 = $data->except('_token');
        if($data->hasFile('images')) {
            $fileExt = $data->file('images')->getClientOriginalExtension();
            $destinationPath = '../public/uploads/slider/';
            $fileName = md5($data2['images'].time()) . '.' . $fileExt;
            $data->file('images')->move($destinationPath, $fileName);
            Seo::getAvatar($destinationPath.$fileName, 1200, 400);
            $data2['imglink'] = $fileName;
        }
        return SliderModel::find($data2['ids'])->update($data2);
    }

    public static function slideCreate($data)
    {
        $data2 = $data->except('_token');
        if($data->hasFile('images')) {
            $fileExt = $data->file('images')->getClientOriginalExtension();
            $destinationPath = '../public/uploads/slider/';
            $fileName = md5($data2['images'].time()) . '.' . $fileExt;
            $data->file('images')->move($destinationPath, $fileName);
            Seo::getAvatar($destinationPath.$fileName, 1200, 400);
            $data2['imglink'] = $fileName;
        }
        return SliderModel::create($data2);
    }
}