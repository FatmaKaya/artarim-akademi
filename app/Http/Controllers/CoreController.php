<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Core;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CoreController extends Controller
{
    public function __construct()
    {

    }

    public function upload(Request $request){
        return self::singleUpload("files",$request);
    }

    public static function singleUpload($filename, $request) {
        $arr = self::multiUpload($filename,$request);
        return env("APP_URL").$arr[0];
    }

    public static function multiUpload($filename, $request) {
        if($request->hasFile($filename))
        {
            foreach ($request->file($filename) as $file) {
                $arr[] = self::uploadFile($file);
            }
            return $arr;
        }
        return false;
    }

    public static function uploadFile($file) {
        $name = rand(1000000000,999999999999).'.'.$file->getClientOriginalExtension();
        $image['filePath'] = $name;
        $file->move(public_path().'/uploads/', $name);
        return '/uploads/'.$name;
    }

}
