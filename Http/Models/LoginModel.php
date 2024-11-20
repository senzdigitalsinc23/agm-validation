<?php

namespace Http\Models;

use Core\Model;
use Core\Validator;

class LoginModel extends Model
{  
    public function validate($data) {
        if (! Validator::string($data['username'], 1, 50) || ! Validator::string($data['password'], 5, INF)){
            $this->errors['username'] = "Invalid username or password";
        }

        return empty($this->errors);
    }

}