<?php

namespace Core;
class Model extends Database 
{
    protected $db;
    public $errors;
    public function __construct() {
        $this->db = App::resolve(Database::class);
    }

    public function getAll($table = '') {
         $result = $this->db->query("SELECT * FROM {$table}")->get();

        return $result;
    }

    public function find($table = '', $key = '', $value = '') {
        $result = $this->db->query("SELECT * FROM {$table} WHERE $key = :{$key}", [$key => $value])->find();

        return $result;
    }
    
    public function findOrFail($table = '', $key = '', $value = '') {
        $result = $this->db->query("SELECT * FROM {$table} WHERE $key = :{$key}", [$key => $value])->findOrFail();

        return $result;
    }

    public function where($table = '', $key = '', $value = '') {
        $result = $this->db->query("SELECT * FROM {$table} WHERE $key = :{$key}", [$key => $value])->where();

        return $result;
    }

    public function insert($table, $values = []) {
        $keys = array_keys($values);
        $placeholders = implode(',:', $keys);
        $keys = implode(',', $keys);

        $this->db->query("INSERT INTO `$table` ($keys) VALUES (:$placeholders)", $values);
    }

    public function remove($table, $key, $value) {
        $this->db->query("DELETE FROM $table WHERE $key = :$key", ['id' => $value]);
    }

    public function update($table, $keys = []) {

        $keys = array_keys($keys);
        $values = implode(',:', $keys);
        //$keys = implode("={$values},", $keys);

        //dd($keys);
        $keypairs = '';

        foreach ($keys as $key) {
            $keypairs .= $key . " = :$key,";
        }


        $this->db->query("UPDATE $table  SET  `title` = :title, `body` = :body  WHERE id = :id AND user_id = :user_id", [ ]);
    }

    public function error($message) {
        $this->errors['username'] = $message;
    }
}
