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
                            <h4 class="card-title">Slider Ekle</h4>
                            <p class="card-category">Slider</p>
                        </div>
                        <div class="card-body">
                            <form enctype="multipart/form-data" action="{{route('admin.slider.create.post')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group bmd-form-group">
                                            <label for="input-image">Slider Resim</label>
                                            <input id="input-image" name="image" type="file" accept="image/*" style="position: initial;opacity:1">
                                            <span class="material-input"></span>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right">Slider Ekle</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
