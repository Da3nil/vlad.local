@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Меню</div>

                <div class="card-body">
                        <div class="row my-card row-eq-height">
                        @foreach($products as $key => $product)
                            <div class="col-md-6 col-lg-4 col-xs-12 p-3">
                                <div class="card h-100">
                                    <img class="card-img-top" src="{{asset($product['url'])}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$product['name']}}</h5>
                                        <p class="card-text">{{$product['description']}}</p>
                                        <a href="{{url("buy", ['id' => $product['id']])}}" class="stretched-link">Заказать</a>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col-6">
                                                <p class="card-text">
                                                    <small class="text-muted">Выход:</small>
                                                    <span class="card-int">{{$product['weight']}} г</span>
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <p class="card-text">
                                                    <small class="text-muted">Цена:</small>
                                                    <span class="card-int">{{$product['price']}} Р</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
