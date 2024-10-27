<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Lawyer</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="keywords">
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
    <?php include('header.php'); ?>

    <div class="container-fluid bg-page-header" style="margin-bottom: 90px; background-image:url(image/book.jpg); ">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-3 text-white text-uppercase">Our Lawyers</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Our Lawyers</p>
                </div>
            </div>
        </div>
    </div>
 
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center pb-2">
                <h6 class="text-uppercase">Our Lawyers</h6>
                <h1 class="mb-4">Meet Our Lawyers</h1>
            </div>
            <div class="row">
                <?php
                // Include your database connection file
                include('connect.php');

                // Create and execute a SELECT query to retrieve lawyer data
                $sql = "SELECT * FROM lawyers";
                $result = mysqli_query($con, $sql);

                // Check if there are rows in the result
                if (mysqli_num_rows($result) ) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $lawyer_name = $row['lawyer_name'];
                        $contact_number = $row['contact_number'];
                        $image = $row['image'];

                        // Display lawyer information within your HTML structure
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

    <?php include('footer.php'); ?>
</body>
</html>
