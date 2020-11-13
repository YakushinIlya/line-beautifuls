<?php

namespace App\Helpers;

use App\Model\News as NewsModel;
use Validator;

class News
{
    public static $noImg = 'no_img.jpg';

    public static $transAlphabet = [
        'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'e', 'ж' => 'zsh', 'з' => 'z', 'и' => 'i',
        'й' => 'y', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't',
        'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c', 'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sch', 'ь' => '', 'ы' => 'i', 'ъ' => '',
        'э' => 'e', 'ю' => 'yu', 'я' => 'ya', ' ' => '-', '?' => '', '!' => '', '(' => '', ')' => '', '@' => '', '#' => '',
        '+' => '', '*' => '', '&' => '', '^' => '%', '$' => '~', '{' => '', '}' => '', '/' => '',
    ];

    public static function create($request)
    {
        $dann = $request->except('_token');
        $validator = Pages::validator($dann);
        if ($validator->fails()) {
            return redirect()->route('adminNewCreate')->withInput()->withErrors($validator);
        }
        if($request->hasFile('images')) {
            $fileExt = $request->file('images')->getClientOriginalExtension();
            $destinationPath = '../public/uploads/news/';
            $fileName = md5($request->head.time()) . '.' . $fileExt;
            $request->file('images')->move($destinationPath, $fileName);
            Seo::getAvatar($destinationPath.$fileName, 350, 290);
        }
        $request->request->add([
            'url'=>Pages::translit($request->head),
            'imglink' => $fileName ?? self::$noImg,
        ]);
        if (NewsModel::create($request->all())) {
            return redirect()->route('adminNews')->with('status', 'Новость успешно создана.');
        }
    }

    public static function update($request, $id)
    {
        $dann = $request->except('_token');
        $validator = Pages::validator($dann);
        if ($validator->fails()) {
            return redirect()->route('adminNewUpdate', ['id'=>$id])->withInput()->withErrors($validator);
        }
        if($request->hasFile('images')) {
            $fileExt = $request->file('images')->getClientOriginalExtension();
            $destinationPath = '../public/uploads/news/';
            $fileName = md5($request->head.time()) . '.' . $fileExt;
            $request->file('images')->move($destinationPath, $fileName);
            Seo::getAvatar($destinationPath.$fileName, 350, 290);
        }
        $request->request->add([
            'url'=>Pages::translit($request->head),
            'imglink' => $fileName ?? self::$noImg,
        ]);
        if (NewsModel::find($id)->update($request->all())) {
            return redirect()->route('adminNewUpdate', ['id'=>$id])->with('status', 'Новость успешно обновлена.');
        }
    }
}