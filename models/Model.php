<?php
class Model
{
    protected $db;

    public function __construct()
    {
        $this->db = DB::db_connect();
    }

    public function query($query)
    {
        $result = mysqli_query($this->db, $query);
        return $result;
    }
}