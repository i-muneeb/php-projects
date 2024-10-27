<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Lawyer/Login </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="keywords">
    <meta name="description">

    <!---Logo --->
    <link rel="shortcut icon" href="image/hammer.png"/>

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Roboto:wght@300;500;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<?php
      include('header.php');
    ?>
   
    <div class="container-fluid bg-page-header" style="margin-bottom: 90px;  background-image:url(image/contact.jpg); ">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-4 text-white text-uppercase">Login</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Login</p>
                </div>
            </div>
        </div>
    </div> 

    <!-- Contact Start -->
    <div class="container-fluid py-5 ">
            <div class="text-center pb-2">
                <h1 class="text-uppercase">Login</h1>
                <h5 class="mb-4">Login with correct email and password</h5>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form  method="post" action=" ">
                            <div class="control-group">
                            <input type="email" class="form-control p-4" id="" name="email" placeholder="Email" required="required" data-validation-required-message="Please enter your email " />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                            <input type="password" class="form-control p-4" id="" name="pass" placeholder="Passwword" required="required" data-validation-required-message="Please enter your Password " />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button name="btn" class="btn btn-primary btn-block" type="submit" id="sendMessageButton">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
<?php include('footer.php');?>
   
    <!-- Back to Top -->
    <a href="#" class="btn btn-primary px-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>
<?php 
    include('connect.php');
      if(isset($_POST['btn'])){
        $email= $_POST['email'];
        $pass= $_POST['pass'];
        $sql= "INSERT into `login` values ('','".$email."','".$pass."')";
        $check= mysqli_query($con,$sql);
        if($check){
            echo '<script>alert("You Are login now")</script>';
           }
        else{
           echo '<script> alert:Data Not Found; </script>';
        }
      }
?>
