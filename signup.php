<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>reg</title>
    <link rel="stylesheet" href="style.php">
    <link rel="script" href="register.js">
    <style> <?php include 'CSS/style.css'; ?> </style>
</head>
<body>
    <div class="container" >
        <div class="bg-success" >Register</div>
        <form action="makeaccount.php" method="post">
            <input type="text" placeholder="First Name" name="fn" >
            <span id="s1" >enter a proper first name</span>
            <input type="text" placeholder="Lastt Name" name="ln" >
            <span id="s2">enter a proper last name</span>
            <input type="text" placeholder="User Name" name="un" >
            <span id="s3" >choose a proper username</span>
            <input type="text" placeholder="Password" name="pw" >
            <span id="s4" >choose a proper passwword</span>
            <input type="submit" value="Register" class="bg-primary" id="submit">
        </form>
    </div>
</body>
</html>