<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Validator;

class MasterController extends Controller
{
    //トップページ
    public function TopPage(){
      return view('main.top');
    }

    public function Home(){
      return view('home');
    }

    //ユーザー登録ページ
    public function Schedule(){
      return view('main.add');
    }

    //ログインページ
    public function Login(Request $request){
      $user = Auth::user();

      return view('main.login', ['user' => $user]);
    }

    //ユーザー登録処理
    public function UpdateTable(Request $request){
      //DB::table('people')->insert($request->param_Name);
      DB::table('Sun')->where('name',Auth::user()->name)->update($request->param_Sun);
      DB::table('Mon')->where('name',Auth::user()->name)->update($request->param_Mon);
      DB::table('Tues')->where('name',Auth::user()->name)->update($request->param_Tues);
      DB::table('Wed')->where('name',Auth::user()->name)->update($request->param_Wed);
      DB::table('Thurs')->where('name',Auth::user()->name)->update($request->param_Thurs);
      DB::table('Fri')->where('name',Auth::user()->name)->update($request->param_Fri);
      DB::table('Sat')->where('name',Auth::user()->name)->update($request->param_Sat);
      $param = [
        'Sun' => $request->param_Sun,
        'Mon' => $request->param_Mon,
        'Tues' => $request->param_Tues,
        'Wed' => $request->param_Wed,
        'Thurs' => $request->param_Thurs,
        'Fri' => $request->param_Fri,
        'Sat' => $request->param_Sat,
      ];
      return view('main.preview', $param);
    }

    //メンバー選択ページ
    public function Generate(){
      $item = DB::table('users')->get();

      return view('main.generate', ['items' => $item]);
    }

    //スケジュール生成ページ
    public function TimeTable(Request $request){

      $timetable = [
        'timeTableSun' => $request->timeTableSun,
        'timeTableMon' => $request->timeTableMon,
        'timeTableTues' => $request->timeTableTues,
        'timeTableWed' => $request->timeTableWed,
        'timeTableThurs' => $request->timeTableThurs,
        'timeTableFri' => $request->timeTableFri,
        'timeTableSat' => $request->timeTableSat,
      ];
      return view('main.result', $timetable);
    }
}
