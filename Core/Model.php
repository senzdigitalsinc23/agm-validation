<?php

namespace Core;
class Model extends Database 
{
    protected $db;
    public $errors;
    protected $select;
    protected $from;
    protected $where;
    protected $limit;
    protected $leftJoin;
    protected $and;
    protected $or;
    protected $count;
    protected $order_by;
    public $buildQuery = [];

    public function __construct() {
        $this->db = App::resolve(Database::class);
    }

    public function select(...$columns) {

        if (empty($columns)) {
            $this->select = "SELECT * ";
        }else {
            $this->select = "SELECT ";
            foreach ($columns as $col) {
                $this->select .= $col . ", ";
            }
        }

        $this->buildQuery[] = rtrim($this->select, ', ');

        return $this;
    }

    public function from($table) {
        $this->from = " FROM $table";

        $this->buildQuery[] = $this->from;

        return $this;
    }

    public function where($cond1, $operator, $acceptBrace = '') {
        $this->where = "WHERE $acceptBrace$cond1 $operator :$cond1";

        //echo "$cond1 $operator <br>";

        $this->buildQuery[] = $this->where;

        //dd($this->buildQuery);

        return $this;
    }

    public function leftJoin($table, $column, $on) {
        $this->leftJoin = "LEFT JOIN $table ON $column = $on";

        $this->buildQuery[] = $this->leftJoin;

        //dd($this->buildQuery);

        return $this;
    }

    public function count($column) {
        $this->count = "SELECT count($column)";

        $this->buildQuery[] = $this->count;

        return $this;
    }

    public function limit($limit) {
        $this->limit = "LIMIT $limit";

        $this->buildQuery[] = $this->limit;

        //dd($this->buildQuery);

        return $this;
    }

    public function and($key, $cond, $acceptBrace = '')  {
        $this->and = "AND $key $cond :$key$acceptBrace";

        $this->buildQuery[] = $this->and;

        return $this;
    }

    public function or($key, $cond, $acceptBrace = '')  {
        $this->or = "OR $key $cond :$key$acceptBrace";

        $this->buildQuery[] = $this->or;

        //dd($this->buildQuery);

        return $this;
    }
    
    public function fetch($data = []) {
        //dd($this->buildQuery);

        $sql = implode(' ', $this->buildQuery);
        //dd($sql);
        $query = $this->db->query($sql, $data);

        return $query;
    }

    public function orderBy($column, $cond = 'ASC') {
        $this->order_by = "ORDER BY $column $cond";

        $this->buildQuery[] = $this->order_by;

        //dd($this->buildQuery);

        return $this;
    }

    public function insert($table, $values = []) {
        $keys = array_keys($values);
        $placeholders = implode(',:', $keys);
        $keys = implode(',', $keys);

        $this->db->query("INSERT INTO `$table` ($keys) VALUES (:$placeholders)", $values);
    }

    public function writeQuery($query) {
        $this->db->query($query);
    }

    public function truncate($table){
        $this->db->query("TRUNCATE $table");
    }

    public function remove($table, $data = []) {
        $key = array_keys($data)[0];

        //dd($data);

        $this->db->query("DELETE FROM $table WHERE $key = :$key", $data);
    }

    public function update($table, $keys = [], $id = '') {

        //dd($keys);
        $data = $keys;

        $keys = array_keys($keys);
        $values = implode(',:', $keys);
        //$keys = implode("={$values},", $keys);

        //dd($values);

        $keypairs = '';

        foreach ($keys as $key) {
            $keypairs .= $key . " = :$key,";
        }

        $keypairs = trim($keypairs, ',');

        //dd($data);

        $this->db->query("UPDATE `$table` SET  $keypairs WHERE user_id = :user_id", $data);
    }


    public function error($message) {
        $this->errors['username'] = $message;
    }
}
