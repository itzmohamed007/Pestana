<?php
  class FrontOffice extends Controller {
    public function __construct(){
      
    }
    // UI pages
    public function home(){
      $this->view('pages/home');
    }
    public function chambres(){
      $this->view('pages/chambres');
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
          header('location: home');
        } else {
          echo 'error';
        }
      }
    }

    
    public function reservation(){
      $this->view('forms/reservation');
    }
    public function creation(){
      $this->view('forms/create');
    }
    public function modification(){
      $this->view('forms/modification');
    }
  }