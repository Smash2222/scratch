<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

$arr = json_decode(file_get_contents('data.json'), true);
?>

<table>
    <?php
    for ($i = 0; $i < count($arr); $i++) : ?>
        <tr>
            <td><?= $i + 1 ?></td>
            <td><?= $arr[$i]['name'] ?></td>
            <td><?= $arr[$i]['count'] ?></td>
            <td><?= $arr[$i]['email'] ?></td>
        </tr>
    <?php
    endfor; ?>
</table>
</body>
</html>

