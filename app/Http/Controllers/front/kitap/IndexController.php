<?php

namespace App\Http\Controllers\front\kitap;

use App\Http\Controllers\Controller;
use App\Models\Kitaplar;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index($selflink)
    {
        $control = Kitaplar::Where('selflink','=',$selflink)->count();

        if ($control)
        {
           // $ids = Kitaplar::all()->pluck('id');
           // dd($ids);

            $data = Kitaplar::Where('selflink','=',$selflink)->get();
            return view('front.kitap.index',compact('data'));
        }
        else
        {
          return redirect('/');
        }
    }
}
