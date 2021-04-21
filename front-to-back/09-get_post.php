<?php
    /**
     * Working with $_GET and $_POST superglobals;
     * form processing and htmlentities function
     */

    // if(isset($_GET['name'])){
    //     echo $_GET['name'];
    //     print_r($_GET);

    //     echo htmlentities($_GET['name']);
    //     $name = htmlentities($_GET['name']);
    //     echo $name;
    // }

    // Don't want data to show up in URL? Use POST method
    // Data is sent through headers; more secure way
    // For further security, make it https
    // if(isset($_POST['name'])){
    //     $name = htmlentities($_POST['name']);
    //     echo $name;
    // }

    // Third way to retrieve data; works with either POST or GET
    // Not used often
    // if(isset($_REQUEST['name'])){
    //     $name = htmlentities($_REQUEST['name']);
    //     echo $name;
    // }
    
    // Fourth way, using Query String and GET
    // echo $_SERVER['QUERY_STRING'];

    if(isset($_GET['name'])){
        $name = htmlentities($_GET['name']);
        // echo $name;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
</head>
<body>
    <form method="GET" action="09-get_post.php">
    <!-- <form method="POST" action="09-get_post.php"> -->
    <!-- Action is page to submit to -->
        <div>
            <label for="">Name</label><br>
            <input type="text" name="name" id="">
        </div>
        <div>
            <label for="">Email</label><br>
            <input type="text" name="email" id="">
        </div>
        <input type="submit" value="Submit">
    </form>
    <ul>
        <li>
            <a href="09-get_post.php?name=Callie">Callie</a>
        </li>
        <li>
            <a href="09-get_post.php?name=Xander">Xander</a>
        </li>
    </ul>
    <h2><?php echo "{$name}'s Profile"; ?></h2>


</body>
</html>