@extends('layouts.baselayout')

@section('title', 'login')

@section('content')
  @if(Auth::check())
    <p>User: {{$user->name.'('.$user->email.')'}}</p>
    <a href="/login">ログイン</a>|<a href="/register">登録</a>
  @else
    <p>※ログインしていません。(<a href="/login">ログイン</a>|<a href="/register">登録</a>)</p>
  @endif
@endsection
