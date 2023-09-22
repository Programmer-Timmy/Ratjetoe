<?php

class games
{
    public static function get($customer_id)
    {
        global $conn;
        $stmt = $conn->prepare("select customer_game.id, game.name , platform.name as platform FROM customer_game join game on customer_game.game_id=game.id join platform on game.platform_id=platform.id where customer_id = ?");
        $stmt->bindValue(1, $customer_id);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getAll()
    {
        global $conn;
        $stmt = $conn->prepare("select game.id, game.name , platform.name as platform from game join platform on game.platform_id=platform.id");

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function add($customer_id, $game_id)
    {
        global $conn;
        $stmt = $conn->prepare("INSERT INTO customer_game (customer_id, game_id) VALUES (?,?)");
        $stmt->bindValue(1, $customer_id);
        $stmt->bindValue(2, $game_id);

        $stmt->execute();
    }

    public static function delete($type_id, $id)
    {
        global $conn;
        $stmt = $conn->prepare("DELETE FROM customer_game WHERE $type_id= ?");
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }

    public static function send($id)
    {


        require 'path/to/PHPMailer/src/Exception.php';
        require 'path/to/PHPMailer/src/PHPMailer.php';
        require 'path/to/PHPMailer/src/SMTP.php';
    }
}