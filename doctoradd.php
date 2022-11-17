<?php
    session_start();

    if($_SESSION['scope']!="loggedin"){
      header("location:login.php");
    }
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
    $sql="INSERT INTO doctors (fname,lname,address,phn)values('".$_POST['fn']."','".$_POST['ln']."','".$_POST['address']."','".$_POST['phn']."')";

    $result = mysqli_query($mysqli, $sql);
    if($result){
        header("Location: doctordetails.php"); 
        exit();
    }else{
        header("Location: doctorform.php");
        exit();
    }
    mysql_close($mysqli);
?>