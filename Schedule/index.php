<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php
$dayOfWeek = date("w");
switch ($dayOfWeek){
    case 1:
        echo "<p>It is Monday!</p>";
        break;
    case 2:
        echo "<p>It is Tuesday!</p>";
        break;
    case 3:
        echo "<p>It is Wednesday!</p>";
        break;
    case 4:
        echo "<p>It is Thursday!</p>";
        break;
    case 5:
        echo "<p>It is Friday!</p>";
        break;
    case 6:
        echo "<p>It is Saturday!</p>";
        break;
    case 7:
        echo "<p>It is Sunday!</p>";
        break;
}
?>
</body>
</html>