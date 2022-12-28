<?php
  class BackOffice extends Controller {
    
    public function connection(){
      // checking is the admin is loged in
      $object = $this->model('Admin');
      session_start();
      if(!empty($_SESSION["admin"])){
        header('location: dashboard');
      }

      // loading the login form
      $this->view('forms/login');

      if(isset($_POST['submit'])){
        $Uemail = $_POST['email'];
        $Upass = $_POST['password'];
        
        $object = $this->model('Admin');
        $storedPassword = $object->signIn($Uemail);
        
        if(password_verify($Upass, $storedPassword)){
          session_start();
          $_SESSION["admin"] = $Uemail;

          header('location: dashboard');
        } else {
          echo 'error';
        }
      }
    }
    
    public function dashboard(){
      // checking is the admin is loged in
      $object = $this->model('Admin');
      session_start();
      if(empty($_SESSION["admin"])){
        header('location: connection'); 
      }

      // getting data from the model
      $obj = $this->model('Chambre');
      $rooms = $obj->readRooms(); 

      // loading dashboard view
      $this->view('pages/dashboard', $rooms);
    }
    
    public function create(){
      $this->view('forms/create');

      if(isset($_POST['submit'])){
        $image_name = $_FILES["image"]["name"];
        $oldLocation = $_FILES["image"]["tmp_name"];
        $newLocation = "added_imgs/" . $image_name;  
        $type = $_POST['type'];
        $type_suite = $_POST['suite_type']; 
        $numero = $_POST['numero'];
        
        $object = $this->model('Chambre');
        $result = $object->add($oldLocation, $newLocation, $type, $type_suite, $numero);

        if($result == true){
          header('location: home');
        } else {
          echo 'error404';
        }
      }
    }

    public function update(){
      $this->view('forms/update');
    }
    public function home(){
      $this->view('pages/home');
    }
  }