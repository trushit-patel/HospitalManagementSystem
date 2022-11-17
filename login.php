<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>
    <link rel="stylesheet" href="style.php">
    <link rel="script" href="login.js">
    <style> <?php include 'CSS/style.css'; ?> </style>
</head>
<body>
<div class="container" >
    <div class="bg-success" >Login</div>
    <form action="verifylogin.php" method="post">

        <input type="text" placeholder="User Name" name="un" >
        <input type="text" placeholder="Password" name="pw" >
        <input type="submit" value="Login" class="bg-primary" >
    </form>
</div>
</body>
</html>