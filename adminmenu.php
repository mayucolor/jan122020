<?php
    require_once 'classes/sql.php';

    $id = $_GET["id"];
    $s = new SQL;

    $result = $s->getSpecificImage($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Baskervville&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    
</head>

<body>
    <div class="bg-success p-3 mb-5">
        ADD FURNITURE
        <a href="addpic.php" class="text-right text-white text-decoration-none ml-5">ADD PICTURE</a>
        <a href="messagedisplay.php" class="text-right text-white text-decoration-none ml-5">MESSAGE</a>
        <a href="logout.php" class="text-warning text-decoration-none ml-5">LOG OUT</a>
        
    </div>
    <div class="float-left w-50">
        <form action="action.php" method="post" class=" mt-3 ml-5" enctype="multipart/form-data">
            Name <input type="text" name="name" class="form-control" value="<?php
                        include 'classes/sql.php';
                        $s = new SQL();
                        $id = 8;
                        $result = $s->searchSpecificImage($id);
                        $name = $result['name'];
                        echo "$name"; ?>"> <br>
            Category 
            <select name="category" id="" class="form-control">
                <option value="sofa">sofa</option>
                <option value="table">table</option>
                <option value="paperwall">paperwall</option>
                <option value="bed">bed</option>
                <option value="others">others</option>
            </select> <br>
            Price <input type="text" name="price" class="form-control"> <br>
            <input type="hidden" name="id" value="<?php echo $id; ?>"> <br>
            <input type="submit" name="add" value="ADD" class="form-control btn btn-outline-success mb-5">
        
        </form>    
    </div>
    <div>
    
    </div class="float-right w-50">
        <?php
        $s = new SQL();

        echo "<h4>Picture</h4> <br>";
        
        $id = 8;
        $result = $s->searchSpecificImage($id);
        $image = $result['image'];
        echo "<img src='upload/$image' class='w-25 ml-5' >";

     ?>
</body>
</html>
