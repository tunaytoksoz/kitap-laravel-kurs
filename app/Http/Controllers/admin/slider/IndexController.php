<?php

namespace App\Http\Controllers\admin\slider;

use App\Helper\imageUpload;
use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $data = Slider::paginate(10);
        return view('admin.slider.index', compact('data'));
    }

    public function create()
    {
        return view('admin.slider.create');
    }

    public function store(Request $request)
    {
        $all['image'] = imageUpload::singleUpload(rand(1,9000),"slider",$request->file('image'));
        if ($all['image']){
            $insert = Slider::create($all);
            if ($insert) {
                return redirect()->back()->with('status', 'Slider Eklendi.');
            } else {
                return redirect()->back()->with('status', 'Slider Eklenemedi.');
            }
        }
        else
        {
            return redirect()->back()->with('status', 'Slider Eklenemedi.');
        }
    }

    public function edit($id)
    {
        $data = Slider::Where('id','=',$id)->get();
        return view('admin.slider.edit',compact('data'));
    }

    public function update(Request $request)
    {
        $id = $request->route('id');
        $data = Slider::Where('id','=',$id)->get();
        $all['image'] = imageUpload::singleUploadUpdate(rand(1,9000),"slider",$request->file('image'),$data,'image');
        if ($all['image']){
            $insert = Slider::Where('id','=',$id)->update($all);
            if ($insert) {
                return redirect()->back()->with('status', 'Slider Düzenlendi.');
            } else {
                return redirect()->back()->with('status', 'Slider Düzenlenemedi.');
            }
        }
        else
        {
            return redirect()->back()->with('status', 'Slider Düzenlenemedi.');
        }
    }


    public function delete($id)
    {
        $data = Slider::Where('id','=',$id)->delete();
        return redirect()->back();
    }

}
