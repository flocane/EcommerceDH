<?php

class MYSQL extends Database
{
    static public function conexion(){
        try {
            $dsn = "mysql:host=localhost;dbname=movies_db;port=3306;charset=utf8mb4";
            $usuario = "root";
            $password = "root";
            $opt = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
            $bd = new PDO($dsn,$usuario,$password,$opt);
            return $bd;
        
        } catch (PDOException $error) {
            echo "<h1>No puedo conectarme a la base de datos :( <br></h1>".$error->getMessage();
            exit;
        }
    }
    
    static public function searchEmail($email,$pdo,$tabla)
    {
        $query = $pdo->prepare("SELECT * FROM $tabla WHERE email = :email");
        $query->bindValue(':email',$email);
        $query->execute();
        $user = $query->fetch(PDO::FETCH_ASSOC);
        return $user;
    }

    static public function saveUser($pdo,$user,$tabla,$avatar)
    {
        $query = $pdo->prepare("INSERT INTO $tabla (name,lastname,email,password,avatar,rol) VALUES (:name,:lastname,:email,:password,:avatar,:rol )");
        $query->bindValue(':name',$user->getname());
        $query->bindValue(':lastname',$user->getlastname());
        $query->bindValue(':email',$user->getEmail());
        $query->bindValue(':password',HashPassword::hash($user->getPassword()));
        $query->bindValue(':avatar',$avatar);
        $query->bindValue('rol',1);
        $query->execute();
    }
    public function read(){

    }
    
    public function update(){

    }

    public function delete(){

    }

    public function save($user)
    {
    
    }
    public function getFile()
    {
        return $this->file;
    }

    public function setFile($file)
    {
        $this->file = $file;
    }
}
