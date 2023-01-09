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
          session_start();
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
          session_start();
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
      session_start();
      if(empty($_SESSION["client"])){
        header('location: authentification'); 
      }

      $this->view('forms/reservation');  
    }

    public function rooms(){
      session_start();
      // part 1: getting reservation informations
      $date_de = $_POST['date_de'];
      $date_a = $_POST['date_a'];
      $client_id = $_SESSION["client"];

      $object = $this->model('Chambre');
      $querry = $object->booking($date_de, $date_a, $client_id);

      if(!$querry){
        die('reservation data error');
      }

      // part 2: displaying rooms
      $room_type = $_POST['room_type'];
      $suite_type = 'null';

      if(isset($_POST['suite_type'])){
        $suite_type = $_POST['suite_type'];
      }

      $object = $this->model('Chambre');
      $rows = $object->roomsSearch($room_type, $suite_type);

      if($rows == false){
        echo "rooms data error";
      }

      $this->view('pages/rooms', $rows);
    }

    public function guests(){
      $this->view('forms/guests');
    }

    public function creation(){
      $this->view('forms/create');
    }
    public function modification(){
      $this->view('forms/modification');
    }
  }