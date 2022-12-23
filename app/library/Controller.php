<?php
/*
 * load model and view
 */

 class Controller {
    public function model($model){
        // requiring the model 
        require_once('../model/') . $model . '.php';
    }
 }