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
                            <h4 class="card-title">Kitap Ekle</h4>
                            <p class="card-category">Kitap Ekleyiniz.</p>
                        </div>
                        <div class="card-body">
                            <form enctype="multipart/form-data" action="{{route('admin.kitap.create.post')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">Kitap Adı</label>
                                            <input type="text" name="name" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating pb-1" style="position: initial">Kitap Resmi</label>
                                            <input type="file" name="image" class="form-control" style="position: initial;opacity:1">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label pb-1" style="position: initial">Kitap Yazarı</label>
                                            <select name="yazarID" id="" class="form-control">
                                                @foreach($yazar as $key => $value)
                                                    <option value="{{$value->id}}"> {{$value->name}}</option>
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
                                                    <option value="{{$value->id}}"> {{$value->name}}</option>
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
                                                    <option value="{{$value->id}}"> {{$value->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">Kitap Fiyatı</label>
                                            <input type="text" name="fiyat" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">Kitap Açıklama</label>
                                            <textarea name="aciklama" id="" cols="30" rows="10"
                                                      class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>



                                <button type="submit" class="btn btn-primary pull-right">Ekle</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
