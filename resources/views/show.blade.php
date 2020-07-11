@extends('layout')

@section('content')
  <h1>{{$shop->name}}</h1>
  <div>
    <p>{{$shop->category->name}}</p>
    <p>{{$shop->address}}</p>
  </div>
  
  <iframe id='map' src='http://maps.google.co.jp/maps?output=embed&t=m&z=18&ll=35.689634,139.692101&amp;q={{$shop->address}}'
    width='100%'
    height='320'
    frameborder='0'>
  </iframe>

  <div>
    <a href="{{route('shop.list')}}">一覧に戻る</a>
    | <a href={{ route('shop.edit', ['id' => $shop->id]) }}>編集</a>
  </div>
  
  <p></p>
  {{Form::open(['method'=>'delete','route'=>['shop.destroy',$shop->id]])}}
    {{Form::submit('削除')}}
  {{Form::close()}}
@endsection