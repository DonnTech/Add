<?php
    include 'connection.php';
    $action = isset($_GET['action']) ? $_GET['action'] : '';

    switch($action){
        case 'display':
            echo "Hello World";
            break;
        case 'low':
            echo "Hey World";
            break;
        case 'delete':
            delete();
            break;
        case 'add':
            add();
            break;
        default:
            echo "Error";
            break;
    }
    function delete(){
        global $conn;
        $id = $_GET['id'];
        $sql = " DELETE FROM person WHERE id = $id";
        $conn->query    ($sql);
       


        echo "Person Deleted";
    }

    function add(){
        global $conn;
        $name = $_GET['name'];
        $age = $_GET['age'];
        
        $sql = "INSERT INTO person (name, age) VALUES ('$name', '$age')";

        $conn->query($sql);
        header('location: add.php');
        exit(); 
    }
?>