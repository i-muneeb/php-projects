<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Lawyer/feedback </title>
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
<?php
include('connect.php'); 
if(isset($_POST['btn'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $feed = $_POST['feedback'];
    $sql = "INSERT INTO `feedback` VALUES ('','".$name."','".$email."','".$feed."')";
    $res = mysqli_query($con, $sql);

    if ($res) {
        echo '<script>alert("Your Feedback Message has been submitted")</script>';
    } else {
         echo "Failed to insert data: " . mysqli_error($con);
    }
} 
?>
    
    <div class="container-fluid bg-page-header" style="margin-bottom: 90px;  background-image:url(image/contact.jpg); ">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-3 text-white text-uppercase">Feedback</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Feedback</p>
                </div>
            </div>
        </div>
    </div> 

    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center pb-2">
                <h1 class="text-uppercase">Feedback</h1>
                <h5 class="mb-4">Share your experience</h5>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form  method="post" action=" ">
                            <div class="form-row">
                                <div class="col-md-12 control-group">
                                <input type="text" class="form-control p-4" id="" name="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                    </div>
                            <div class="control-group">
                            <input type="email" class="form-control p-4" id="" name="email" placeholder="Email" required="required" data-validation-required-message="Please enter your email " />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                            <textarea class="form-control p-4" rows="6" id="" name="feedback" placeholder="Feedback" required="required" data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button name="btn" class="btn btn-primary btn-block" type="submit" id="sendMessageButton">Send Your Feedback</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6" style="min-height: 400px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <iframe style="width: 100%; height: 95%; object-fit: cover;"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3616.000465550969!2d67.06286237443456!3d25.000100139657555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb34119e8d20e11%3A0x3586f7b7c73d4baf!2sAptech%20Learning%20Surjani%20Center!5e0!3m2!1sen!2s!4v1699630172156!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                        frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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