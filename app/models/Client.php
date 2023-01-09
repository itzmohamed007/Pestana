<?php

class Client {
    private $name;
    private $email;
    private $password;
    private $phone;

    public function signUp($postName, $postEmail, $postPassword, $postPhone){
        $this->name = $postName;
        $this->email = $postEmail;
        $this->password = $postPassword;
        $this->phone = $postPhone;

        // connecting to database
        $object = new Database;
        $connection = $object->connection();

        $stmt = $connection->prepare("INSERT INTO `client`(`name`, `email`, `password`, `phone`) VALUES (?,?,?,?)");
        $stmt->bind_param('ssss', $this->name, $this->email, $this->password, $this->phone);
        $result = $stmt->execute();
        $stmt->close();

        return $result;
    }

    public function signIn($email){
        $object = new Database;
        $connection = $object->connection();

        $stmt = $connection->prepare("SELECT * FROM Client WHERE email = ?");

        // Bind the parameters to the prepared statement
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        $stmt->close();

        return $row;
    }

    public function reservation(){
        $object = new Database;
        $connection = $object->connection();

        $stmt = $connection->prepare("");
        
    }
}