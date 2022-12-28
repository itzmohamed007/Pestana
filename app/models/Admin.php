<?php
    /*
     * admin class has access to connection and crud operations
     */

class Admin {
    public function signIn($email){
        $object = new Database;
        $connection = $object->connection();

        $stmt = $connection->prepare("SELECT password FROM admin WHERE email = ?");

        // Bind the parameters to the prepared statement
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $stmt->bind_result($storedPassword);
        $stmt->fetch();

        return $storedPassword;
    }
}