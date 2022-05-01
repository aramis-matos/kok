<?php
include_once "dbh.inc.php";

function verify_entries($args_arr)
{
    $is_valid = true;
    foreach ($args_arr as $key => $value) {
        if ($value == null || $value == "") {
            echo "Invalid input " . $key . "<br>";
            $is_valid = false;
        }
    }
    return $is_valid;
}


$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$args = array('first_name' => $first, 'last_name' => $last, 'email' => $email, 'uid' => $uid, 'password' => $pwd);
$valid_entries = verify_entries($args);



if ($valid_entries == true) {

    $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$args[0]', '$args[1]', '$args[2]', '$args[3]', '$args[4]');";
    mysqli_query($conn, $sql);
    header("Location: ../index.php?signup=success");
}






