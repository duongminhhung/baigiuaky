<?php
class Book
{

    function __construct()
    {
    }

    static function all()
    {
        $list = [];
        $db = DB::getInstance();
        $req = $db->query('SELECT * FROM Sach');
        return $req->fetchAll();
    }
}
