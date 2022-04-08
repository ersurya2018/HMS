<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact Us</title>
    <?php include 'includes/links.php' ?>
    <?php include 'includes/menu.php' ?> 
    <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
</head>
<body>
    <!--Header file link-->
    <?php include 'includes/header.php' ?>
    <div class="container-fluid">
    <div class="row" id="main">
        <div class="col-sm-12"></div>
    </div>
</div>
<!-- banner for page-->
<div class="img-fluid mx-auto" style="background-image: url(images/banner/ban2.jpg)" id="banner">
        <div class="banner-text">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="banner-heading">
                            <h1 style="margin-top:150px;font-family:calibri; font-weight:bold;">Contact Us</h1>
                            <hr/>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
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
<br/>
<div class="container mt-3" id="gouter">
<h1 style="text-align:center; font-weight:bold;color:gray;">Contact Us</h1>
<hr/>
<br/>
<div class="row mt-3">
    <div class="col-sm-6">
    <h3 style=" font-weight:bold;color:gray;">Enquiry</h3>
<hr/> 
    <ul class="footer-links" id="fflink">
        <li><span class="fa fa-envelope-o" style="color:black;font-size:25px;"></span>  &nbsp;&nbsp;<span style="font-family:calibri;">hms@gmail.com</span></li>
        <li><span class="fa fa-mobile" style="color:black;font-size:40px;"></span>  &nbsp;&nbsp;<span style="color:black; font-weight: bold;">+91 675643584</span></li>
        <li><span class="fa fa-mobile" style="color:black;font-size:40px;"></span>  &nbsp;&nbsp;<span style="color:black; font-weight: bold;">+91 9799789</span></li>
    </ul>
    <h3 style=" font-weight:bold;color:gray;">Address</h3>
<hr/> 
    <ul class="footer-links" id="fflink">
    <li><span class="fa fa-map-marker" style="color:black;font-size:25px;"></span>  &nbsp;&nbsp;<span style="font-family:calibri;font-size:17px;">Lucknow</a><span></li>
    </ul> 
    </div>
    <div class="col-sm-6">
    <img src="images/contact.jpg" height="400px" width="500px" class="img-fluid img"/>
    </div>

</div>
<div class="row mt-3" style="background-color:#69F0AE;border-radius:10px; width:100%;"><p class="mx-auto mt-1" style="font-family:calibri; font-size:20px;color:white;">Location</p></div>
<div class="row">
    <div class="col-sm-6">
        <div class="row mt-3 location"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d227822.55036212178!2d80.80242423007235!3d26.848622991220175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfd991f32b16b%3A0x93ccba8909978be7!2sLucknow%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1646662578043!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></iframe>
        </div>
    </div>
    <div class="col-sm-1"></div>
    <div class=cal-sm-5>
        <form method="post" action="codecontact.php">
            <table>
                <tr>
                    <td>Enter Name:</td>
                    <td><input type="text" name="name"/></td>
                </tr>
                <tr>
                    <td>Email Address:</td>
                    <td><input type="text" name="email"/></td>
                </tr>
                <tr>
                    <td>Mobile Number:</td>
                    <td><input type="text" name="mob"/></td>
                </tr>
                <tr>
                    <td>Enter Message:</td>
                    <td><textarea name="msg"></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="sub" value="Send Message"/></td>
                </tr>
            </table>
        </form>
    </div>
</div>
</div>

    <?php include 'includes/footer.php' ?>
    
</body>
</html>
