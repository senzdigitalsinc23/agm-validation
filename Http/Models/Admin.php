<?php

namespace Http\Models;

use Core\Model;
use Core\Validator;

class AdminModel extends Model
{  
    public function validate($data) {
        if (! Validator::string($data['username'], 1, 50)){
            $this->errors['username'] = "Invalid username or password";
        }
        /* if (! Validator::email($_POST['email'])){
            $this->errors['email'] = "Note body must be a length of 1 to 255 characters";
        } */
        if (! Validator::string($_POST['password'], 5, INF)){
            $this->errors['username'] = "Invalid username or password";
        }
        return empty($this->errors);
    }
    
}