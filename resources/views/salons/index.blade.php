@extends('layouts.app')

@section('content')

<h1>床屋さん検索さん</h1>
<h4>一覧</h4>


<form class="form-inline my-2 my-lg-0 ml-2">
<div class="form-group">
      <input type="search" class="form-control mr-sm-2" name="search"  value="{{request('search')}}" placeholder="キーワードを入力" aria-label="検索...">
      </div>
      <input type="submit" value="検索" class="btn btn-info">
      
  </form>



<style>
    table td{
        background: #eee;
    }
table tr:nth-child(odd) td {
    background: #fff;
}
</style>

<table>
    <thead>
        <tr>
            <th>店番</th>
            <th>店名</th>
            <th>住所</th>
            <th>特長</th>
           
        </tr>
    </thead>
    <tbody>
      
@foreach ($salons as $salon)
<tr>
    <td>{{ $salon->id }}</td>
    <td>{{ $salon->name }}</td>
    <td>{{ $salon->address}}</td>
    <td>{{ $salon->features}}</td>
    <td><input type="submit" value="詳細" class="btn btn-info"></td>
</tr>


@endforeach
</tbody>
</table>


@endsection
