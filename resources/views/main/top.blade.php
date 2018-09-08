@extends('layouts.baselayout')

@section('title', 'TTG')

@section('content')
<div class="flex_center position-ref full-height">
  <div class="content">
    <div class="title">
      SoundCommunication
    </div>

    <div class="links">
      <a href="{{ url('/home') }}">user</a>
      <a href="{{ url('/generate') }}">generate</a>
      <a href="{{ url('/generate') }}">add</a>
    </div>
  </div>
</div>
@endsection
