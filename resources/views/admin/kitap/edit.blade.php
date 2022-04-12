@extends('layouts.admin')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @if(session('status'))
                        <div class="alert alert-primary" role="alert">{{session('status')}}</div>
                    @endif
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Kitap Düzenle</h4>
                            <p class="card-category">{{$data[0]->name}}.</p>
                        </div>
                        <div class="card-body">
                            <form enctype="multipart/form-data" action="{{route('admin.kitap.edit.post',$data[0]->id)}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">Kitap Adı</label>
                                            <input type="text" name="name" value="{{$data[0]->name}}" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating pb-1">Kitap Resmi</label>
                                            @if($data[0]->image!="")
                                                <img src="{{asset($data[0]->image)}}" style="width: 200px;height: 200px;margin-top: 40px">
                                            @endif
                                            <input type="file" name="image" class="form-control" style="position: initial;opacity:1">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label pb-1" style="position: inherit">Kitap Yazarı</label>
                                            <select name="yazarID" id="" class="form-control">
                                                @foreach($yazar as $key => $value)
                                                    <option @if($value->id==$data[0]->yazarID) selected @endif value="{{$value->id}}"> {{$value->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label pb-1" style="position: initial">Yayınevi</label>
                                            <select name="yayineviID" id="" class="form-control">
                                                @foreach($yayinevi as $key => $value)
                                                    <option @if($value->id==$data[0]->yayineviID) selected @endif value="{{$value->id}}"> {{$value->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label pb-1" style="position: initial">Kategori</label>
                                            <select name="kategoriID" id="" class="form-control">
                                                @foreach($kategori as $key => $value)
                                                    <option @if($value->id==$data[0]->kategoriID) selected @endif value="{{$value->id}}"> {{$value->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">Kitap Fiyatı</label>
                                            <input type="text" value="{{$data[0]->fiyat}}" name="fiyat" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">Kitap Açıklama</label>
                                            <textarea name="aciklama" id="" cols="30" rows="10"
                                                      class="form-control">{{$data[0]->aciklama}}</textarea>
                                        </div>
                                    </div>
                                </div>



                                <button type="submit" class="btn btn-primary pull-right">Düzenle</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
