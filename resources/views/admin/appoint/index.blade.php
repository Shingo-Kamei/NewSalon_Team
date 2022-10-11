@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">管理画面 予約一覧</div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">予約先店舗名</th>
                                <th scope="col">名前</th>
                                <th scope="col">メールアドレス</th>
                                <th scope="col">TEL</th>
                                <th scope="col">予約日</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($appoints as $appoint)
                            <tr>
                                <td>{{ $appoint->id }}</td>
                                <td>{{ $shops[$appoint->shop_id] }}</td>
                                <td>{{ $appoint->name }}</td>
                                <td>{{ $appoint->email }}</td>
                                <td>{{ $appoint->tel }}</td>
                                <td>{{ $appoint->appoint_at}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endsection
