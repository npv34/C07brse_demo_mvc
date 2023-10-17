<?php

use controller\BookController;

$page = $_REQUEST['page'] ?? null;
$action = $_REQUEST['action'] ?? null;

$bookController = new BookController();
switch ($page) {
    case "books":
        switch ($action) {
            case "show-list":
                $bookController->showPageBookList();
                break;
            case "delete":
                $id = $_REQUEST['id'];
                $bookController->deleteBook($id);
                break;
            case "create":
                $bookController->showPageFormAdd();
                break;
            case "store":
                $bookController->storeBook();
                break;
            case 'update':
                $id = $_REQUEST['id'];
                $bookController->showPageFormEdit($id);
                break;
            case 'edit':
                $id = $_REQUEST['id'];
                $bookController->editBook($id);
                break;
        }
        break;
    case "users":

        break;
}