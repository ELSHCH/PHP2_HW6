<?php
/**
 * Created by PhpStorm.
 * User: shcheki
 * Date: 09.03.2015
 * Time: 09:06
 */

class db {
    private $dbh;
    private $className = 'stdClass';
    public function __construct()
    {
        $this->dbh = new PDO('mysql:dbname=test;host=localhost', 'root', '');
    }
    public function setClassName($className)
    {
        $this->className = $className;
    }
    public function query($sql, $param = [])
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($param);
        return $sth->fetchAll(PDO::FETCH_CLASS, $this->className);
    }
    public function execute($sql, $param = [])
    {
        $sth = $this->dbh->prepare($sql);
        return $sth->execute($param);
    }
    public function lastInsertID()
    {
        return $this->dbh->lastInsertId();
    }
}