<?php
require_once('controllers/base_controller.php');
require_once('models/book.php');

class BookController extends BaseController
{
    public function index()
    {
        if (empty($_SESSION['username'])) {
            header("Location: ?controllers=login&action=login");
            exit;
        }
        $books = Book::all();
        $this->folder = 'books';
        $data = array('books' => $books);
        $this->render('index', $data);
    }
}
