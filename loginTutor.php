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

    <title>EASE-ucation | Tutor login</title>

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
 <div class="col-sm-4 m-auto">

 <br>
                  <div class="card">
                    <div class="card-header bg-dark">
                     <h1 class = "text-white text-center"> Tutor Login </h1>
                     </div>

          <form action="loginprocessTutor.php" method="POST">
          <div class="from-group">
          <br>
                    
<br>
                   <label for="" class = "lb">Email : </label>
                   <input type="text" name="email" id="" class = "form-control" required > <br>

            
                   <label for="" class = "lb">Password : </label>
                   <input type="password" name="password" id="" class ="form-control" required> <br>

                   <button type = "submit" name = "sublogin" class = "btn btn-success lbutton"> Login Now
                  </button>

                  <div class = "reg">   HAVEN'T REGISTERED YET ?
                  <a href="registerTutor.php">  Register Now!</a>
                  </div>
                  

                  </div>           
          </form>
          </div>
 </div>
 <div class="col-sm-4">
 </div>
 </div>

    
</body>
</html>