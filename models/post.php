<?php
class Post
{
    public $id;
    public $title;
    public $content;

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
