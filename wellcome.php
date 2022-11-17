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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Home</title>
</head>
<!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->

<body>
  <div class="container" >
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5" style="background:khaki;">
            <form>
              <div class="d-grid mb-2">
                <a href="doctordetails.php" class="btn btn-primary text-uppercase fw-bold">View Docator Details</a>
              </div>
              <div class="d-grid mb-2">
                <a href="patientrecords.php" class="btn btn-info text-uppercase fw-bold">View Patient Records</a>
              </div>
              <!-- --><div class="d-grid mb-2">
                <a href="logout.php" class="btn btn-danger text-uppercase fw-bold">Log Out</a>
              </div> 
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>