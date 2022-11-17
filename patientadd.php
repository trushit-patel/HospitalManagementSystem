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
    $sql="INSERT INTO patients (fname,lname,email,adrs,phn,disease,bill)values('".$_POST['fn']."','".$_POST['ln']."','".$_POST['email']."','".$_POST['address']."','".$_POST['phn']."','".$_POST['disease']."','".$_POST['bill']."')";

    $result = mysqli_query($mysqli, $sql)or die(mysqli_error($mysqli));
    if ($result){
        echo " <br> inserted";
    }
    header("Location: patientrecords.php"); 
    exit();
?>