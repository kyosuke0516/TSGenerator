<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if($this->path() == 'adduser'){
          return true;
        }else {
          return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(Request $request)
    {
      $values = DB::table('people')->get();
      $count = count($values);
      $request->merge([
        'count' => $count,
      ]);
      for ($i = 0; $i < count($values); $i++) {
        $request->merge([
          'check_Name'.($i+1) => $values[$i]->name,
        ]);
      }
      $rules = [
        'name' => 'required',
      ];
      for($i = 0; $i < $request->count; $i++){
        $rules['name'] = $rules['name'].'|different:check_Name'.($i+1);
      }
        return $rules;
    }
}
