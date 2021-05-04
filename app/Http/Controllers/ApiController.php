<?php

namespace App\Http\Controllers;

use App\Core\Image;
use Exception;
use Illuminate\Http\Request;

class ApiController extends Controller
{


    public static function getIndex(Request $request, $dims)
    {
        $im = new Image();
        $im->setDimensions(['x' => explode('x', $dims)[0], 'y' => explode('x', $dims)[1]]);
        $im->setBgColor($request->input('bg'));
        $im->setTextColor($request->input('color'));
        $im->setFontUrl($request->input('font'));
        $im->setPercent($request->input('size'));
        $im->setContent($request->input('text'));

        $content = view('api.index', [
            'image' => serialize($im),
        ]);


        return response($content)->header('Content-Type', 'image/png');

    }


    public static function getIcon(Request $request, $dims, $text)
    {
        $im = new Image();
        $im->setDimensions(['x' => $dims, 'y' => $dims]);
        $im->setBgColor($request->input('bg'));
        $im->setTextColor($request->input('color'));
        $im->setFontUrl($request->input('font'));
        $im->setPercent($request->input('size'));

        $text = urldecode(str_replace('+', ' ', $text));
        $words = explode(' ', $text);
        foreach($words as $i => $word){
            $words[$i] = substr($word, 0, 1);
        }
        $content = implode('', $words);
        $im->setContent($content);

        $content = view('api.index', [
            'image' => serialize($im),
        ]);


        //Increments counter
//        $counterFilePath = './counter.txt';
//        $counter = file_get_contents($counterFilePath);
//        $counter++;
//        file_put_contents($counterFilePath, $counter);


        return response($content)->header('Content-Type', 'image/png');
    }

}
