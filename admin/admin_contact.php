
     
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>admin/contact </title>
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
include('../connect.php');
include('admin_header.php');
?>
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="bg-appointment rounded" style="background-image:url(../image/court.jpg);">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-lg-6 py-5">
                    <div class="rounded p-5 my-5 text-white" style="background:rgba(55, 55, 63, .7);">
                        <h1 class="text-center text-white mb-4">Contacts</h1>

                        <?php
                        $select_contact = mysqli_query($con, "SELECT * FROM `contacts`") or die('query failed');
                        if(mysqli_num_rows($select_contact) > 0) {
                            while($fetch_contact = mysqli_fetch_assoc($select_contact)) {
                        ?>
                            <div class="box">
                                <p><span>***</span></p>
                                <p>Name: <span><?php echo $fetch_contact['name']; ?></span></p>
                                <p>Email: <span><?php echo $fetch_contact['email']; ?></span></p>
                                <p>Address: <span><?php echo $fetch_contact['address']; ?></span></p>
                                <p>Message: <span><?php echo $fetch_contact['message']; ?></span></p>
                            </div>
                        <?php
                            }
                        } else {
                            echo '<p class="empty">No contact placed yet</p>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>