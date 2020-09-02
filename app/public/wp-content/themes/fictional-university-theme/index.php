<?php  

function myFirstFunction() {
    echo "Hey dummy";
}

myFirstFunction();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php bloginfo("name"); ?>
    <h1><?php bloginfo("description"); ?></h1>
</body>
</html>