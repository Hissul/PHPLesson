<?php

namespace Database;
use PDO;
use  PDOStatement;

class DB
{
    private static DB $instance;
    private PDO $pdo;    

    private function __construct()
    {       

        $conectionString = strtr(
            '%connect%:dbname=%dbname%;host=%host%;port=%port%',
            ['%connect%' => getenv('DATABASE_CONECTION'),
             '%dbname%' => getenv('DATABASE_DB'),
             '%host%' => getenv('DATABASE_HOST'),
             '%port%' => getenv('DATABASE_PORT'),
            ]
        );

        $this->pdo = new PDO($conectionString, getenv('DATABASE_USERNAME'), getenv('DATABASE_PASSWORD'));
    }


    public static function getInstance(): self
    {
        if(!isset(self::$instance)){
            self::$instance = new self();
        }

        return self::$instance;
    }


    public function query(string $sql) : PDOStatement
    {
        return $this->pdo->query($sql, PDO::FETCH_ASSOC);
    }

    public function getRowByClass(string $sql, string $class) : array
    {
        $result = $this->pdo->query($sql);
        $result->setFetchMode(PDO::FETCH_CLASS, $class);

        $list = [];

        foreach($result as $item){
            $list[] = $item;
        }

        return $list;
    }

}