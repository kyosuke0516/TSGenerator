<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
      $this->init_schedule('Sun', $data);
      $this->init_schedule('Mon', $data);
      $this->init_schedule('Tues', $data);
      $this->init_schedule('Wed', $data);
      $this->init_schedule('Thurs', $data);
      $this->init_schedule('Fri', $data);
      $this->init_schedule('Sat', $data);
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    protected function init_schedule($day, $data){
      $schedule = [
        'name' => $data['name'],
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
      $this->create_schedule($day, $schedule);
    }

    protected function create_schedule($day, $schedule){
      DB::table($day)->insert($schedule);
    }
}
