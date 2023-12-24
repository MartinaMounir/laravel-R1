<?php

namespace App\Http\Controllers;

use App\Traits\Common;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    use Common;

    public function test()
    {
        return view("login");
    }

    public function mySession()
    {
        session()->put('test', 'First Laravel session');
//        session()->forget('test');

        $data = session('test');
        return view('session', compact('data'));
    }

    public function showupload()
    {
        return view("upload");
    }

    public function place()
    {
        return view("place");
    }

    public function blog()
    {
        return view("blog");
    }
}
//    public function upload(Request $request)
//    {
////        $file_extension = $request->image->getClientOriginalExtension();
////        $file_name = time() . '.' . $file_extension;
////        $path = '
//}assets/images';
////        $request->image->move($path, $file_name);
//        $fileName = $this->uploadFile($request->image, 'assets/images');
//        return $fileName;
//    }
//}
