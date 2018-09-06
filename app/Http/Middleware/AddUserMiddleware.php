<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class AddUserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      //name配列のリネーム
      $param_Name = [
        'name' => $request->name,
      ];

      //曜日スケジュール配列の初期化
      $param_Sun = $this->init_param($request->name);
      $param_Mon = $this->init_param($request->name);
      $param_Tues = $this->init_param($request->name);
      $param_Wed = $this->init_param($request->name);
      $param_Thurs = $this->init_param($request->name);
      $param_Fri = $this->init_param($request->name);
      $param_Sat = $this->init_param($request->name);
      //inputを元にスケジュールを作成
      $param_Sun = $this->create_schedule($param_Sun, $request->Sun);
      $param_Mon = $this->create_schedule($param_Mon, $request->Mon);
      $param_Tues = $this->create_schedule($param_Tues, $request->Tues);
      $param_Wed = $this->create_schedule($param_Wed, $request->Wed);
      $param_Thurs = $this->create_schedule($param_Thurs, $request->Thurs);
      $param_Fri = $this->create_schedule($param_Fri, $request->Fri);
      $param_Sat = $this->create_schedule($param_Sat, $request->Sat);
      //作成したスケジュールを$request配列に追加
      $request->merge([
        'param_Name' => $param_Name,
        'param_Sun' => $param_Sun,
        'param_Mon' => $param_Mon,
        'param_Tues' => $param_Tues,
        'param_Wed' => $param_Wed,
        'param_Thurs' => $param_Thurs,
        'param_Fri' => $param_Fri,
        'param_Sat' => $param_Sat,
      ]);

  /*    $values = DB::table('people')->get();
      $count = count($values);
      $request->merge([
        'count' => $count,
      ]);
      for ($i = 0; $i < count($values); $i++) {
        $request->merge([
          'check_Name'.($i+1) => $values[$i]->name,
        ]);
      }
*/
        return $next($request);
    }

    //曜日スケジュール配列初期化関数
    public function init_param($name){
      $param = [
        'name' => $name,
        'beforeClass' => 0,
        'firstPeriod' => 0,
        'secondPeriod' => 0,
        'lunchtime' => 0,
        'thirdPeriod' => 0,
        'fourthPeriod' => 0,
        'fifthPeriod' => 0,
        'afterClass1' => 0,
        'afterClass2' => 0,
      ];
      return $param;
    }

    //曜日スケジュール作成関数
    public function create_schedule($param, $day){
      $day_Name = array(
        0 => 'beforeClass',
        1 => 'firstPeriod',
        2 => 'secondPeriod',
        3 => 'lunchtime',
        4 => 'thirdPeriod',
        5 => 'fourthPeriod',
        6 => 'fifthPeriod',
        7 => 'afterClass1',
        8 => 'afterClass2',
      );
      for($i = 0; $i < count($day); $i++){
        $param[$day_Name[$day[$i]-1]]++;
      }

      return $param;
    }
}
