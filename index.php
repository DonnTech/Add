<?php
    include 'connection.php';
    //select query
    function getPersons(){
        global $conn;
        $sql = "SELECT * FROM person";
        return $conn->query($sql);

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- display list of persons -->

     <h2>List of Person</h2>
     <table border = "1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
        </tr>

        <?php
            $person = getPersons();
            while ($row = $person->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['age']}</td>
                        
                        <td>
                            <a href='sample.php?action=delete&id={$row['id'] color      }'>Delete</a>

                        </td>
                    </tr>";
            }
        ?>
     </table>
    
</body>
</html>