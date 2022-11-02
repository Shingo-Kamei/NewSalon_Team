@extends('layouts.app')

@section('content')
<div class="contauner">
    <h1>床屋さん検索さん</h1>
    <h4>一覧</h4>

    <form action="" method="post">
        <input type="search" name="q" value="" placeholder="キーワード"><input type="submit" name="btn_search" value="検索" class="btn btn-info">
    </form>

    <style>
        table td {
            background: #eee;
        }

        table tr:nth-child(odd) td {
            background: #fff;
        }
    </style>

    <table class="table table-striped">
        <thead>
            <tr>
                <th style="width:12%">店番</th>
                <th style="width:16%">店名</th>
                <th style="width:38%">住所</th>
                <th></th>
            </tr>
        </thead>
        <!--本体-->
        <tbody>
            <!--Controllerから渡されたshopのデータをループで分解する-->
            @foreach ($shops as $shop)
            <tr>
                <!--店舗名-->
                <td>{{ $shop->id }}</td>
                <td>{{ $shop->shop_name }}</td>
                <td>{{ $shop->address }}</td>
                <td> <a href="edit/{{$shop->id}}" class="btn btn-info">詳細</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
