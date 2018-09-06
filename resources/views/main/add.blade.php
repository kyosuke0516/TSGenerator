@extends('layouts.app')

@section('title', 'update')

@section('content')
<form action="{{ url('/schedule') }}" method="post">
  {{csrf_field()}}
  <table class="m-b-md m-t-md flex_center">
    <tr>
      <th><input type="hidden" name="name" value="{{ Auth::user()->name }}"></th>
    </tr>
  </table>
  <table class="m-b-md flex_center">
    <tr>
      <th width ='50'></th><th width = '50'>Sun</th><th width = '50'>Mon</th><th width = '50'>Tues</th>
      <th width = '50'>wed</th><th width = '50'>Thurs</th><th width = 50>Fri</th><th width = '50'>Sat</th>
    </tr>
    <tr height = "30">
      <th width = '50'>7:50</th>
      <td width = '50'><input type="checkbox" name="Sun[]" value="1"></td>
      <td width = '50'><input type="checkbox" name="Mon[]" value="1"></td>
      <td width = '50'><input type="checkbox" name="Tues[]" value="1"></td>
      <td width = '50'><input type="checkbox" name="Wed[]" value="1"></td>
      <td width = '50'><input type="checkbox" name="Thurs[]" value="1"></td>
      <td width = '50'><input type="checkbox" name="Fri[]" value="1"></td>
      <td width = '50'><input type="checkbox" name="Sat[]" value="1"></td>
    </tr>
    <tr height = "30">
      <th width = '50'>9:30</th>
      <td width = '50'><input type="checkbox" name="Sun[]" value="2"></td>
      <td width = '50'><input type="checkbox" name="Mon[]" value="2"></td>
      <td width = '50'><input type="checkbox" name="Tues[]" value="2"></td>
      <td width = '50'><input type="checkbox" name="Wed[]" value="2"></td>
      <td width = '50'><input type="checkbox" name="Thurs[]" value="2"></td>
      <td width = '50'><input type="checkbox" name="Fri[]" value="2"></td>
      <td width = '50'><input type="checkbox" name="Sat[]" value="2"></td>
    </tr>
    <tr height = "30">
      <th width = '50'>11:10</th>
      <td width = '50'><input type="checkbox" name="Sun[]" value="3"></td>
      <td width = '50'><input type="checkbox" name="Mon[]" value="3"></td>
      <td width = '50'><input type="checkbox" name="Tues[]" value="3"></td>
      <td width = '50'><input type="checkbox" name="Wed[]" value="3"></td>
      <td width = '50'><input type="checkbox" name="Thurs[]" value="3"></td>
      <td width = '50'><input type="checkbox" name="Fri[]" value="3"></td>
      <td width = '50'><input type="checkbox" name="Sat[]" value="3"></td>
    </tr>
    <tr height = "30">
      <th width = '50'>12:50</th>
      <td width = '50'><input type="checkbox" name="Sun[]" value="4"></td>
      <td width = '50'><input type="checkbox" name="Mon[]" value="4"></td>
      <td width = '50'><input type="checkbox" name="Tues[]" value="4"></td>
      <td width = '50'><input type="checkbox" name="Wed[]" value="4"></td>
      <td width = '50'><input type="checkbox" name="Thurs[]" value="4"></td>
      <td width = '50'><input type="checkbox" name="Fri[]" value="4"></td>
      <td width = '50'><input type="checkbox" name="Sat[]" value="4"></td>
    </tr>
    <tr height = "30">
      <th width = '50'>13:30</th>
      <td width = '50'><input type="checkbox" name="Sun[]" value="5"></td>
      <td width = '50'><input type="checkbox" name="Mon[]" value="5"></td>
      <td width = '50'><input type="checkbox" name="Tues[]" value="5"></td>
      <td width = '50'><input type="checkbox" name="Wed[]" value="5"></td>
      <td width = '50'><input type="checkbox" name="Thurs[]" value="5"></td>
      <td width = '50'><input type="checkbox" name="Fri[]" value="5"></td>
      <td width = '50'><input type="checkbox" name="Sat[]" value="5"></td>
    </tr>
    <tr height = "30">
      <th width = '50'>15:10</th>
      <td width = '50'><input type="checkbox" name="Sun[]" value="6"></td>
      <td width = '50'><input type="checkbox" name="Mon[]" value="6"></td>
      <td width = '50'><input type="checkbox" name="Tues[]" value="6"></td>
      <td width = '50'><input type="checkbox" name="Wed[]" value="6"></td>
      <td width = '50'><input type="checkbox" name="Thurs[]" value="6"></td>
      <td width = '50'><input type="checkbox" name="Fri[]" value="6"></td>
      <td width = '50'><input type="checkbox" name="Sat[]" value="6"></td>
    </tr>
    <tr height = "30">
      <th width = '50'>16:50</th>
      <td width = '50'><input type="checkbox" name="Sun[]" value="7"></td>
      <td width = '50'><input type="checkbox" name="Mon[]" value="7"></td>
      <td width = '50'><input type="checkbox" name="Tues[]" value="7"></td>
      <td width = '50'><input type="checkbox" name="Wed[]" value="7"></td>
      <td width = '50'><input type="checkbox" name="Thurs[]" value="7"></td>
      <td width = '50'><input type="checkbox" name="Fri[]" value="7"></td>
      <td width = '50'><input type="checkbox" name="Sat[]" value="7"></td>
    </tr>
    <tr height = "30">
      <th width = '50'>18:30</th>
      <td width = '50'><input type="checkbox" name="Sun[]" value="8"></td>
      <td width = '50'><input type="checkbox" name="Mon[]" value="8"></td>
      <td width = '50'><input type="checkbox" name="Tues[]" value="8"></td>
      <td width = '50'><input type="checkbox" name="Wed[]" value="8"></td>
      <td width = '50'><input type="checkbox" name="Thurs[]" value="8"></td>
      <td width = '50'><input type="checkbox" name="Fri[]" value="8"></td>
      <td width = '50'><input type="checkbox" name="Sat[]" value="8"></td>
    </tr>
    <tr height = "30">
      <th width = '50'>20:10</th>
      <td width = '50'><input type="checkbox" name="Sun[]" value="9"></td>
      <td width = '50'><input type="checkbox" name="Mon[]" value="9"></td>
      <td width = '50'><input type="checkbox" name="Tues[]" value="9"></td>
      <td width = '50'><input type="checkbox" name="Wed[]" value="9"></td>
      <td width = '50'><input type="checkbox" name="Thurs[]" value="9"></td>
      <td width = '50'><input type="checkbox" name="Fri[]" value="9"></td>
      <td width = '50'><input type="checkbox" name="Sat[]" value="9"></td>
    </tr>
  </table>
  <table class="flex_center m-b-md">
    <tr>
      <td><input type="submit" value="UPDATE"></td>
    </tr>
  </table>
</form>
@if($errors->has('name'))
<table class="flex_center">
  <tr>
    <th>ERROR:</th><td>{{$errors->first('name')}}</td>
  </tr>
</table>
@endif
@endsection
