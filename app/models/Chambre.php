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

  // search functions
  public function roomsSearch($date_de, $date_a, $room_type, $suite_type){
    $object = new Database;
    $connection = $object->connection();

    if($suite_type == 'null'){
      $stmt = $connection->prepare("SELECT room.*
      FROM room
      INNER JOIN reservation 
      ON room.id = reservation.id_room
      WHERE (reservation.date_debut NOT BETWEEN '2023-01-06' AND '2023-01-08')
      AND (reservation.date_fin NOT BETWEEN '2023-01-06' AND '2023-01-08')
      AND (room.type = $room_type)
      AND (room.suite_type IS NULL)
      ");

      $stmt->bind_param('sss', $date_de, $date_a, $suite_type);
      $stmt->execute();
      $stmt->bind_result($validRooms);
      $stmt->fetch();
      $stmt->close();
    } else {
      $stmt = $connection->prepare("SELECT room.*
      FROM room
      INNER JOIN reservation 
      ON room.id = reservation.id_room
      WHERE (reservation.date_debut NOT BETWEEN '2023-01-06' AND '2023-01-08')
      AND (reservation.date_fin NOT BETWEEN '2023-01-06' AND '2023-01-08')
      AND (room.type = $room_type)
      AND (room.suite_type IS NULL)
      ");
      
      $stmt->bind_param('ss', $date_de, $date_a);
      $stmt->execute();
      $stmt->bind_result($validRooms);
      $stmt->fetch();
      $stmt->close();
    }

    if($validRooms){
      return $validRooms;
    } else {
      return false;
    }
  }     
}