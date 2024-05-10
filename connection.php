<?php
class DB
{
    private static $instance = NULl;
    public static function getInstance() {
        if (!isset(self::$instance)) {
            try {
                self::$instance = new PDO('mysql:host=mysql-c6a2cf1-hung-bc73.l.aivencloud.com;port=27749;dbname=QUANLYSACH', 'avnadmin', 'AVNS_hwjcNT7pe2zI8MEJNUg');
                self::$instance->exec("SET NAMES 'utf8'");
            } catch (PDOException $ex) {
                die($ex->getMessage());
            }
        }
        return self::$instance;
    }
}
