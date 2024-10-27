<?php
    include('../connect.php');
   if(isset($_POST['btn'])){
  
      $lawyer_name = $_POST['name'];
      $contact_number = $_POST['contact'];
      $image = $_FILES['image']['name'];
      $image_tmp_name = $_FILES['image']['tmp_name'];
      $image_folder = '../upload_img/' . $image;
  
      if ($_FILES['image']['size'] > 2000000) {
          echo 'Image size is too large';
          echo 'Image Path: ' . $image_folder;

      } else {
          if (move_uploaded_file($image_tmp_name, $image_folder)) {
              $sql = "INSERT INTO lawyers (lawyer_name, contact_number, image) VALUES ('$lawyer_name', '$contact_number', '$image')";
              if (mysqli_query($con, $sql)) {
                  echo 'Insert successfully';
              } else {
                  echo 'Failed to insert into the database';
              }
          } else {
              echo 'Failed to upload image';
          }
      }
  }

  if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
    $res=  mysqli_query($con, "DELETE FROM `lawyers` WHERE lawyer_id = '$delete_id'") or die ('query failed');
    if($res){
        header('location:admin_insert.php');
    }
    else{
        echo "Page Not Found";
    }
  }
    ?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Lawyer/insert </title>
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
<?php include('admin_header.php');?>

<div class="container-fluid bg-page-header" style="margin-bottom: 90px;  background-image:url(../image/contact.jpg); ">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-3 text-white text-uppercase">admin</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">insert</p>
                </div>
            </div>
        </div>
    </div>

<?php
error_reporting(0);
if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
    mysqli_query($con, "DELETE FROM `lawyers` WHERE lawyer_id = '$delete_id'") or die ('query failed');
    header('location:insert.php');
  }
  
  ?>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <form action="" method="POST" enctype="multipart/form-data"> <!-- Added enctype for file upload -->
               
                <label for="">Name</label>
                    <input type="text" name="name" class="form-control" id="">
                    <label for="">Contact</label>
                    <input type="number" name="contact" class="form-control" id="">
                    <label for="">Image</label>
                    <input type="file" name="image" class="form-control" id=""> <!-- Input for image file -->
                    <br>
                    <button type="submit" name="btn" class="btn btn-outline-primary">Insert Data</button>   
                </form>         
            </div>
        </div>
    </div> <div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center pb-2">
            <h6 class="text-uppercase">Our Lawyers</h6>
            <h1 class="mb-4">Meet Our Lawyers</h1>
        </div>
        <div class="row">
            <?php
            $sql = "SELECT * FROM lawyers";
            $result = mysqli_query($con,$sql);
                if (mysqli_num_rows($result) ) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $lawyer_name = $row['lawyer_name'];
                    $contact_number = $row['contact_number'];
                    $image = $row['image'];

                    echo '<div class="col-12 col-md-4">';
                    echo '<div class="card mb-4">';
                    echo '<img style="height:300px;" src="../upload_img/' . $image . '" class="card-img-top" alt="' . $lawyer_name . '">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">' . $lawyer_name . '</h5>';
                    echo '<p class="card-text">' . $contact_number . '</p>';
                    echo '</div>';
                    echo '<div class="card-footer">';
                    echo'<span> </span>';
                    ?>
                  <a href="admin_insert.php?delete= <?php echo $row['lawyer_id'] ?>" 
                  class="btn btn-outline-danger">Delete</a>
                   
                   <?php
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

   
</body>
</html>