<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css?<?php echo date("Ymd:h-is"); ?>" rel="stylesheet" >
    <title></title>
</head>
<body>
    <form action="index.php" method="POST">
        <input type="text" name="test">
        <input type="submit">
    </form>

    <?php $test=$_POST['test'];?>
    <p><?php echo $test; ?></p>

</body>
</html>