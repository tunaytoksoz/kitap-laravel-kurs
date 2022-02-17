<?php

namespace App\Http\Controllers\admin\kitap;

use App\Helper\imageUpload;
use App\Helper\mHelper;
use App\Http\Controllers\Controller;
use App\Models\Kitaplar;
use App\Models\YayinEvi;
use App\Models\Yazarlar;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index()
    {
        $data = Kitaplar::paginate(10);
        return view('admin.kitap.index',compact('data'));
    }
    public function create()
    {
        $yazar = Yazarlar::all();
        $yayinevi = YayinEvi::all();
        return view('admin.kitap.create', compact('yazar','yayinevi'));
    }
    public function store(Request $request)
    {
        $all =$request->except('_token');
        $all['selflink']=mHelper::permalink($all['name']);
        $all['image']=imageUpload::singleUpload(rand(1,20000),"kitap",$request->file('image'));

        $insert = Kitaplar::create($all);
        if ($insert)
        {
            return redirect()->back()->with('status','Kitap Eklendi.');
        }
        else
        {
            return redirect()->back()->with('status','Kitap Eklenemedi.');
        }
    }
}
