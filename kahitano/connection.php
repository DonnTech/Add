<?php

 $db_server = "localhost";
 $db_user = "root";
 $db_password = "";
 $db_name = "person_db";
 $conn = "";

 $conn = mysqli_connect(
    $db_server,
    $db_user,
    $db_password,
    $db_name
 );

    try{
        $conn = mysqli_connect(
            $db_server,
            $db_user,
            $db_password,
            $db_name
        );
    }
    catch(mysqli_sql_exemption){
        echo "Error connecting to database";
    }

    if($conn){
        echo "Connected to database";
    }else{
        echo "Connection Failed";
    };

?>
