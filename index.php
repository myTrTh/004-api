<?php

require_once 'connect.php';

class User
{
    private $id;
    private $username;

    public function getId()
    {
        return $this->id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }
}

$sql = "CREATE TABLE IF NOT EXISTS `users` (`id` INT(11) NOT NULL AUTO_INCREMENT, `username` VARCHAR(32) NOT NULL, PRIMARY KEY(id))";

$conn->query($sql);

//$sql = "SELECT id, username FROM users WHERE id = :id";
//$stmt = $conn->prepare($sql);
//$stmt->execute(['id' => 1]);
//$stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
//
//$user = $stmt->fetch();
//
//echo $user->getId();
//echo '<br>';
//echo $user->getUsername();
//
//
//$new_user = new User();
//$new_user->setUsername('Max');
//
//$sql = "INSERT INTO users (username) VALUES (':username')";
//$stmt = $conn->prepare($sql);
//$stmt->execute(['username' => $new_user->getUsername()]);
//
//echo $stmt->lastInsertId();