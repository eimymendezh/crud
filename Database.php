<?php
class Database extends PDO
{
 private $dbname = "eimybase";
 private $host = "149.56.45.137";
 private $user = "postgres";
 private $pass = 'teleco';
 private $port = 5432;
 private $dbh;
 public function __construct()
 {
     try {
         $this->dbh = parent::__construct("pgsql:host=$this->host;port=$this->port;dbname=$this->dbname;user=$this->user;password=$this->pass");
     }
        catch(PDOException $e)
        {
         echo  $e->getMessage();
     }
 }
 public function close()
 {
    	$this->dbh = null;
 }
