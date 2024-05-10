<?php
require_once('controllers/base_controller.php');

class PagesController extends BaseController
{
    function __construct()
    {
        $this->folder = 'pages';
    }

    public function home()
    {
        if (isset($_SESSION['username'])) {
            header("Location: ?controllers=book");
        } else {
            header("Location: ?controllers=login&action=login");
            exit;
        }
    }

    public function error()
    {
        $this->render('error');
    }
}
