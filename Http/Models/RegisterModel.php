<?php

namespace Http\Models;

use Core\Model;
use Core\Validator;

class RegisterModel extends Model
{
    public function validate($data) {
        if (! Validator::string($_POST['username'], 1, 50)){
            $this->errors['username'] = "Username must be between 1 to 50 characters";
        }
        /* if (! Validator::email($_POST['email'])){
            $this->errors['email'] = "Note body must be a length of 1 to 255 characters";
        } */
        if (! Validator::string($_POST['password'], 5, INF)){
            $this->errors['password'] = "Password must be atleast 5 characters long";
        }
        if ($_POST['password'] !== $_POST['confirm']){
            $this->errors['confirm'] = "Passwords do not match";
        }
        if ($this->find('users', 'username', $data['username'])) {
            $this->errors['username'] = "Username already in use";
        }
        /* if ($this->find('users', 'email', $data['email'])) {
            $this->errors['email'] = "Email already in use";
        } */

        return empty($this->errors);
    }
    
}