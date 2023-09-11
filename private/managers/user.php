<?php

class user
{

    public static function login($email, $password){
        global $conn;
        $stmt = $conn->prepare("select password_hash, id FROM user WHERE email = ?");
        $stmt->bindValue(1, $email);

        $stmt->execute();

        $user_data =$stmt->fetch(PDO::FETCH_ASSOC);

        if(isset($user_data)){
            if(password_verify($password, $user_data['password_hash'])){
                $_SESSION['user'] = $user_data['id'];
                header('location: customer/');

            }else{

            }
        }else{

        }
    }
}