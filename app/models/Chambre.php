 <?php
  /*
    * Chambre class 
    * Contains all crud operations 
    */

  class Chambre {  
  // adding room
  public function add($oldLocation, $newLocation, $type, $type_suite, $numero){
    // changing the locations of the image into the new location
    move_uploaded_file($oldLocation, $newLocation);

    $object = new Database;
    $connection = $object->connection();

    $stmt = $connection->prepare("INSERT INTO `room`(`type`, `suite_type`, `numero`, `image`) VALUES (?,?,?,?)");

    // binding parameters
    $stmt->bind_param('ssis', $type, $type_suite, $numero, $newLocation);
    $result = $stmt->execute();
    $stmt->close();

    return $result;
  }

  // updating room
  public function update($id, $oldLocation, $newLocation, $type, $type_suite, $numero){
    // changing the locations of the image into the new location
    move_uploaded_file($oldLocation, $newLocation);

    $object = new Database;
    $connection = $object->connection();

    if(!empty($oldLocation)) {
      $stmt = $connection->prepare("UPDATE `room` SET `type`= ?, `numero`= ?, `image`= ? WHERE `id` = ?");

      $stmt->bind_param('sisi', $type, $numero, $newLocation, $id);
      $result = $stmt->execute();
      $stmt->close();
    } else {
      $stmt = $connection->prepare("UPDATE room SET `type` = ?, `suite_type` = ?, `numero` = ?, `image` = ? WHERE `id` = ?");

      $stmt->bind_param('ssisi', $type, $type_suite, $numero, $newLocation, $id);
      $result = $stmt->execute();
      $stmt->close();
    }

    return $result;
  }

  // deleting room
  public function delete($id){
    $object = new Database;
    $connection = $object->connection();

    $stmt = $connection->prepare("DELETE FROM room WHERE id = ?");
    $stmt->bind_param('i', $id);
    $result = $stmt->execute();

    return $result;
  }


  // reading functions   
  public function readRooms(){
    $object = new Database;
    $connection = $object->connection();

    $stmt = $connection->query("SELECT * FROM room");

    if($stmt){
      return $stmt;
    } else {
      return false;
    }
  }

  // reservation function
  public function booking($date_de, $date_a, $clientId){
    $object = new Database;
    $connection = $object->connection();

    $stmt = $connection->prepare("INSERT INTO `reservation` (`date_debut`, `date_fin`, `id_user`) 
    VALUES (?, ?, ?)
    ");
    
    $stmt->bind_param('ssi', $date_de, $date_a, $clientId);
    $result = $stmt->execute();
    $stmt->close();

    return $result;
  }

  // search functions
  public function roomsSearch($room_type, $suite_type,){
    $object = new Database;
    $connection = $object->connection();

    if($suite_type == 'null'){
      $stmt = $connection->prepare("SELECT room.* FROM room 
      LEFT JOIN reservation ON room.id != reservation.room_id
      WHERE room.type = ? AND room.suite_type IS NULL
      ");

      $stmt->bind_param('s', $room_type);
      $stmt->execute();
      $result = $stmt->get_result();
      $rows = $result->fetch_all(MYSQLI_ASSOC); 
      // MYSQLI_ASSOC constant is used to make the functin fetch_all return an assossiative 
      //array, it we do not include that constant, it will make the array return a normale array index with numbers
      $stmt->close();
    } else {
      $stmt = $connection->prepare("SELECT room.* FROM room 
      LEFT JOIN reservation ON room.id != reservation.room_id
      WHERE room.type = ? AND room.suite_type = ?
      ");

      $stmt->bind_param('ss', $room_type, $suite_type);
      $stmt->execute();
      $result = $stmt->get_result();
      $rows = $result->fetch_all(MYSQLI_ASSOC);
      $stmt->close();
    }

    if (!empty($rows)) {
      return $rows;
    } else {
      return false;
    }
  }     
}