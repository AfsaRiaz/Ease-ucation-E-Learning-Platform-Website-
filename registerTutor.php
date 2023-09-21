<?php
include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/bootstrap.min.css" >
    <script src="assets/jquery.js"></script>
    <script src="assets/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">

    <title>EASE-ucation | Tutor Registration</title>

    
</head>
<body>
<div class="row">
 <div class="col-12">
 <nav>
         EASE-ucation
 </nav>
 </div>
 </div>
 <div class="row">
 
 <div class="col-sm-4">
 </div>
 <div class="col-sm-4">
 </div>
 <div class="col-sm-4">
 </div>
 </div>

 <div class="row">
 <?php
 if(isset($_POST['registration'])){
     extract($_POST);

     if(strlen($name)<3){
        $error[]= ' Please enter name using 3 characters atleast!';
    }

    if(strlen($name)>20){
       $error[]= ' Name can not be more than 20 characters long!';
    }
    if(!preg_match("/^[A-Za-z _]*[A-Za-z _]+[A-Za-z _]*$/",$name)){
        $error[] = 'Invalid entry name. Please enter letters without any digit or special symbols';
    }  

    if(strlen($fname)<3){
        $error[]= ' Please enter father name using 3 characters atleast!';
    }

    if(strlen($fname)>20){
       $error[]= ' Father name can not be more than 20 characters long!';
    }
    if(!preg_match("/^[A-Za-z _]*[A-Za-z _]+[A-Za-z _]*$/",$fname)){
        $error[] = 'Invalid entry father name. Please enter letters without any digit or special symbols';
    }  

    if(strlen($cast)<3){
        $error[]= ' Please enter surname name using 3 characters atleast!';
    }

    if(strlen($cast)>20){
       $error[]= ' Surname name can not be more than 20 characters long!';
    }
    if(!preg_match("/^[A-Za-z _]*[A-Za-z _]+[A-Za-z _]*$/",$cast)){
        $error[] = 'Invalid entry surname name. Please enter letters without any digit or special symbols';
    }  


     if(strlen($phone) < 11){
         $error[] = ' Invalid phone number';
     }

     if(strlen($phone) > 12){
         $error[] = ' Invalid phone number';
     }

     if(!preg_match("/^[0-9]*$/", $phone)){
         $error[] = ' In phone number field, only digits are allowed! ';
     }
     
    
     
     
    if(strlen($email) > 50){
        $error[] = 'Email can not be more than 50 characters long!';
    }
    if(strlen($password) < 6){
        $error[] = 'Password can not be less than 6 characters!';
    }
    if(strlen($password) > 51){
        $error[] = 'Password can not be more than 50 characters!';
    }

    $sql = " select * from tutor where email = '$email';";
    $res = mysqli_query($con,$sql);
    if(mysqli_num_rows($res) > 0){
        $error[] = ' This email has been used already!';
    }

    $image = $_POST['image'];
    $dept = $_POST['dept'];
    $batch = $_POST['batch'];

    if(!isset($error)){
        $dor = date('Y-m-d');
        
        $sql2 = "INSERT INTO tutor values('','$name','$fname','$cast','$batch','$dept','$subjects','$phone', '$image', '$dor','$email', '$password')";
        $result = mysqli_query($con,$sql2);

        if($result){
            $done = 2;
        }
         else{
             $error[] = 'Failed : Something went wrong';
         }
    }
 }
 ?>
 <div class="col-sm-3">
  <?php
  if(isset($error)){
      foreach($error as $error){
          echo '<p class= "errmsg">&#x26A0;'.$error.'</p>';
      }
  }
  ?>
 </div>
 <?php
 if(isset($done)){
 ?>
 <div class="successmsg">
 <span style = "font-size:100px;">&#9989;</span>
 YOU HAVE SUCCESSFULLY REGISTERED! &nbsp; &nbsp; &nbsp;
 <br> <br>
 <a href="loginTutor.php" style = "color:#fff"> Login here....</a>
 <br>
 <br>
 </div>
 <?php
 } else {
 ?>
 <div class="col-sm-6">
          <form method = "POST">
          <br> <br>
                  <div class="card">
                    <div class="card-header bg-dark">
                     <h1 class = "text-white text-center"> Tutor Registration Form </h1>
                     </div>
<br>
                   <input type="text" name="name" id="" class = "form-control" placeholder = "Name" required value = "<?php if(isset($error)) { echo $name;} ?>"> <br>

                   <input type="text" name="fname" id="" class ="form-control" placeholder = "Father Name" required value = "<?php if(isset($error)) { echo $fname;} ?>"> <br>

                   <input type="text" name="cast" id="" class ="form-control" placeholder = "Surname" required value = "<?php if(isset($error)) { echo $cast;} ?>"> <br>

                   <input type="number" name="phone" id="" class ="form-control" placeholder = "Phone Number" required value = "<?php if(isset($error)) { echo $phone;} ?>"> <br>

                  
                  <select name="image" id="" class = "form-control" required value = "<?php if(isset($error)) { echo $image;} ?>">
                  <option value="" disabled selected> Gender </option>
                  <option value="Male" > Male </option>
                  <option value="Female" > Female </option>
                  <option value="Others" > Others </option>
                  </select>
                      <br>
                  <select name="dept" id="" class = "form-control" required value = "<?php if(isset($error)) { echo $dept;} ?>">
                  <option value="" disabled selected> Department </option>
                  <option value="Computer System Engineering" > Computer System Engineering </option>
                  <option value="Software Engineering" > Software Engineering </option>
                  <option value="Mechanical Engineering" > Mechanical Engineering </option>
                  <option value="Electrical Engineering" > Electrical Engineering </option>
                  <option value="Biomedical Engineering" > Biomedical Engineering </option>
                  <option value="Electronics Engineering" > Electronics Engineering </option>
                  <option value="Telecommunication Engineering" > Telecommunication Engineering </option>
                  <option value="Textile Engineering" > Textile Engineering </option>
                  </select>
                  <br>

                  <select name="batch" id="" class = "form-control" required value = "<?php if(isset($error)) { echo $batch;} ?>">
                  <option value="" disabled selected> Batch </option>
                  <option value="16" > 16 - Batch </option>
                  <option value="17" > 17 - Batch </option>
                  <option value="18" > 18 - Batch </option>
                  <option value="19" > 19 - Batch </option>
                  <option value="20" > 20 - Batch </option>
                  <option value="21" > 21 - Batch </option>
                  </select>
                      <br>

                      <input type="text" name="subjects" id="" class ="form-control" placeholder = "Subjects about which you can provide material and guidance" required value = "<?php if(isset($error)) { echo $subjects;} ?>"> <br>
                 
                  <input type="email" name="email" id="" class ="form-control" placeholder = "Email" required value = "<?php if(isset($error)) { echo $email;} ?>"> <br>

                  <input type="password" name="password" id="" class ="form-control" placeholder = "Password" required> <br>

                   <button type = "submit" name = "registration" class = "btn btn-success text-white "> SUBMIT
                  </button>
                  <?php } ?>
          </form>

 </div>
 <div class="col-sm-3">
 </div>
 </div>

    
</body>
</html>