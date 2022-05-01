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

    // $args_arr = array('first_name' => 'thingy', 'last_name' => '', 'email' => null, 'uid' => null, 'password' => null);

    // if (verify_entries($args_arr))
    // {
    //     echo "do stuff\n";
    // }
    // else {
    //     echo "don't do stuff\n";
    // }


    // function verify_entries($args_arr)
    // {
    //     $is_valid = true;
    //     foreach ($args_arr as $key => $value) {
    //         if ($value == null || $value == "") {
    //             echo "Invalid input " . $key . "<br>";
    //             $is_valid = false;
    //         }
    //     }

    //     return $is_valid;
    // }


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