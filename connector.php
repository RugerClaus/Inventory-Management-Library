<?php

class Connection {

    public function Connect($server = 'localhost',$username = 'root',$password = null,$db = 'contactapp'){
        $conn = new mysqli($server,$username,$password,$db);
        return $conn;
    }
}

