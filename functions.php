<?php

include 'connector.php';

function create_connection($a = '', $b = '', $c = " ", $d = '', $selector = '*', $table = ''){ /* selector is for the query function below */
    $database = new Connection();
    if($a && $b && $c && $d !== ''){
        
        $custom = $database->Connect($a,$b,$c,$d);
        $result = $custom->query("SELECT '$selector' from '$table'");
        while($row = $result->fetch_assoc()){
            return [$row];
        }
    }
    else {
        $default = $database->Connect();
        $result = $default->query('SELECT * FROM contact');
        while($row = $result->fetch_assoc()){
            return [$row['Name'],$row['email'],$row['phone'],$row['id']];
        }
    }
}