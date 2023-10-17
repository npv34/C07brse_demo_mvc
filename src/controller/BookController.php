<?php
namespace controller;
use model\BookModel;

class BookController
{
    public $bookModel;

    public function __construct()
    {
        $this->bookModel = new BookModel();
    }

    function showPageBookList() {
        $books = $this->bookModel->getAllBooks();
        include_once "./src/view/books/index.php";
    }

    function deleteBook($id) {
        $this->bookModel->remove($id);
        header("location: index.php?page=books&action=show-list");
    }

    function showPageFormAdd()
    {
        include_once "./src/view/books/add.php";
    }

    function showPageFormEdit($id)
    {
        $book = $this->bookModel->findBookById($id);
        if (!$book) {
            include_once "./src/view/error/404.php";
        } else{
            include_once "./src/view/books/edit.php";
        }
    }

    function storeBook() {
        $name = $_REQUEST['name'];
        $price = $_REQUEST['price'];
        $total = $_REQUEST['total'];
        if (!$name || !$price || !$total) {
            header("location: index.php?page=books&action=create");
        } else {
            $this->bookModel->addBook($name, $price, $total);
            header("location: index.php?page=books&action=show-list");
        }
    }

    function editBook($id) {
        $name = $_REQUEST['name'];
        $price = $_REQUEST['price'];
        $total = $_REQUEST['total'];
        $this->bookModel->updateBook($name, $price, $total, $id);
        header("location: index.php?page=books&action=show-list");
    }
}