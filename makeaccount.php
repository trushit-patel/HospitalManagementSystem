<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname="hospital";

    // Create connection
    $mysqli =mysqli_connect($servername, $username, $password,$dbname);
    if($mysqli) {
        echo "success\n";
    } 
    else {
        die("Error". mysqli_connect_error()); 
    } 
    $sql="INSERT INTO users (fname,lname,usern,pass)values('".$_POST['fn']."','".$_POST['ln']."','".$_POST['un']."','".$_POST['pw']."')";

    echo $_POST['fn'].$_POST['ln'].$_POST['un'].$_POST['pw'];
    echo $sql;
    
    $result = mysqli_query($mysqli, $sql);
    if($result){
        header("Location: login.php"); 
        exit();
    }else{
        header("Location: signup.php");
        exit();
    }
    mysql_close($mysqli);
?>