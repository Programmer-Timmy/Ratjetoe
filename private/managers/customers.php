<?php

class customers
{
    public static function getAll()
    {
        global $conn;
        $stmt = $conn->prepare("select customer.id,firstname,lastname,email,premium_member,name as country, (SELECT count(*) FROM customer_game where customer.id = customer_game.customer_id) as games  FROM customer join country on customer.country_id=country.id");

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function add($firstname, $lastname, $email, $countryId, $premiumMember = 0)
    {
        global $conn;
        $stmt = $conn->prepare("INSERT INTO customer (firstname, lastname, email, premium_member, country_id) VALUES (?,?,?,?,?)");
        $stmt->bindValue(1, htmlspecialchars($firstname));
        $stmt->bindValue(2, htmlspecialchars($lastname));
        $stmt->bindValue(3, htmlspecialchars($email));
        $stmt->bindValue(4, $premiumMember);
        $stmt->bindValue(5, $countryId);


        $stmt->execute();
    }

    public static function get($id)
    {
        global $conn;
        $stmt = $conn->prepare("select firstname,lastname,email,premium_member,country_id FROM customer where customer.id = ?");
        $stmt->bindValue(1, $id);

        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function delete($id)
    {
        games::delete('customer_id', $id);

        global $conn;
        $stmt = $conn->prepare("DELETE FROM customer WHERE id= ?");
        $stmt->bindValue(1, $id);

        $stmt->execute();

    }
}
