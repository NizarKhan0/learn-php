<?php

namespace Framework;

use PDO;
use PDOException;
use Exception;

class Database
{
    public $conn;

    /**
     * Constructor for Database class
     * 
     * @param array $config
     */

    public function __construct($config)
    {
        $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset=utf8";

        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,

            // tu nak access kena dalam array contoh $job[title]
            // PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,

            //nak access dia guna object $job->title
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
        ];

        try {
            $this->conn = new PDO($dsn, $config['username'], $config['password'], $options);

            // echo "Connected successfully";
        } catch (PDOException $e) {
            throw new Exception("Database connection failed: " . $e->getMessage());
        }
    }


    /**
     * Query the database
     * 
     * @param string $query
     * 
     * @return PDOStatement
     * @throws PDOException
     */

    public function query($query, $params = [])
    {
        try {

            $sth = $this->conn->prepare($query);

            //bind name params utk prepared statement dan boleh guna bindvalue
            foreach ($params as $param => $value) {
                $sth->bindValue(':' . $param, $value);
            }
            
            $sth->execute();
            return $sth;

        } catch (PDOException $e) {
            throw new Exception("Query failed to execute: " . $e->getMessage());
        }
    }

}
?>