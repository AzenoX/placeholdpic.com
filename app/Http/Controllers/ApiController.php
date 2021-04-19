<?php

namespace App\Http\Controllers;

use App\Core\Image;
use Exception;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public static function getIndex(Request $request, $dims)
    {
        $im = new Image;
        $im->setDimensions(['x' => explode('x', $dims)[0], 'y' => explode('x', $dims)[1]]);
        $im->setBgColor($request->input('bg'));
        $im->setTextColor($request->input('text'));
        $im->setFontUrl($request->input('font'));
        $im->setFontSize($request->input('fsize'));

        $content = view('api.index', [
            'image' => serialize($im),
        ]);


        //Increments counter
        $counterFilePath = './counter.txt';
        $counter = file_get_contents($counterFilePath);
        $counter++;
        file_put_contents($counterFilePath, $counter);


        return response($content)->header('Content-Type', 'image/png');

    }

}
