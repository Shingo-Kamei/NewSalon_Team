@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">管理画面 店舗一覧</div>
                <div class="card-body">
                    <a class="btn btn-primary" href="/admin/shop/create" role="button">新規登録</a>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <!-- <th scope="col">ID</th> -->
                                <th scope="col">店舗名</th>
                                <th scope="col">登録日</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($shops as $shop)
                            <tr>
                                <!-- <td>{{ $shop->id }}</td> -->
                                <td>{{ $shop->shop_name }}</td>
                                <td>{{ $shop->created_at->format('Y-m-d H:i:s') }}</td>
                                <td>
                                    <a class="btn btn-primary" href="/admin/shop/edit/{{ $shop->id }}" role="button">編集</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
