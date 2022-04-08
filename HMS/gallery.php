<!DOCTYPE html>
<html lang="en">

<head>
    <title>Our Gallery</title>
    <?php include 'includes/links.php' ?>
    <?php include 'includes/menu.php' ?>
    <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
    <style>
    .imga
    {   
    border-radius:8%; 
    }
    </style>
</head>

<body>
    <!--Header file link-->
    <?php include 'includes/header.php' ?>
    <!-- banner for page-->
    <div class="img-fluid mx-auto" style="background-image: url(images/banner/ban1.jpg)" id="banner">
        <div class="banner-text">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="banner-heading">
                            <h1 style="margin-top:150px;font-family:calibri; font-weight:bold;">Photo Gallery</h1>
                            <hr />
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- Col end -->
                </div>
                <!-- Row end -->
            </div>
            <!-- Container end -->
        </div>
    </div>
    <div class="container mt-3">
    </div>
        <!--footer hai ye -->
        <?php include 'includes/footer.php' ?>

</body>

</html>