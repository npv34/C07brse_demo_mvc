<?php

namespace model;

use PDO;

class BookModel
{
    public PDO $conn;

    public function __construct()
    {
        $db = new DBConnect();
        $this->conn = $db->connect();
    }

    function getAllBooks() {
        $sql = "SELECT * FROM book";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function remove($id) {
        $sql = "DELETE FROM book WHERE  id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
    }

    function addBook($name, $price, $total) {
        $sql = "INSERT INTO book(name,price,total) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $name);
        $stmt->bindParam(2, $price);
        $stmt->bindParam(3, $total);
        $stmt->execute();
    }

    function findBookById($id) {
        $sql = "SELECT * FROM book WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    function updateBook($name, $price, $total, $id) {
        $sql = "UPDATE book SET name =?, price = ?, total = ? WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $name);
        $stmt->bindParam(2, $price);
        $stmt->bindParam(3, $total);
        $stmt->bindParam(4, $id);
        $stmt->execute();
    }
}