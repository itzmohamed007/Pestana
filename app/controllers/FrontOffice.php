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
        $storedPassword = $object->signIn($Uemail);
        
        if(password_verify($Upass, $storedPassword)){
          session_start();
          $_SESSION["client"] = $Uemail;
          header('location: reservation');
        } else {
          echo 'error';
        }
      }
    }

    
    // public function reservation($querry){
    public function reservation(){
      // checking is the admin is loged in
      $object = $this->model('Client');
      session_start();
      if(empty($_SESSION["client"])){
        header('location: authentification'); 
      }

      $this->view('forms/reservation');
    }

    public function rooms(){
      if(isset($_POST['search'])){
        $room_type = $_POST['room_type'];
        $suite_type = $_POST['suite_type'];
        $date_de = $_POST['date_de'];
        $date_a = $_POST['date_a'];

        if($suite_type == ''){
          $suite_type = 'null';
        }

        $object = $this->model('Chambre');
        $querry = $object->roomsSearch($date_de, $date_a, $room_type, $suite_type);

        if($querry == false){
          echo "error";
        }
        $this->view('pages/rooms');
      }
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