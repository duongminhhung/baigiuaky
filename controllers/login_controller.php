<?php
require_once('controllers/base_controller.php');
require_once('models/user.php');

class LoginController extends BaseController
{
    function __construct()
    {
        $this->folder = 'auth';
    }

    public function login()
    {
        if (isset($_SESSION['username'])) {
            header("Location: ?controllers=book");
            exit;
        }
        $this->render('login');
    }

    public function store_login(){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $data['username'] = $_POST['username'];
            $data['password'] = $_POST['password'];
            $check = User::login($data);
            if($check){
                header("Location: ?controllers=book");
            }else{
                header("Location: ?controllers=login&action=login");
            }
        }
    }
}
