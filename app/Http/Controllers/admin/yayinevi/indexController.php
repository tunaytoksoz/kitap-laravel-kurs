<?php

namespace App\Http\Controllers\admin\yayinevi;

use App\Helper\mHelper;
use App\Http\Controllers\Controller;
use App\Models\YayinEvi;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index()
    {
        $data = YayinEvi::paginate(10);
        return view('admin.yayinevi.index',['data'=>$data]);
    }
    public function create()
    {
        return view('admin.yayinevi.create');
    }
    public function store(Request $request)
    {
        $all= $request->except(('_token'));
        $all['selflink'] = mHelper::permalink($all['name']);

        $insert = YayinEvi::create($all);
         if ($insert)
         {
             return redirect()->back()->with('status', 'Yayinevi başarı ile eklendi.');
         }
         else
             return redirect()->back()->with('status', 'Yayinevi eklenemedi.');

    }

    public function edit($id)
    {
        $data = YayinEvi::where('id','=',$id)->get();
        return view('admin.yayinevi.edit', compact('data'));
    }
    public function update(Request $request)
    {
        $id=$request->route('id');
        $all= $request->except(('_token'));
        $all['selflink'] = mHelper::permalink($all['name']);

        $update = YayinEvi::where('id', '=' , $id)->update($all);
        if ($update)
        {
            return redirect()->back()->with('status', 'Yayinevi başarı ile düzenlendi.');
        }
        else
            return redirect()->back()->with('status', 'Yayinevi düzenlenemedi.');


    }

    public function delete($id)
    {
        $delete = YayinEvi::where('id','=',$id)->delete();
        if ($delete)
        {
            return redirect()->back();
        }
    }

}
