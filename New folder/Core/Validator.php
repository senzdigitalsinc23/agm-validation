<?php
namespace Core;

class Validator extends Model
{

    public function __construct() {
        
    }
    public static function string($value, $min = 1, $max = INF) {

        $value = trim($value);

        return strlen($value) >= $min && strlen($value) <= $max;
    }

    public static function email($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public static function exists($table, $key, $value)  {

        if ((new self)->find($table, $key, $value)) {
            
            return true;
        } else
            $model = '';
            return false;
    }

}