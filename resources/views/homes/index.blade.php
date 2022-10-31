<<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>@yield('title') -サイト名</title>
    </head>



@extends('layouts.app')

@section('content')

<h1>床屋さん検索さん</h1>
<h4>一覧</h4>

<form action="" method="post">
	<input type="search" name="q" value="" placeholder="キーワード"><input type="submit" name="btn_search" value="検索" class="btn btn-info" >
</form>

<style>
    table td{
        background: #eee;
    }
table tr:nth-child(odd) td {
    background: #fff;
}
</style>

<table class="table table-striped">
    <thead>
        <tr>
            <th style ="width:12%">店番</th>
            <th style ="width:16%">店名</th>
            <th style ="width:18%">住所</th>
            <th style ="width:38%">特長</th>
           
        </tr>
    </thead>
<!--本体-->
<tbody>
    
<tr>
<!--店舗名-->
    <th>1</th>
    <th>根本理容店</th>
    <th>茨城県茨城市１</th>
    <th>オシャレ坊主</th>
      
    <th> <a href =" http://127.0.0.1:8000/admin/shop/"><input type="submit" value="詳細" class="btn btn-info"></a> </th>
   
</tr>

<!--店舗名-->
<tr>
    <th>2</th>
    <th>サロン根本</th>
    <th>茨城県茨城市１－２－５</th>
    <th>パーマ得意</th>
    <th> <a href =" http://127.0.0.1:8000/appoint/"><input type="submit" value="詳細" class="btn btn-info"></a> </th>
    
</tr>


<!--店舗名-->
<tr>
   <th>3</th>
   <th>サロン 和</th>
   <th>茨城県茨城市１－２－４</th>
   <th></th>
   <th> <a href =" http://127.0.0.1:8000/appoint/create"><input type="submit" value="詳細" class="btn btn-info"></a> </th>
</tr>

<!--店舗名-->
<tr>
    <th>4</th>
    <th>サロン増田</th>
    <th>茨城県茨城市１－２－６</th>
    <th>オシャレ坊主得意です。髭剃りはもちろん、エステも行っています。ぜひ、一度お越しください</th>
    <th> <a href =" http://127.0.0.1:8000/appoints/edit/ "><input type="submit" value="詳細" class="btn btn-info"></a> </th>
</tr>

<!--店舗名-->
<tr>
    <th>5</th>
    <th>サロンABC</th>
    <th>茨城県茨城市１－３－５</th>
    <th></th>
    <th> <a href =" http://127.0.0.1:8000/edit/1 "><input type="submit" value="詳細" class="btn btn-info"></a> </th>
</tr>
</tbody>
</table>


@endsection
