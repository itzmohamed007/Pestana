<?php
  class FrontOffice extends Controller {
    // UI pages
    public function home(){
      $this->view('pages/home');
    }

    // client space
    public function clientSpace(){
      $object = $this->model('chambre');
      $rooms = $object->reservationData();

      if(mysqli_num_rows($rooms) > 0){
        $this->view('pages/clientSpace', $rooms);
      } else {
        header('location: reservation');
      }
    }

    // confirmation du type de modification
    public function Confirmation($idReservation){
      // putting reservation id into sesstion:
      $_SESSION['idReservation'] = $idReservation;

      $this->view('forms/confirmation');
    }

    // updating date page
    public function modificationDate(){
      if(isset($_POST['modify'])){
        $reservationId = $_SESSION['idReservation'];

        // putting new dates into variables
        $dateDebut = $_POST['dateDebut'];
        $dateFin = $_POST['dateFin'];

        // calling update function
        $object = $this->model('Chambre');
        $result = $object->modificationDate($dateDebut, $dateFin, $reservationId);

        if($result) {
          header('location: clientSpace');
        } else {
          die('modification failed');
        }
      }

      $this->view('forms/modificationDate');
    }

    // updating full reservation
    public function modificationTotal(){
      $object = $this->model('Chambre');
      // deleting the previous reservation
      $idReservation = $_SESSION['idReservation'];
      $result = $object->deleteReservation($idReservation);

      if($result){
        header('location: reservation');
      } else {
        die('process failed');
      }
    }

    // deleting reservation
    public function deleteReservation($reservationId){
      $object = $this->model('Chambre');
      $result = $object->deleteReservation($reservationId);

      if($result){
        header('location: ../../');
      } else {
        die('operation failed');
      }
    }

    // FORMS pages
    public function authentification(){
      $this->view('forms/authentification');
      if(isset($_POST['submit'])){
        $Uname = $_POST["name"];
        $Uemail = $_POST["email"];
        $Upass = $_POST["password"];
        $Uphone = $_POST["phone"];

        // hashing password
        $Upass = password_hash($Upass, PASSWORD_DEFAULT);

        $object = $this->model('Client');
        $querry = $object->signUp($Uname, $Uemail, $Upass, $Uphone);

        if($querry == true){
          $_SESSION["client"] = $Uemail;

          header('location: login');
        } else {
          echo 'error';
        }
      }
    }
    
    public function login(){
      $this->view('forms/login');

      if(isset($_POST['submit'])){
        $Uemail = $_POST['email'];
        $Upass = $_POST['password'];
        
        $object = $this->model('Client');
        $clientData = $object->signIn($Uemail);
        $storedPassword = $clientData['password'];
        
        if(password_verify($Upass, $storedPassword)){
          $_SESSION["client"] = $clientData['id'];
          header('location: reservation');
        } else {
          echo 'error';
        }
      }
    }

    public function logout(){
      session_destroy();
      header("location: ../");
    }

    // public function reservation($querry){
    public function reservation(){
      // checking is the client is loged in
      $object = $this->model('Client');
      if(empty($_SESSION["client"])){
        header('location: authentification'); 
      }

      $this->view('forms/reservation');  
    }

    public function rooms(){
      // step 1: getting reservation informations
      $date_de = $_POST['date_de'];
      $date_a = $_POST['date_a'];

      // putting reservation data into session
      $reservationData = [
        'date_debut' => $date_de,
        'date_fin' => $date_a
      ];

      $_SESSION['data'] = $reservationData;
      
      // step 2: displaying rooms
      $room_type = $_POST['room_type'];
      $suite_type = 'null';

      $_SESSION['room'] = $room_type;

      if(isset($_POST['suite_type'])){
        $suite_type = $_POST['suite_type'];
      }
      
      $object = $this->model('Chambre');
      $rows = $object->roomsSearch($room_type, $suite_type, $date_de, $date_a);

      $this->view('pages/rooms', $rows);
    }

    public function guests($id){
      if(isset($_POST['reserve'])){
        // part 1: send the previous reservation data to the specified table in the database
        $date_de = $_SESSION['data']['date_debut'];
        $date_a = $_SESSION['data']['date_fin'];
        $clientId = $_SESSION['client'];

        $object = $this->model('Chambre');
        $object->booking($id, $date_de, $date_a, $clientId);

        // part 2: getting the guests data from the dynamique form
        $count = $_POST['count'];

        $nom = [];
        $prenom = [];
        $naissance = [];

        for($i = 1; $i <= $count; $i++){
          $nom[$i] = $_POST["nom$i"];
          $prenom[$i] = $_POST["prenom$i"];
          $naissance[$i] = $_POST["naissance$i"];
        }

        $reservationId = $object->latestReservation();

        $result = $object->addGuests($reservationId, $count, $nom, $prenom, $naissance);

        if(!$result){
          die('eroor ya rbi salama');
        } else {
        header('location: ../../');
        }
      }
      $this->view('forms/guests');
    }
  }