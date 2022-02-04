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
    public function create(){
        return view('admin.yayinevi.create');
    }
    public function store(Request $request){
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


}
