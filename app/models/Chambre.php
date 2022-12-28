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

  public function readReservations(){
    $object = new Database;
    $connection = $object->connection();

    $stmt = $connection->prepare("SELECT * FROM reservations");
    $stmt->bind_param('s', "null");
    $stmt->execute();
    $stmt->bind_result($reservations);
    $stmt->fetch();
    $stmt->close();

    return $reservations;
  }     

}