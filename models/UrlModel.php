<?php

class UrlModel extends Model
{
    public function create_url($url, $short, $date)
    {
        $query = "INSERT INTO `urls` (url, short, time_delete) VALUES ('$url', '$short', '$date');";
        return $this->query($query);
    }

    public function get_url($short)
    {
        $query = "SELECT * FROM `urls` WHERE short='$short';";
        return $this->query($query);
    }
}