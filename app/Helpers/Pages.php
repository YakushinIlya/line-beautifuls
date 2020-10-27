<?php

namespace App\Helpers;

use App\Model\Page;
use Validator;

class Pages
{
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
        $validator = self::validator($dann);
        if ($validator->fails()) {
            return redirect()->route('adminPageCreate')->withInput()->withErrors($validator);
        }
        $request->request->add(['url'=>self::translit($request->head)]);
        if (Page::create($request->all())) {
            return redirect()->route('adminPages')->with('status', 'Страница успешно создана.');
        }
    }

    public static function update($request, $id)
    {
        $dann = $request->except('_token');
        $validator = self::validator($dann);
        if ($validator->fails()) {
            return redirect()->route('adminPageUpdate', ['id'=>$id])->withInput()->withErrors($validator);
        }
        $request->url = ['url'=>self::translit($request->head)];
        if (Page::find($id)->update($request->all())) {
            return redirect()->route('adminPageUpdate', ['id'=>$id])->with('status', 'Страница успешно обновлена.');
        }
    }

    public static function translit($string)
    {
        $s = strip_tags($string);
        $s = str_replace(array("\n", "\r"), " ", $s);
        $s = preg_replace("/\s+/", ' ', $s);
        $s = trim($s);
        $s = function_exists('mb_strtolower') ? mb_strtolower($s) : strtolower($s);
        $s = strtr($s, self::$transAlphabet);
        $s = preg_replace("/[^0-9a-z-_ ]/i", "", $s);
        $s = str_replace(" ", "-", $s);
        return $s;
    }

    public static function validator(array $data) {
        return Validator::make($data, [
            'title' => 'nullable|max:255',
            'description' => 'nullable|max:255',
            'keywords' => 'nullable|max:255',
            'head' => 'required|string',
            'body' => 'required|string',
        ]);
    }
}