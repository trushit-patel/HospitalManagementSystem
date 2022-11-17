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
            top:15%;
        }
    </style>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname="hospital";

        // Create connection
        $mysqli =mysqli_connect($servername, $username, $password,$dbname);
        $sql="SELECT * FROM doctors WHERE id=".$_REQUEST['id'];
        $result = mysqli_query($mysqli, $sql);
        $row = mysqli_fetch_array($result)
      //  mysql_close($mysqli);
    ?>
</head>
<body>
    <div class="container" >
        <div class="bg-success" style="padding-left:50px;" >Edit Entries</div>
        <form action="doctorupdate.php?id=<?php echo $_REQUEST['id'] ?>" method="post">
            <input type="text" placeholder="First Name" name="fn" value="<?php echo $row['fname'] ?>">
            <span id="s1" >enter a proper first name</span>
            <input type="text" placeholder="Lastt Name" name="ln" value="<?php echo $row['lname'] ?>">
            <span id="s2">enter a proper last name</span>
            <input type="text" placeholder="Adress" name="address" value="<?php echo $row['address'] ?>">
            <span id="s4" >choose a proper adress</span>
            <input type="text" placeholder="Contact Number" name="phn" value="<?php echo $row['phn'] ?>">
            <span id="s5" >choose a proper adress</span>
            <input type="submit" value="updated" class="bg-primary" id="submit">
        </form>
    </div>
</body>
</html>