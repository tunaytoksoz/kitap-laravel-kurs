@extends('layouts.admin')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Kitaplar</h4>
                            <p class="card-category">Burada mevcut kitapların listesini bulabilirsiniz.</p>
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
                                                <a href="{{route('admin.kitap.edit',$value->id)}}">Düzenle</a>
                                            </td>
                                            <td>
                                                <a href="{{route('admin.kitap.delete',$value->id)}}">Sil</a>
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
