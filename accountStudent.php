<?php 
session_start();
include 'conn.php';
if(!isset($_SESSION['login'])){
    header('location:loginStudent.php');
}
$email = $_SESSION["email"];
$query = " select * from student where email = '$email';";
$findresult = mysqli_query($con,$query);
if($res = mysqli_fetch_array($findresult)){
    $name = $res['name'];
    $fname = $res['fname'];
    $cast = $res['cast'];
    $batch = $res['batch'];
    $dept = $res['dept'];
    $phone = $res['phone'];
    $img = $res['img']; /* gender field */
    $email = $res['email'];
    $dor = $res['dor'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EASE-ucation | Student Account</title>

    <link rel="stylesheet" href="assets/bootstrap.min.css" >
    <script src="assets/jquery.js"></script>
    <script src="assets/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body
	{
		background-image: url(img/i.jpg);
		background-size: cover;
		background-attachment: fixed;
	}

    .a{
        margin-left: 600px;
    }
    </style>

</head>
<body>
         
         <div class="row">
         <div class="col-12">
 <nav>
 <div >
         EASE-ucation 
        
        <span><a href="#" class="a"> MyAccount </a></span>
        <span><a href="findTutor.php" class="b"> Find a tutor</a></span>
        <span><a href="AllTutor.php" class="b"> All tutors</a></span>
        <span><a href="FreeNotes.html" class="b"> Free Notes </a></span>
        
        <span><a href="logoutStudent.php" class="c"> Logout </a></span>
        </div>
 </nav>
 </div>
</div>

<div class="row">
    <div class="col-1"></div>
    <div class="col-10">
    <div class="card-header bg-dark abc">
                     <h1 class = "text-white text-center"> Student Personal Details </h1>
                     </div>

                     <table class=" table table-stripped table-hover table-bordered abc bg-light">
                         
                     <tr>
                         <th>Name</th>
                         <td> <?php echo $name; ?> </td>
                     </tr>

                     <tr>
                         <th>Father Name</th>
                         <td> <?php echo $fname; ?> </td>
                     </tr>

                     <tr>
                         <th>Surname</th>
                         <td> <?php echo $cast; ?> </td>
                     </tr>

                     <tr>
                         <th>Gender</th>
                         <td> <?php echo $img; ?> </td>
                     </tr>

                     <tr>
                         <th>Department</th>
                         <td> <?php echo $dept; ?> </td>
                     </tr>

                     <tr>
                         <th>Batch</th>
                         <td> <?php echo $batch; ?> </td>
                     </tr>

                     <tr>
                         <th>Phone Number</th>
                         <td> <?php echo "0".$phone; ?> </td>
                     </tr>

                     <tr>
                         <th>Email</th>
                         <td> <?php echo $email; ?> </td>
                     </tr>

                     <tr>
                         <th>Date of Registration</th>
                         <td> <?php echo $dor; ?> </td>
                     </tr>

                     </table>
    </div>
    <div class="col-1"></div>
</div>
             
</body>
</html>