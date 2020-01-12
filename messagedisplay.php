<?php
    session_start();
    require_once 'classes/sql.php';

    $message = new SQL;

    $result = $message->getMessage();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <table class="table">
        <th>ID</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>SUBJECT</th>
        <th>MESSAGE</th>
        <th>ACTION</th>
        
        <?php
                foreach($result as $row){
                $id = $row['id'];
                echo"<tr>
                        <td>".$row['id']."</td>
                        <td>".$row['name']."</td>
                        <td>".$row['email']."</td>
                        <td>".$row['subject']."</td>
                        <td>".$row['message']."</td>
                        <td> <a href='action.php?actiontype=delete&id=$id'> Delete </a></td>
                    </tr>";
            }
            
        ?>
    </table>
    
</body>
</html>
