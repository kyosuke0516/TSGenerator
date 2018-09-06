@extends('layouts.app')

@section('css')

@endsection
<style>
  tr{
    height: 50px;
  }

</style>
@section('title', 'preview')

@section('content')
<?php
$period = [
  0 => 'beforeClass',
  1 => 'firstPeriod',
  2 => 'secondPeriod',
  3 => 'lunchtime',
  4 => 'thirdPeriod',
  5 => 'fourthPeriod',
  6 => 'fifthPeriod',
  7 => 'afterClass1',
  8 => 'afterClass2',
];
$time = [
  'beforeClass' => '7:50',
  'firstPeriod' => '9:30',
  'secondPeriod' => '11:10',
  'lunchtime' => '12:50',
  'thirdPeriod' => '13:30',
  'fourthPeriod' => '15:10',
  'fifthPeriod' => '16:50',
  'afterClass1' => '18:30',
  'afterClass2' => '20:10',
];
$count = count($time);
 ?>

<table class="flex_center">
  <tr id = "Sun">
    <th>Sun</th>
  </tr>
  <tr id = "Mon">
    <th>Mon</th>
  </tr>
  <tr id = "Tues">
    <th>Tues</th>
  </tr>
  <tr id = "Wed">
    <th>Wed</th>
  </tr>
  <tr id = "Thurs">
    <th>Thurs</th>
  </tr>
  <tr id = "Fri">
    <th>Fri</th>
  </tr>
  <tr id = "Sat">
    <th>Sat</th>
  </tr>
</table>

<script type="text/javascript">
  var sun = @json($Sun);
  var mon = @json($Mon);
  var tues = @json($Tues);
  var wed = @json($Wed);
  var thurs = @json($Thurs);
  var fri = @json($Fri);
  var sat = @json($Sat);
  var period = @json($period);
  var time = @json($time);
  var count = @json($count);

  for(var i = 0; i < count; i++){
    if(sun[period[i]] == 1){
      var tr = document.getElementById('Sun');
      var td = document.createElement('td');
      td.innerHTML = time[period[i]];
      tr.appendChild(td);
    }
    if(mon[period[i]] == 1){
      var tr = document.getElementById('Mon');
      var td = document.createElement('td');
      td.innerHTML = time[period[i]];
      tr.appendChild(td);
    }
    if(tues[period[i]] == 1){
      var tr = document.getElementById('Tues');
      var td = document.createElement('td');
      td.innerHTML = time[period[i]];
      tr.appendChild(td);
    }
    if(wed[period[i]] == 1){
      var tr = document.getElementById('Wed');
      var td = document.createElement('td');
      td.innerHTML = time[period[i]];
      tr.appendChild(td);
    }
    if(thurs[period[i]] == 1){
      var tr = document.getElementById('Thurs');
      var td = document.createElement('td');
      td.innerHTML = time[period[i]];
      tr.appendChild(td);
    }
    if(fri[period[i]] == 1){
      var tr = document.getElementById('Fri');
      var td = document.createElement('td');
      td.innerHTML = time[period[i]];
      tr.appendChild(td);
    }
    if(sat[period[i]] == 1){
      var tr = document.getElementById('Sat');
      var td = document.createElement('td');
      td.innerHTML = time[period[i]];
      tr.appendChild(td);
    }
  }
</script>
@endsection
