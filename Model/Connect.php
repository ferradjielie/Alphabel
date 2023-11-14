<?php  

namespace Model;

abstract class Connect {
    const HOST = "localhost";
    const DB = "alphabel";
    const USER = "root";
    const PASS = "saucebrazil52775!";

    public static function seConnecter () {
        try {
            return new \PDO(
                "mysql:host=".self::HOST.";dbname=".self::DB. ";charset=utf8", self::USER, self::PASS);
            
        } catch (\PDOException $ex) {
            return $ex-> getMessage();
        }
    }
}