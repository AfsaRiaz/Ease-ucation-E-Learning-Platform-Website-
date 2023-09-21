<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>EASE-ucation | Student Account</title>

    <link rel="stylesheet" href="assets/bootstrap.min.css" >
    <script src="assets/jquery.js"></script>
    <script src="assets/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <style>
     .a{
         margin-left: 600px;
     }
     .accDiv{
         margin-left: 30px;
     }
    </style>

</head>
<body> <div class="container-fluid">
<div class="row">
         <div class="col-12">
 <nav>
 <div >
         EASE-ucation 
        
        <span><a href="accountStudent.php" class="a"> MyAccount </a></span>
        <span><a href="#" class="b"> FindTutor </a></span>
        <span><a href="AllTutor.php" class="b"> All tutors</a></span>
        <span><a href="FreeNotes.html" class="b"> Free Notes </a></span>
        
        <span><a href="logoutStudent.php" class="c"> Logout </a></span>
        </div>
        </div>
         
 </nav>
 </div>
</div>

      <div class="row container-fluid">
          <div class="col-lg-6 accDiv">
             <div class="text-center text-white m-auto txt">
                 
             </div>
          </div>
          <div class="col-lg-1"></div>
          <div class="col-lg-4 findDiv">
              <form action="searchBatch.php" method="POST">
                  
              <select name="batch" id="" class = "form-control x" required value = "<?php if(isset($error)) { echo $batch;} ?>">
                  <option value="" disabled selected> Find a tutor (Search by batch) </option>
                  <option value="16" > 16 - Batch </option>
                  <option value="17" > 17 - Batch </option>
                  <option value="18" > 18 - Batch </option>
                  <option value="19" > 19 - Batch </option>
                  <option value="20" > 20 - Batch </option>
                  <option value="21" > 21 - Batch </option>
                  </select>

                  <button type = "submit" name = "sublogin" class = "btn btn-primary s1button"> Search
                  </button>
                      
              </form>

              <form action="searchDept.php" method="POST">
                  
              <select name="dept" id="" class = "form-control z" required value = "<?php if(isset($error)) { echo $dept;} ?>">
                  <option value="" disabled selected> Find a tutor (Search by department) </option>
                  <option value="Computer System Engineering" > Computer System Engineering </option>
                  <option value="Software Engineering" > Software Engineering </option>
                  <option value="Mechanical Engineering" > Mechanical Engineering </option>
                  <option value="Electrical Engineering" > Electrical Engineering </option>
                  <option value="Biomedical Engineering" > Biomedical Engineering </option>
                  <option value="Electronics Engineering" > Electronics Engineering </option>
                  <option value="Telecommunication Engineering" > Telecommunication Engineering </option>
                  <option value="Textile Engineering" > Textile Engineering </option>
                  </select>

                  <button type = "submit" name = "sub2login" class = "btn btn-primary s2button"> Search
                  </button>
                      
              </form>
        </div>
        
        <div class="col-lg-1"></div>

      </div>
      </div>
</body>
</html>