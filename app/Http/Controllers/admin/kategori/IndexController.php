<?php

namespace App\Http\Controllers\admin\kategori;

use App\Helper\mHelper;
use App\Http\Controllers\Controller;
use App\Models\Kategoriler;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $data = Kategoriler::paginate(10);
        return view('admin.kategori.index',compact('data'));
    }
    public function create()
    {
        return view('admin.kategori.create');
    }
    public function store(Request $request)
    {
        $all= $request->except(('_token'));
        $all['selflink'] = mHelper::permalink($all['name']);

        $insert = Kategoriler::create($all);
        if ($insert)
        {
            return redirect()->back()->with('status', 'Kategori başarı ile eklendi.');
        }
        else
            return redirect()->back()->with('status', 'Kategori eklenemedi.');

    }

    public function edit($id)
    {
        $c = Kategoriler::where('id','=',$id)->count();

        if($c!=0)
        {
            $data = Kategoriler::where('id','=',$id)->get();
            return view('admin.kategori.edit', compact('data'));
        }
        else
        {
            return redirect("/");
        }

    }
    public function update(Request $request)
    {
        $id=$request->route('id');
        $all= $request->except(('_token'));
        $all['selflink'] = mHelper::permalink($all['name']);

        $update = Kategoriler::where('id', '=' , $id)->update($all);
        if ($update)
        {
            return redirect()->back()->with('status', 'Kategori başarı ile düzenlendi.');
        }
        else
            return redirect()->back()->with('status', 'Kategori düzenlenemedi.');


    }

    public function delete($id)
    {
        $delete = Kategoriler::where('id','=',$id)->delete();
        if ($delete)
        {
            return redirect()->back();
        }
    }

}
