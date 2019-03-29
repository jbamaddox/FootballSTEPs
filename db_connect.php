<?php
            //echo "inside db_connect <br/>";
            $server = "localhost";
            $un = "jbamaddox";
            $password = "Hxxx!";
            $dbname = "football_stats";
            
            $connection = new mysqli($server, $un, $password, $dbname);
            
            if($connection -> connect_error){
            die("conneciton failed: " . $connection->connect_error);
            }
            //print("Connected to database");
            
            
            
            
        
?>