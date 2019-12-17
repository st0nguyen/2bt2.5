<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <label>
        <input type="number" name="num">
    </label>
    <input type="submit" name="load" value="them">

</form>
<label>
    <input type="text" name="arr" value="<?php $array=[];

    ?>
        ">
</label>

<?php

if (isset($_POST['load'])) {
    $array = $_POST['arr'];
    $ele = $_POST['num'];
    array_push($array,$ele);
}
die();

?>
</body>
</html>