<?php

class Database
{

    private $dsn = "mysql:dbname=entreprise;host=localhost;charset=UTF8";
    private $login = "root";
    private $password = "root";


    private $pdo;


    public function __construct()
    {

        $this->pdo = new PDO($this->dsn, $this->login, $this->password);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }



    public function query($query, $params = false)
    {

        if ($params) {

            $req = $this->pdo->prepare($query);
            $req->execute($params);
        } else {

            $req = $this->pdo->query($query);
        }

        return $req;
    }
}
