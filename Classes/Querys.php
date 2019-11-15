<?php

class Querys
{
    private $pdo;
    
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getUserByEmail($email)
    {
        $query = $this->pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
        $query->bindValue(':email', $email);
        $query->execute();
        $user = $query->fetch(PDO::FETCH_ASSOC);

        return $user;
    }
    
    public function deleteUser($idUser)
    {
        $query = $this->pdo->prepare("DELETE from usuarios where usuarios.id = :id");
        $query->bindValue(':id', $idUser);
        $query->execute();
    }
    
    public function updateUser($idUser)
    {
        $query = $this->pdo->prepare("SELECT usuarios.id, usuarios.name, usuarios.email, usuarios.role from usuarios where usuarios.id = '$idUser'");
        $query->execute();
        $usermodify = $query->fetch(PDO::FETCH_ASSOC);
        return $usermodify;
    }

    public function registerUser(User $user)
    {
        $name = $user->getName();
        $lastname = $user->getLastname();
        $email = $user->getEmail();
        $nickname = $user->getNickname();
        $password = HashPassword::hash($user->getPassword());
        
        $stmt = $this->pdo->prepare("INSERT INTO usuarios (name, last_name, nickname, email, password) VALUES (:name, :lastname, :nickname, :email, :password)");
        
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':lastname', $lastname, PDO::PARAM_STR);
        $stmt->bindParam(':nickname', $nickname, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);
        
        $stmt->execute();
    }

    public function getProducts()
    {
        $query = $this->pdo->prepare("SELECT * FROM productos");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
}
