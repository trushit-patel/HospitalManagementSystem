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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>doctor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname="hospital";

        // Create connection
        $mysqli =mysqli_connect($servername, $username, $password,$dbname);
        $sql="SELECT * FROM patients";
        $result = mysqli_query($mysqli, $sql);
        $counter = 1;
    ?>
</head>
<body>
    <div class="container mt-5">
    <div class="row">
        <div class="col-sm-12  shadow-lg p-3 mb-5 bg-white rounded">
            <h4 class="text-center alert alert-primary">Patient Records</h4>
            <?php if($result->num_rows>0){ ?>
                <table id="example" class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Sr.No.</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
							<th scope="col">email</th>
                            <th scope="col">Adress</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Disease</th>
                            <th scope="col">Bill</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="tbody">
                    <?php while($row = mysqli_fetch_array($result)){ ?>
                            <tr >
                                <th scope="row"><?php echo $counter; ?></th>
                                <td><?php echo $row['fname']; ?></td>
                                <td><?php echo $row['lname']; ?></td>
								<td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['adrs']; ?></td>
                                <td><?php echo $row['phn']; ?></td>
                                <td><?php echo $row['disease']; ?></td>
                                <td><?php echo $row['bill']; ?></td>
                                <td><a href="patientedit.php?id=<?php echo $row['id'] ?>"class="btn btn-sm btn-warning ">Edit</a>
                                    <a href="patientdelete.php?id=<?php echo $row['id'] ?>"class="btn btn-sm btn-danger ">Delete</a>
                                </td>
                            </tr>
                            <?php $counter++; } ?>
                    </tbody>
                </table>
            <?php }else{ ?>
            <h5 class="text-center alert alert-danger m-3">No entries were found</h3>
            <?php 
                } 
                mysqli_close($mysqli);
            ?>
            <a href="patientform.php" class=" btn btn-primary mt-2"> Create a new entry </a> <a href="wellcome.php" class=" btn btn-dark mt-2"> Home </a> <a href="doctordetails.php" class=" btn btn-warning mt-2">List of doctors</a>
        </div>
    </div>
    </div>
</body>
</html>