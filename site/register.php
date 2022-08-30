<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My first PHP website</title>
</head>
<body>
<h2>Registration Page</h2>
<a href="index.php">Click here to go back</a><br/><br/>
<form action="register.php" method="post">
    Enter Username: <label>
        <input type="text" name="username" required="required">
    </label> <br>
    Enter Password: <label>
        <input type="password" name="password" required="required">
    </label> <br>
    <input type="submit" value="Register">
</form>
</body>
</html>