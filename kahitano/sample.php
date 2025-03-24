<?php
    include "connection.php";
    $action = isset($_GET['action']) ? $_GET['action'] : '';

    switch($action){
        case 'display':
            echo "Hello Word";
            break;

        case 'low':
          echo "Hey World";
            break;

        case 'add':
            add();
            break;

          default:
          echo "Error";
          break;
    }
        function add(){
            global $conn;
            $name = $_GET['name'];
            $age = $_GET['age'];
            echo $name." ".$age;

            
        }

    
?>