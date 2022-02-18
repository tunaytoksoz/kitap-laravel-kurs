<?php

namespace App\Http\Controllers\admin\kitap;

use App\Helper\imageUpload;
use App\Helper\mHelper;
use App\Http\Controllers\Controller;
use App\Models\Kitaplar;
use App\Models\YayinEvi;
use App\Models\Yazarlar;
use Illuminate\Http\Request;
use File;

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

    public function edit($id)
    {
        $control = Kitaplar::where('id','=',$id)->count();
        $yazar = Yazarlar::all();
        $yayinevi = YayinEvi::all();
        if ($control!=0)
            {
                $data = Kitaplar::where('id','=',$id)->get();
                return view('admin.kitap.edit',compact('data','yazar','yayinevi'));
            }
        else
        {
            return redirect("/");
        }
    }
    public function update(Request $request)
    {
        $id = $request->route('id');
        $control = Kitaplar::where('id','=',$id)->count();
        if ($control!=0)
        {
            $data = Kitaplar::where('id','=',$id)->get();
            $all = $request->except('_token');
            $all['selflink'] = mHelper::permalink($all['name']);
            $all['image'] = imageUpload::singleUploadUpdate(rand(1,9000),"kitap",$request->file('image'),$data,"image");

            $update = Kitaplar::where('id','=',$id)->update($all);
            if ($update)
            {
                return redirect()->back()->with('status','Kitap başarı ile güncellendi.');
            }
            else
            {
                return redirect()->back()->with('status','Kitap düzenlenemedi.');
            }
        }
        else
        {
            return redirect("/");
        }
    }

    public function delete($id)
    {
        $control = Kitaplar::where('id','=',$id)->count();

        if ($control!=0)
        {
            $w = Kitaplar::where('id','=',$id)->get();
            $bol = explode("/", $w[0]['image'], 4);
            File::deleteDirectory(public_path("images/kitap/".$bol[2]));
            Kitaplar::where('id','=',$id)->delete();
            return redirect()->back();

        }
        else
        {
            return redirect('/');
        }
    }
}
