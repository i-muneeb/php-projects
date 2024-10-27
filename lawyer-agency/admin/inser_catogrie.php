<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>catagrie insert </title>
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
    <link href="../css/style.css" rel="stylesheet">
</head>
<body>
    <?php
    include('admin_header.php');
    ?>

<div class="container-fluid bg-page-header" style="margin-bottom: 90px;  background-image:url(../image/contact.jpg); ">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-3 text-white text-uppercase">catogrie</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">insert</p>
                </div>
            </div>
        </div>
    </div>



<?php
if (isset($_POST['btn'])) {
    // Include your database connection file
    include('../connect.php');

    $full_name = $_POST['name'];
    $contact_number = $_POST['contact'];
    $address = $_POST['address'];
    $fee = $_POST['fee'];
    $description = $_POST['description'];
    $cases_handled = $_POST['casesHandled'];
    $rating = $_POST['rating'];

    $category = $_POST['category'];

    // Check if an image is selected and process the upload
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $image_name = $_FILES['image']['name'];
        $image_tmp_name = $_FILES['image']['tmp_name'];
        $image_folder = 'upload-img/' . $image_name;

        
        // Move the uploaded image to the destination folder
        if (move_uploaded_file($image_tmp_name, $image_folder)) {
            // Insert the data into the corresponding table based on the selected category
            $table_name = '';
            switch ($category) {
                case 'divorce':
                    $table_name = 'divorce_lawyers';
                    break;
                case 'criminal':
                    $table_name = 'criminal_lawyers';
                    break;
                case 'taxlaw':
                    $table_name = 'tax_lawyers';
                    break;
                default:
                    // Handle other categories or errors
                    break;
            }
            
            if (!empty($table_name)) {
                $sql = "INSERT INTO $table_name (full_name, contact_number, address, fee, description, cases_handled, rating, image) VALUES ('$full_name', '$contact_number', '$address', '$fee', '$description', '$cases_handled', '$rating', '$image_name')";
            
                if (mysqli_query($con, $sql)) {
                    // Redirect to the respective category page
                    echo "<script>alert('Your data inserted');</script>"; 
                    //header("Location: inser_catogrie.php");
                   // exit();
                } else {
                    echo 'Failed to insert data into the database';
                }
            }
        } else {
            echo 'Failed to upload the image.';
        }
    } else {
        echo 'No image selected or an error occurred during image upload.';
    }
}
?>
        <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center pb-2">
                <h6 class="text-uppercase">admin insert categorie</h6>
                <h1 class="mb-4">Divorce,Taxlaw,Criminal lax</h1>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="contact-form">
                    <form action="" method="POST" enctype="multipart/form-data" class="contact-form">
    <div class="form-row">
        <div class="col-sm-6 control-group">
            <input type="text" name="name" class="form-control p-4" id="name" placeholder="Full Name">
        </div>
        <div class="col-sm-6 control-group">
            <input type="number" name="contact" class="form-control p-4" id="contact" placeholder="Contact Number">
        </div>
    </div>
    <div class="form-row">
        <div class="col-sm-6 control-group">
            <input type="text" name="address" class="form-control p-4" id="address" placeholder="Address">
        </div>
        <div class="col-sm-6 control-group">
            <input type="number" name="fee" class="form-control p-4" id="fee" placeholder="Fee">
        </div>
    </div>
    <div class="form-group">
        <textarea name="description" class="form-control p-4" id="description" placeholder="Description"></textarea>
    </div>
    <div class="form-row">
        <div class="col-sm-6 control-group">
            <input type="number" name="casesHandled" class="form-control p-4" id="casesHandled" placeholder="Cases Handled">
        </div>
        <div class="col-sm-6 control-group">
            <input type="number" name="rating" class="form-control p-4" id="rating" placeholder="Rating">
        </div>
    </div>
    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" name="image" class="form-control" id="image">
    </div>
    <div class="form-group">
        <label for="category">Category</label>
        <select name="category" class="form-control" id="category">
            <option value="divorce">Divorce</option>
            <option value="criminal">Criminal</option>
            <option value="taxlaw">Tax Law</option>
        </select>
    </div>
    <button type="submit" name="btn" class="btn btn-outline-primary">Insert Data</button>
</form>
       
            </div>
        </div>
    </div>

    </div>
    </div>
    </div>
    </div>
</body>
</html>
