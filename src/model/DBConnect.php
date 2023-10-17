<?php

namespace model;

class DBConnect
{
    private string $dns;
    private string $username;
    private string $password;

    public function __construct()
    {
        $this->dns = "mysql:host=localhost;dbname=library";
        $this->username = "root";
        $this->password = "123456@Abc";
    }

    function connect() {
        try {
            return new \PDO($this->dns, $this->username, $this->password);
        }catch (\Exception $e) {
            echo $e->getMessage();
            die();
        }
    }
}