@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Клиенты</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table style="  width: 100%;
                                        display: block;
                                        overflow-x: auto;
                                        white-space: nowrap;"
                               class="table">
                            <tr>
                                <th class="border-top-0">ID клиента</th>
                                <th class="border-top-0">Мобильный</th>
                                <th class="border-top-0">ФИО клиента</th>
                                <th class="border-top-0">Общая прибыль</th>
                                <th class="border-top-0">Дата последнего заказа</th>
                            </tr>


                        @foreach($customers as $customer)
                            <tr>
                                <td>
                                    {{$customer->id}}
                                </td>
                                <td>
                                    {{$customer->c_phone}}
                                </td>
                                <td>
                                    {{$customer->c_name}}
                                </td>
                                <td>
                                    {{$customer->c_total_profit}}
                                </td>
                                <td>
                                    {{$customer->c_last_date_arrival}}
                                </td>
                            </tr>
                        @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
