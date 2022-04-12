@extends('layouts.admin')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <a href="{{route('admin.kategori.create')}}" class="btn btn-success">Kategori Ekle</a>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Kategoriler</h4>
                            <p class="card-category">Burada mevcut kategorileri listesini bulabilirsiniz.</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <tr>
                                        <th>
                                            İsim
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
                                            {{$value->name}}
                                        </td>
                                        <td>
                                            <a href="{{route('admin.kategori.edit',$value->id)}}">Düzenle</a>
                                        </td>
                                        <td>
                                            <a href="{{route('admin.kategori.delete',$value->id)}}">Sil</a>
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
