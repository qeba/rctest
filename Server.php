<?php

class Server {
    
    public function name($name){

        $this->name = $name;
    }

    public function getServerInfo($ipadd){
        
        $this->ipadd = $ipadd;
    }

    
    public function connectServer ($server){

        echo "Action = " . "Connecting to ". $server ."\n";

    }

}

?>