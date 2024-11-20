<?php

namespace Http\Models;

use Core\Model;
use Core\Validator;

class ResetPassModel extends Model
{  
    public function validate($data) {
        if ( ! Validator::string($data['password'], 1, 50) || ! Validator::string($data['password'], 5, INF)){
            $this->errors['password'] = "Invalid username or password";
        }

        return empty($this->errors);
    }

}