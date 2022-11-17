<?php 

session_start();

if($_SESSION['scope']!="loggedin"){
  header("location:login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add</title>
    <link rel="stylesheet" href="style.php">
    <link rel="script" href="register.js">
    <style> 
        <?php include 'CSS/style.css'; ?> 
        .container{
            top:5%;
        }
    </style>
</head>
<body>
    <div class="container" >
        <div class="bg-success" style="padding-left:50px;" >Add a Patient</div>
        <form action="patientadd.php" method="post">
            <input type="text" placeholder="First Name" name="fn" >
            <span id="s1" >enter a proper first name</span>
            <input type="text" placeholder="Last Name" name="ln" >
            <span id="s2">enter a proper last name</span>
			<input type="text" placeholder="Email" name="email" >
            <span id="s2">enter a proper last name</span>
            <input type="text" placeholder="Adress" name="address" >
            <span id="s4" >choose a proper adress</span>
            <input type="text" placeholder="Contact Number" name="phn" >
            <span id="s5" >choose a proper number</span>
            <input type="text" placeholder="Disease" name="disease" >
            <span id="s5" >choose a proper disease</span>
            <input type="number" placeholder="Bill amount" name="bill" >
            <span id="s5" >choose a proper Amount</span>

            <input type="submit" value="Register" class="bg-primary" id="submit">
        </form>
    </div>
</body>
</html>