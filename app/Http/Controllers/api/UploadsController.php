<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadsController extends Controller
{
    public function index(Request $request)
    {
        if($request->hasFile('file')) {
            $fileExt = $request->file('file')->getClientOriginalExtension();
            $destinationPath = '../public/uploads/pages/';
            $fileName = md5(time()) . '.' . $fileExt;
            $request->file('file')->move($destinationPath, $fileName);
            return json_encode(['location' => '/uploads/pages/'.$fileName]);
        }
        return false;
    }
}
