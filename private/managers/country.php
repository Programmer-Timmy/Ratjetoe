<?php

class country
{
    public static function getAll(){
        global $conn;
        $stmt = $conn->prepare("select * FROM country");

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}