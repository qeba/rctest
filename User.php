<?php

include 'Plans.php';

class User {
    
    public $name;
    public $server;

    // public function __construct($name){

    //     $this->name = $name;
    // }
        
    public function getName(){

        return $this->name;
    }

    public function subscribe($user){

       var_dump($user);

    }

    public function connectServer($server){

        echo "Action =" . "Connecting to Server". $server;
    }

    
    public function unsubscribe($plans, $server){

    

    }



}

?>