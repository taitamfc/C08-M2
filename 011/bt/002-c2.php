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
    session_start();
    //session_destroy();die();
    $max = '';
    $result = '';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_POST["answer"] == '') {
            $max = $_POST["mang"];
            $arr = [];
            for ($i = 0; $i <= $max; $i++) {
                array_push($arr, $i);
            }
            $mid = floor((count($arr) - 1) / 2);
            $_SESSION["array"] = $arr;
            $_SESSION["mid"] = $mid;
            $result = $_SESSION["array"][$mid];
        }
        if ($_POST["answer"] == 'lớn hơn') {
            $new_arr = $_SESSION["array"];
            $mid = $_SESSION["mid"] + 1;
            while ($mid != count($new_arr)) {
                array_shift($new_arr);
            }
            $new_mid = floor((count($new_arr)) / 2);
            $_SESSION["array"] = $new_arr;
            $_SESSION["mid"] = $new_mid;
            $result = $_SESSION["array"][$new_mid];
        }
        if ($_POST["answer"] == 'nhỏ hơn') {
            $new_arr = $_SESSION["array"];
            $mid = $_SESSION["mid"] + 1;
            while ($mid != count($new_arr) + 1) {
                array_pop($new_arr);
            }
            $new_mid = floor((count($new_arr)) / 2);
            $_SESSION["array"] = $new_arr;
            $_SESSION["mid"] = $new_mid;
            $result = $_SESSION["array"][$new_mid];
        }
        if ($_POST["answer"] == 'chính xác') {
            $result = "Thấy tôi giỏi chưa";
        }
    }
    ?>
    <form method="POST">
        <h1>Minigame Guess Number</h1>
        <h4>Input Limit</h4> <br>
        <input type="text" name="mang" value="<?php echo $max ?>"> <br>
        <h4>Input Answer of User : nhỏ hơn - lớn hơn</h4>
        <input type="text" name="answer"><br><br>
        <input type="submit" value="Guess"> <br><br>
        <span>Result = <?php echo $result ?></span>
    </form>
</body>

</html>