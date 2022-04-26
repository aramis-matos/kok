<?php
function myCalc ($num01, $num02, $oper) {
    $sum = "";
    {
        switch ($oper) {
            case "add":
                $sum = $num01 + $num02;
                break;
            case "sub":
                $sum = $num01 = $num02;
                break;
            default:
                $sum = "There was an error!";
                break;
                
        }
    }
    return $sum;
}

$num01 = $_GET["num01"];
$num02 = $_GET["num02"];
$oper = $_GET["oper"];

echo "Value: " . myCalc($num01,$num02,$oper);
?>

// $sql = "SELECT * FROM users;";
    // $result = mysqli_query($conn, $sql);
    // $resultCheck = mysqli_num_rows($result);

    // if ($resultCheck > 0) {
    //     while ($row = mysqli_fetch_assoc($result)) {
    //         echo $row['user_uid'] . "<br>";
    //     }
    // }