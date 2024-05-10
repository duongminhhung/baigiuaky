<?php
class User
{
    function __construct()
    {
    }

    static function login($data)
    {
        $username = $data['username'];
        $password = $data['password'];
        $db = DB::getInstance();
        $stmt = $db->prepare("SELECT * FROM User WHERE TenUser = :username AND MatKhau = :password");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            $_SESSION['username'] = $username;
            return true;
        } else {
           return false;
        }
    }

}
