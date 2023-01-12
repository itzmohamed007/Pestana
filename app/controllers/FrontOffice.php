<?php
  class FrontOffice extends Controller {
    // UI pages
    public function home(){
      $this->view('pages/home');
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
      
      if(isset($_POST['suite_type'])){
        $suite_type = $_POST['suite_type'];
      }
      
      $object = $this->model('Chambre');
      $rows = $object->roomsSearch($room_type, $suite_type);

      $this->view('pages/rooms', $rows);
    }

    public function guests($id){
      // part 1: send the previous reservation data to the specified table in the database
      $date_de = $_SESSION['data']['date_debut'];
      $date_a = $_SESSION['data']['date_fin'];
      $clientId = $_SESSION['client'];

      $object = $this->model('Chambre');
      $object->booking($id, $date_de, $date_a, $clientId);

      // part 2: getting the guests data from the dynamique form
      if(isset($_POST['reserve'])){
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

    public function creation(){
      $this->view('forms/create');
    }
    public function modification(){
      $this->view('forms/modification');
    }
  }