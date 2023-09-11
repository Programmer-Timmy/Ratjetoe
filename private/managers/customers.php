<?php

class customers
{
    public static function getAll(){
        global $conn;
        $stmt = $conn->prepare("select customer.id,firstname,lastname,email,premium_member,name as country, (SELECT count(*) FROM customer_game where customer.id = customer_game.customer_id) as games  FROM customer join country on customer.country_id=country.id");

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}