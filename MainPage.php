<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet"  href="css/style1.css">
    <link rel="stylesheet" href="assets/bootstrap.min.css" >
    <script src="assets/jquery.js"></script>
    <script src="assets/bootstrap.min.js"></script>

    
    <link href="css/all.min.css" rel="stylesheet"> 
    

    <title>EASE-ucation | Main Page</title>

    <style>
        .ourabout{
            background-color: rgb(135, 17, 141,0.5);
            /* background-color: #007bff; */
            padding: 60px 0px 60px;
            height: 650px;
        }

        .ourabout h1{
        font-size: 50px;
        font-weight: bolder;
          }

          .ourabout p{
              font-weight : bold;
              font-size : 18px;
          }

          .ourcontact{
            padding: 50px 0px 60px;
            height: 700px;
        }

        .ourcontact h1{
        font-size: 50px;
        font-weight: bolder;
          }
          .cclass{
              margin-top: 40px;
              font-weight : bold;
              font-size: 20px;
          }
          .sb{
              margin-left: 150px;
              margin-top: 60px;
              border-radius: 20px;
              font-weight: bold;
              padding: 10px;
              font-size: 20px;
              padding-left: 20px;
              padding-right: 20px;
          }
          .footer{
              height : 40px;
              padding-top : 10px;
              padding-bottom : 10px;
          }
          .Head{
              font-weight: bolder;
              font-size: 50px;
          }
          .a{
             padding-bottom: 125px; 
          }
          .ourservices{
              padding-top: 50px;
          }
          .c{
              padding-bottom : 20px;
          }
          .aboutus h1{
                font-size: 50px;
                padding-top: 100px;
                font-weight: bolder;
          }
          .aboutus{
              height : 700px;
          }
          .abcde{
              background: white;
              height: 500px;
              margin-top: 100px;
          }

          .mycard{
       box-shadow : 0px 1px 36px 5px rgba(0,0,0,0.28);
       padding : 30px;
       border-radius : 5px;
   }

   .mycard p{
       font-size: 20px;
       font-weight: bold;
       padding: 20px;
       padding-top: 60px;
   }
          .write{
              font-size: 50px;
              font-weight: bolder;
              padding-left: 80px;
              padding-top: 200px;
          } 
          .heading{
              font-size: 30px;
              font-style: italic;
          }
         
         </style>
</head>
<body>
    <div class="bgimg">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <div class="container abc">
                 <a href="" class="navbar-brand text-warning font-weight-bold">
                    <span> EASE-ucation </span>
                 </a>

                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">

                     <span class="navbar-toggler-icon"> </span>

                 </button>

                 <div class="collapse navbar-collapse text-center" id="collapsenavbar">
                     <ul class="navbar-nav ml-auto">
                           <li class="nav-item">
                                <a href="#S" class="nav-link text-white"> SERVICES </a>
                           </li>

                           <li class="nav-item">
                               <a href="#A" class="nav-link text-white">  ABOUT </a>
                           </li>

                           <li class="nav-item">
                                <a href="#C" class="nav-link text-white"> CONTACT </a>
                           </li>

                           <li class="nav-item">
                               
                            <div class="dropdown">
                            <a class="btn btn-dark dropdown-toggle " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                LOGIN
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="loginStudent.php"> Student </a>
                                <a class="dropdown-item" href="loginTutor.php"> Tutor </a>
                            </div>
                            </div>
                           </li>
                     </ul>
                 </div>


            </div>
        </nav>

        <button ></button>

          <div class="container text-left headerset text-white">
              <h1 class=""> EASE-ucation</h1>
              <p> Education with EASE!</p>
              <button class="btn btn-dark text-white" > <a href="#S" class="text-white"> Get Started</a> </button>
          </div>

    </div>

    <section class="text-center container ourservices" id="S">
        <h1 class="Head"> SERVICES </h1>
        <p> This is what we are providing....</p>
        <div class="row rowsetting">
            <div class="col-lg-4 col-md-4 col-sm-12 col-10 d-block m-auto a">
                <div class="imgsetting d-block m-auto b">
                    <i class="fa fa-search fa-3x text-info bg-white"></i>
                </div>
                
                <h2> Find a Tutor </h2>
                
                <p>Our website provides the best tutors for you according to your specific needs to ensure that you are acing your subjects , login to EASU-cation today and find the tutors that best match your academic needs.</p>
            </div> 

            <div class="col-lg-4 col-md-4 col-sm-12 col-10 d-block m-auto a">
                <div class="imgsetting d-block m-auto abc">
                    <i class="fa fa-book fa-3x text-info bg-white b"></i>
                </div>
                <h2> Free Notes </h2>
                
                <p>On this site , not only are we providing one on one communication with your chosen tutor , but the ease of FREE and CREDIBLE notes that will help you understand the subject topics in a much better and thoroughgoing way.</p>
            </div> 

            <div class="col-lg-4 col-md-4 col-sm-12 col-10 d-block m-auto c">
                <div class="imgsetting d-block m-auto">
                    <i class="fa fa-cog fa-3x text-info bg-white"></i>
                </div>
                <h2> Platfrom to learn & earn </h2>
                <p>If you are a person who is interested in LEARNING and  EARNING , EASE-ucation is the right choice for you . Our platform will help you learn and earn , the two most important things to strive in life , you can become a tutor by registering online right now and students who are looking for your assistance will come looking for you .</p>
            </div> 
        
        </div>

        
    </section>

    <section class="text-center container-fluid bg-info aboutus" id="A">
       
<div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-5 abcde bg-light mycard">
           <p>


<span class="heading"> EASE-ucation</span> is a platform for diligent students who are looking for assistance in their studies and for teachers who are not hesitant to learn while they earn , we provide a very convenient , trustworthy and Efficient way to connect students and teachers on a single platform . Register now and we guarantee you that EASE-ufication will do its name justice by proving you education at ease .
           </p>
    </div>
    <div class="col-lg-4 text-white write text-left"> What is <br>
        EASE-ucation? </div>
    <div class="col-lg-2"></div>
</div>
        
    </section>

    <section class="text-center container ourcontact" id="C">
        
        <h1 > CONTACT US </h1>
        <p > Give feedback & suggestions. Ask your FAQs and be a part of EASE-ucation family!</p>
        <div class="row">
          <?php

          include 'conn.php';
          
          if(isset($_POST['submit'])){
            extract($_POST);
        
            $sql2 = "INSERT INTO contact values('','$email','$subject','$message')";
             $result = mysqli_query($con,$sql2);

             if($result){
                 $done = 2;
              }
                else{
                  $error[] = 'Failed : Something went wrong';
             }

        }

        if(isset($done)){
           
        ?>
                 <div class="row bg-success text-white container-fluid"> Message successfully sent!</div>
        <?php
        }  else{
        ?>
                  
                  <div class="row bg-danger text-white container-fluid"> <php? 
                   echo $error; ?></div>

          <?php
        }  
        ?>


        </div>
       <div class="row">
           <div class="col-lg-1">

           </div>
           <div class="col-lg-10">
           <form method="POST">
            <div class="form-group text-left cclass">

                <div class="row">
                      <div class="col-lg-6">
                      <Label> Name : </Label>
                  <input type="text" name="name" id="" required class="form-control" >
                  <br>
                      <Label> Email : </Label>
                  <input type="email" name="email" id="" required class="form-control" >
                  <br>
                  <Label> Subject/ Title : </Label>
                  <input type="text" name="subject" id="" required class="form-control" >

                  <button class="btn btn-primary sb " name="submit"> SUBMIT</button>
                      </div>
                      <div class="col-lg-6">
                      <Label> Message/ Description : </Label>
                  <textarea name="message" id="" cols="30" rows="15" class="form-control" required placeholder="">

                  </textarea>
                      </div>
                  </div>
            </div>
        </form>
           </div>
           <div class="col-lg-1"></div>
       </div>
        
    </section>

    <div class="footer bg-dark text-white text-center">
    All Rights Reserved. © 2021 EASE-ucation
    </div>


    <script src="js/all.js"></script>
</body>
</html>


