<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index(Request $request)
    {
        $randomName = md5_file($request->file('file')->getRealPath());
        $extension = $request->file('file')->guessExtension();
        return $request->file('file')->storeAs('docs', $randomName.'.'.$extension, 'public');



      }

}
