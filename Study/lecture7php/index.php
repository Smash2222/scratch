<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $folder = $_POST['folder'];
    $file = $_POST['file'];
    if (!is_dir($folder)) {
        mkdir($folder);
    }
//    file_put_contents($folder . '/' . $file, 'String');
    /*$f = fopen($folder . '/' . $file, "w+");
    fwrite($f, 'String');
    fclose($f); */
}

?>

<form method="post" action="">
    <table>
        <tr>
            <td>Folder Name</td>
            <td><input type="text" name="folder"></td>
        </tr>
        <tr>
            <td>File Name</td>
            <td><input type="text" name="file"></td>
        </tr>
    </table>
    <button type="submit">Submit</button>
</form>
</body>
</html>