@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Подтверждение</div>

                    <div class="card-body">
                        <h3>Вы собираетесь заказать: <span class="text-red">{{$product['name']}}</span></h3>
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Номер телефона</label>
                                <input name="myphone" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите номер телефона">
                                <small id="emailHelp" class="form-text text-muted">Отвечаем в течении часа</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">ФИО (не обязательно)</label>
                                <input name="fio" type="text" class="form-control" id="exampleInputPassword1" placeholder="Введите ФИО">
                            </div>
                            <button type="submit" class="btn btn-primary">Подтвердить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
