<?php  

$names = ["Ramon", "Tim", "Sarah", "John", "Tech N9ne"];

// foreach ($names as $x) {
//     if (strpos($x, "a")) {

//         echo $x;
//     }
// }
// if (names)

$count = 0;

function printNames() {
    global $names, $count;
    while ($names[$count]) {
        echo "<br>" . $names[$count];
        $count++;
    }
}

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
    <h1><?php printNames(); ?></h1>
</body>
</html>