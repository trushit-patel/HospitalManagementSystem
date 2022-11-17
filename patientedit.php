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
    <title>Edit</title>
    <link rel="stylesheet" href="style.php">
    <link rel="script" href="register.js">
    <style> 
        <?php include 'CSS/style.css'; ?> 
        .container{
            top:5%;
        }
    </style>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname="hospital";

        // Create connection
        $mysqli =mysqli_connect($servername, $username, $password,$dbname);
        $sql="SELECT * FROM patients WHERE id=".$_REQUEST['id'];
        $result = mysqli_query($mysqli, $sql);
        $row = mysqli_fetch_array($result)
      //  mysql_close($mysqli);
    ?>
</head>
<body>
    <div class="container" >
        <div class="bg-success" style="padding-left:50px;" >Edit Entries</div>
        <form action="patientupdate.php?id=<?php echo $_REQUEST['id'] ?>" method="post">
            <input type="text" placeholder="First Name" name="fn" value="<?php echo $row['fname'] ?>">
            <span id="s1" >enter a proper first name</span>
            <input type="text" placeholder="Last Name" name="ln" value="<?php echo $row['lname'] ?>">
            <span id="s2">enter a proper last name</span>
			<input type="text" placeholder="Email" name="email" value="<?php echo $row['email'] ?>">
            <span id="s2">enter a proper email</span>
            <input type="text" placeholder="Adress" name="address" value="<?php echo $row['adrs'] ?>">
            <span id="s4" >choose a proper adress</span>
            <input type="text" placeholder="Contact Number" name="phn" value="<?php echo $row['phn'] ?>">
            <span id="s5" >choose a proper Contact</span>
            <input type="text" placeholder="Disease" name="disease" value="<?php echo $row['disease'] ?>">
            <span id="s5" >choose a proper disease</span>
            <input type="text" placeholder="Amount" name="bill" value="<?php echo $row['bill'] ?>">
            <span id="s5" >choose a proper Amount</span>
            <input type="submit" value="Register" class="bg-primary" id="submit">
        </form>
    </div>
</body>
</html>