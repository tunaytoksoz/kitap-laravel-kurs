@extends('layouts.admin')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <a href="{{route('admin.slider.create')}}" class="btn btn-success">Slider Ekle</a>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Slider</h4>
                            <p class="card-category">Burada mevcut Slider listesini bulabilirsiniz.</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <tr>
                                        <th>
                                            Önizleme
                                        </th>
                                        <th>
                                            Düzenle
                                        </th>
                                        <th>
                                            Sil
                                        </th>
                                    </tr></thead>
                                    <tbody>
                                    @foreach($data as $key => $value)
                                    <tr>
                                        <td>
                                            {{$value->image}}
                                        </td>
                                        <td>
                                            <a href="{{route('admin.slider.edit',$value->id)}}" style="width: 120px;height: 120px;">Düzenle</a>
                                        </td>
                                        <td>
                                            <a href="{{route('admin.slider.delete',$value->id)}}">Sil</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{$data->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
