<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\DB;

class TimeTableMiddleware
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
      $name = $request->name;
  /*    $id = [];
      for($i = 0; $i < count($name); $i++){
        $tmp = DB::table('people')->where('name', $name[$i])->first();
        array_push($id, $tmp->id);
      }*/

      $scheduleSun = $this->getSchedule('Sun', $name);
      $scheduleMon = $this->getSchedule('Mon', $name);
      $scheduleTues = $this-> getSchedule('Tues', $name);
      $scheduleWed = $this->getSchedule('Wed', $name);
      $scheduleThurs = $this->getSchedule('Thurs', $name);
      $scheduleFri = $this->getSchedule('Fri', $name);
      $scheduleSat = $this->getSchedule('Sat',$name);

      $timeTableSun = $this->generate_timeTable($scheduleSun);
      $timeTableMon = $this->generate_timeTable($scheduleMon);
      $timeTableTues = $this->generate_timeTable($scheduleTues);
      $timeTableWed = $this->generate_timeTable($scheduleWed);
      $timeTableThurs = $this->generate_timeTable($scheduleThurs);
      $timeTableFri = $this->generate_timeTable($scheduleFri);
      $timeTableSat = $this->generate_timeTable($scheduleSat);

      $request->merge([
        'timeTableSun' => $timeTableSun,
        'timeTableMon' => $timeTableMon,
        'timeTableTues' => $timeTableTues,
        'timeTableWed' => $timeTableWed,
        'timeTableThurs' => $timeTableThurs,
        'timeTableFri' => $timeTableFri,
        'timeTableSat' => $timeTableSat,
      ]);
        return $next($request);
    }

    public function init_timeTable(){
      $timeTable = [
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

      return $timeTable;
    }

    public function getSchedule($day, $name){
      $schedule = [];
      for($i = 0; $i < count($name); $i++){
        $tmp = DB::table($day)->where('name', $name[$i])->first();
        array_push($schedule, $tmp);
      }

      return $schedule;
    }

    public function generate_timeTable($schedule){
      $timetable = $this->init_timeTable();
      $flag_before = true;
      $flag_first = true;
      $flag_second = true;
      $flag_lunch = true;
      $flag_third = true;
      $flag_fourth = true;
      $flag_fifth = true;
      $flag_after1 = true;
      $flag_after2 = true;

      for($i = 1; $i < count($schedule); $i++){
        $tmpScdl1 = $schedule[$i-1];
        $tmpScdl2 = $schedule[$i];
        if($flag_before == true){
          if(($tmpScdl1->beforeClass == 1) && ($tmpScdl2->beforeClass == 1)){
            $timeTable['beforeClass'] = 1;
          }else {
            $timeTable['beforeClass'] = 0;
            $flag_before = false;
          }
        }
        if($flag_first == true){
          if(($tmpScdl1->firstPeriod == 1) && ($tmpScdl2->firstPeriod == 1)){
            $timeTable['firstPeriod'] = 1;
          }else {
            $timeTable['firstPeriod'] = 0;
            $flag_first = false;
          }
        }
        if($flag_second == true){
          if(($tmpScdl1->secondPeriod == 1) && ($tmpScdl2->secondPeriod == 1)){
            $timeTable['secondPeriod'] = 1;
          }else {
            $timeTable['secondPeriod'] = 0;
            $flag_second = false;
          }
        }
        if($flag_lunch == true){
          if(($tmpScdl1->lunchtime == 1) && ($tmpScdl2->lunchtime == 1)){
            $timeTable['lunchtime'] = 1;
          }else {
            $timeTable['lunchtime'] = 0;
            $flag_lunch = false;
          }
        }
        if($flag_third == true){
          if(($tmpScdl1->thirdPeriod == 1) && ($tmpScdl2->thirdPeriod == 1)){
            $timeTable['thirdPeriod'] = 1;
          }else {
            $timeTable['thirdPeriod'] = 0;
            $flag_third = false;
          }
        }
        if($flag_fourth == true){
          if(($tmpScdl1->fourthPeriod == 1) && ($tmpScdl2->fourthPeriod == 1)){
            $timeTable['fourthPeriod'] = 1;
          }else {
            $timeTable['fourthPeriod'] = 0;
            $flag_fourth = false;
          }
        }
        if($flag_fifth == true){
          if(($tmpScdl1->fifthPeriod == 1) && ($tmpScdl2->fifthPeriod == 1)){
            $timeTable['fifthPeriod'] = 1;
          }else {
            $timeTable['fifthPeriod'] = 0;
            $flag_fifth = false;
          }
        }
        if($flag_after1 == true){
          if(($tmpScdl1->afterClass1 == 1) && ($tmpScdl2->afterClass1 == 1)){
            $timeTable['afterClass1'] = 1;
          }else {
            $timeTable['afterClass1'] = 0;
            $flag_after1 = false;
          }
        }
        if($flag_after2 == true){
          if(($tmpScdl1->afterClass2 == 1) && ($tmpScdl2->afterClass2 == 1)){
            $timeTable['afterClass2'] = 1;
          }else {
            $timeTable['afterClass2'] = 0;
            $flag_after2 = false;
          }
        }
      }

      return $timeTable;
    }
}
