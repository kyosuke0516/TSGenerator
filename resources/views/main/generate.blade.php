@extends('layouts.app')

@section('title', 'generate')

@section('content')
<?php
$name = array(
  'dammy',
);
$id = array(
  '0',
);
for($i = 0; $i < count($items); $i++){
  array_push($name, $items[$i]->name);
  array_push($id, $items[$i]->id);
}
$count = count($items);
?>
 <div>
  <table class="flex_center m-b-md m-t-md">
    <tr>
      <td>
        <select id="adduser">
          <option value="dammy">-----</option>
        </select>
      </td>
      <td>
        <button type="button" onclick="selectBtn_click()">select</button>
      </td>
    </tr>
  </table>
  <h2 class="content">SelectUser</h2>
    <div class="flex_center">
    <form id = "sender" action="{{ url('/generate') }}" method="post">
      {{csrf_field()}}
      <ul id = 'userlist' class="p-l">

      </ul>
      <input id = "generateBtn" type="button" value="generate">
      </form>
      </div>
   </div>
  <script>
    var idTag = document.getElementById('adduser');
    var name = @json($name);
    var names = name.split(',');
    var id = @json($id);
    var count = @json($count);
    for(var i = 0; i < count; i++){
      var option = document.createElement('option');
      option.setAttribute('value', names[i+1]);
      option.setAttribute('name', id[i+1]);
      option.innerHTML = names[i+1];
      idTag.appendChild(option);
    }
  </script>
  <!-- jsファイルの呼び出し -->
<script type="text/javascript" src="js/extension.js"></script>
@endsection
