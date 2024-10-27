<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Lawyer/home</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta  name="keywords">
    <meta  name="description">

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
    <!-- Header Start -->
    <?php
      include('header.php');
    ?>
    <!-- Header End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="image/carousel-1.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Best Law Agency</h4>                        
                         <h3 class="display-2 text-capitalize text-white mb-4">Our fighting Is for your justice</h3>                     
                          <a class="btn btn-primary py-3 px-5 mt-2" href="#appoint">Get An Appointment</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="image/carousel-2.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Results You Deserve</h4>
                            <h3 class="display-2 text-capitalize text-white mb-4">We prepared to oppose for you</h3>
                            <a class="btn btn-primary py-3 px-5 mt-2" href="contact.php">Call Us Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-lg btn-secondary btn-lg-square">
                    <span class="carousel-control-prev-icon"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-lg btn-secondary btn-lg-square">
                    <span class="carousel-control-next-icon"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-5">
                    <img class="img-fluid rounded d-none d-lg-flex animated zoomIn" src="image/about.jpg" alt="">
                </div>
                <div class="col-lg-7 mt-4 mt-lg-0">
                    <h2 class="position-relative text-center bg-white text-primary rounded p-3 mt-4 mb-4 d-none d-lg-block" style="width: 350px; margin-left: -205px;">25 Years Experience</h2>
                    <h6 class="text-uppercase">Learn About Us</h6>
                    <h1 class="mb-4">We Provide Reliable And Effective Legal Services</h1>
                    <p>Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est dolor</p>
                    <a href="about.php" class="btn btn-primary mt-2">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Appointment Start -->
    <div class="container-fluid py-5" id="appoint">
        <div class="container py-5">
            <div class="bg-appointment rounded" style="background-image:url(image/court.jpg);">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-lg-6 py-5">
                        <div class="rounded p-5 my-5" style="background: rgba(55, 55, 63, .7);">
                            <h1 class="text-center text-white mb-4">Get An Appointment</h1>
                            <form method="POST">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control border-0 p-4" placeholder="Your Name" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control border-0 p-4" placeholder="Your Email" required="required" />
                                </div>
                                <div class="form-row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="date" id="date" data-target-input="nearest">
                                                <input type="date" name="date"  class="form-control border-0 p-4 datetimepicker-input" placeholder="Select Date" data-target="#date" data-toggle="datetimepicker"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="time" id="time" data-target-input="nearest">
                                                <input type="text" name="time" class="form-control border-0 p-4 datetimepicker-input" placeholder="Select Time" data-target="#time" data-toggle="datetimepicker"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <select class="custom-select border-0 px-4" name="service" style="height: 47px;">
                                        <option selected>Select A Service</option>
                                        <option value="1">Tax Law</option>
                                        <option value="2">Divorce</option>
                                        <option value="3">Criminal</option>
                                    </select>
                                </div>
                                <div>
                                    <button class="btn btn-primary btn-block border-0 py-3 "  name="btn" type="submit">Get An Appointment</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->
      <!-----Php work for appointment------>
         
       <?php
           include('connect.php');
           if(isset($_POST['btn'])) {
           $name= $_POST['name'];
           $email= $_POST['email'];
           $date= $_POST['date'];
           $time= $_POST['time'];
           $service= $_POST['service'];

           $query= "INSERT INTO `appointment` VALUES ('','".$name."','".$email."','".$date."','".$time."','".$service."')";
           $final= mysqli_query($con,$query);
           if($final){
            echo '<script>alert("Your Appointment Request Has been submited.We will inform you later")</script>';
           }         
           else{
            echo '<script>alert("Your Appointment Request Has not Submitd.Try Later")</script>';
           }
        }    
            ?>
 


    <!-- Action Start -->
    <div class="container-fluid py-5" style="">
        <div class="container py-5">
            <div class="bg-action rounded" style="height: 500px; background-image:url(image/contact.jpg); ">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-lg-7 text-center">
                        <h1 class="text-white mb-4">Let's get started. Call us now for a Free Consultation</h1>
                        <a class="btn btn-primary py-3 px-5 mt-2" href="contact.php">Call Us Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Action End -->


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center pb-2">
                <h6 class="text-uppercase">Our Lawyers</h6>
                <h1 class="mb-4">Meet Our Lawyers</h1>
            </div>
            <div class="row">
                <?php
                $sql = "SELECT * FROM lawyers";
                $result = mysqli_query($con, $sql);
                    if (mysqli_num_rows($result) ) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $lawyer_name = $row['lawyer_name'];
                        $contact_number = $row['contact_number'];
                        $image = $row['image'];

                        echo '<div class="col-12 col-md-4">';
                        echo '<div class="card mb-4">';
                        echo '<img style="height:300px;" src="upload_img/' . $image . '" class="card-img-top" alt="' . $lawyer_name . '">';
                        echo '<div class="card-body">';
                        echo '<h5 class="card-title">' . $lawyer_name . '</h5>';
                        echo '<p class="card-text">' . $contact_number . '</p>';
                        echo '</div>';
                        echo '<div class="card-footer">';
                        echo '<a href="discription.php" class="btn btn-primary">View Profile</a>';
                        echo '<div class="team-social">';
                        echo '<a href="#" class="btn btn-link"><i class="fab fa-facebook-f"></i></a>';
                        echo '<a href="#" class="btn btn-link"><i class="fab fa-twitter"></i></a>';
                        echo '<a href="#" class="btn btn-link"><i class="fab fa-linkedin-in"></i></a>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo '<p>No lawyers found.</p>';
                }

                // Close the database connection
                mysqli_close($con);
                ?>
            </div>
        </div>
    </div>

    <!-- Team End -->





    <!-- Footer Start -->
<?php
       include('footer.php');
?>   
       
    <!-- Footer End -->


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

    echo  '<div class="team-item text-center bg-white rounded overflow-hidden pt-4">';
?>