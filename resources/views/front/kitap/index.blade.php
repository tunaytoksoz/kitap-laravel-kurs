@extends('layouts.app')
@section('content')
    <!--start-breadcrumbs-->
    <div class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs-main">
                <ol class="breadcrumb">
                    <li><a href="{{route('index')}}">Anasayfa</a></li>
                    <li class="active">{{$data[0]->name}}</li>
                </ol>
            </div>
        </div>
    </div>
    <!--end-breadcrumbs-->
    <!--start-single-->
    <div class="single contact">
        <div class="container">
            <div class="single-main">
                <div class="col-md-12 single-main-left">
                    <div class="sngl-top">
                        <div class="col-md-4 single-top-left">
                            <div class="flexslider">
                                <ul class="slides">
                                    <li data-thumb="{{asset(\App\Helper\mHelper::largeImage($data[0]->image))}}">
                                        <div class="thumb-image"> <img src="{{asset(\App\Helper\mHelper::largeImage($data[0]->image))}}" data-imagezoom="true" class="img-responsive" alt=""/> </div>
                                </ul>
                            </div>

                            <script>
                                // Can also be used with $(document).ready()
                                $(window).load(function() {
                                    $('.flexslider').flexslider({
                                        animation: "fade",
                                        controlNav: "thumbnails"
                                    });
                                });
                            </script>
                        </div>
                        <div class="col-md-8 single-top-right">
                            <div class="single-para simpleCart_shelfItem">
                                <h2>{{$data[0]->name}}</h2>

                                <h5 class="item_price">{{$data[0]->fiyat}} TL</h5>
                                <p>{{$data[0]->aciklama}}</p>
                                <ul class="tag-men">
                                    <li><span>Kategori</span>
                                        <span class="women1">:{{\App\Models\Kategoriler::getField($data[0]->kategoriID,'name')}}</span></li>
                                    <li><span>Yayınevi</span>
                                        <span class="women1">: {{\App\Models\YayinEvi::getField($data[0]->yayineviID,'name')}}</span></li>
                                    <li><span>Yazar</span>
                                        <span class="women1">: {{\App\Models\Yazarlar::getField($data[0]->yazarID,'name')}}</span></li>
                                </ul>
                                <a href="#" class="add-cart item_add">ADD TO CART</a>

                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="latestproducts">
                        <div class="product-one">
                            <div class="col-md-4 product-left p-left">
                                <div class="product-main simpleCart_shelfItem">
                                    <a href="single.html" class="mask"><img class="img-responsive zoom-img" src="images/p-1.png" alt="" /></a>
                                    <div class="product-bottom">
                                        <h3>Smart Watches</h3>
                                        <p>Explore Now</p>
                                        <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ 329</span></h4>
                                    </div>
                                    <div class="srch">
                                        <span>-50%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 product-left p-left">
                                <div class="product-main simpleCart_shelfItem">
                                    <a href="single.html" class="mask"><img class="img-responsive zoom-img" src="images/p-2.png" alt="" /></a>
                                    <div class="product-bottom">
                                        <h3>Smart Watches</h3>
                                        <p>Explore Now</p>
                                        <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ 329</span></h4>
                                    </div>
                                    <div class="srch">
                                        <span>-50%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 product-left p-left">
                                <div class="product-main simpleCart_shelfItem">
                                    <a href="single.html" class="mask"><img class="img-responsive zoom-img" src="images/p-3.png" alt="" /></a>
                                    <div class="product-bottom">
                                        <h3>Smart Watches</h3>
                                        <p>Explore Now</p>
                                        <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ 329</span></h4>
                                    </div>
                                    <div class="srch">
                                        <span>-50%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!--end-single-->
@endsection
