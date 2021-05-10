<?php
namespace App\Http\Util;

class ErrorValidade{

    
    public static function getError($request,$model){
      
        $validate = validator($request->all(), $model->rules);
        
        if($validate->fails()){
            $value = $validate->errors()->all();
            
            return $value;

        }
        
        return false;
    }
    public static function getErrorRules($request,$rules){
       
        $validate = validator($request->all(), $rules);
        
        if($validate->fails()){
            $value = $validate->errors()->all();
            return $value;

        }
        return false;
    }
}