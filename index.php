<<<<<<< HEAD
<?php
include_once "includes/dbh.inc.php";
?>
=======
>>>>>>> d1e41865455f09faf3ab60248fcb919e83527fc5

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $sql = "SELECT * FROM users;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);


    // while ($row = mysqli_fetch_assoc($result)) {
    //     echo $row['user_uid'] . "<br>";
    // }


    for ($i = mysqli_fetch_assoc($result); $i ; $i = mysqli_fetch_assoc($result)) {
        echo $i['user_uid'] . '<br>';
    }

    ?>

    <form action="includes/signup.inc.php" method="POST">
        <input type="text" name="first" placeholder="firstName">
        <br>
        <input type="text" name="last" placeholder="lastName">
        <br>
        <input type="text" name="email" placeholder="email">
        <br>
        <input type="text" name="uid" placeholder="username">
        <br>
        <input type="password" name="pwd" placeholder="password">
        <br>
        <button type="submit" name="submit">Sign up</button>
        <br>
    </form>
</body>

</html>