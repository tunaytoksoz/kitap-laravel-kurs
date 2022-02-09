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
                            <h4 class="card-title">Yazar Düzenle </h4>
                            <p class="card-category">{{$data[0]->name}}.</p>
                        </div>
                        <div class="card-body">
                            <form enctype="multipart/form-data" action="{{route('admin.yazar.edit.post',$data[0]->id)}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group bmd-form-group">
                                            <input type="text" name="name" class="form-control" value="{{$data[0]->name}}">
                                            <span class="material-input"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group bmd-form-group">
                                            @if($data[0]->image!="")
                                                <img src="{{asset($data[0]->image)}}" style="width: 200px;height: 200px">
                                            @endif
                                            <input id="input-image" name="image" type="file" accept="image/*" style="position: initial;opacity:1">
                                            <span class="material-input"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group bmd-form-group">
                                            <textarea name="bio" id="" cols="30" rows="10"
                                                      class="form-control">{{$data[0]->bio}}</textarea>
                                            <span class="material-input"></span>
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
