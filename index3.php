<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KOK</title>
</head>

<body>
    <h1 style="color:red; font: 3em sans-serif;">SUCC</h1>
    <?php
    echo "Hello World";
    ?>
    <p>Nigerundayo</p>
    <form action="functions.php" method="get">
        <input type="text" name="num01" placeholder="yeetus">
        <select name="oper">
            <label>Choose operation</label>
            <option value="add">Add</option>
            <option value="sub">Subtract</option>
        </select>
        <input type="text" name="num02" placeholder="fetus">
        <button type="submit">Calculate</button>
    </form>
</body>

</html>