<!DOCTYPE html>
<html lang="en">

<head>
  <title>Wellcome</title>
  <?php include 'includes/menu.php' ?>
  <?php include 'includes/links.php' ?>

  <?php include 'includes/header.php' ?>

</head>

<body>
  <div class="container-fluid">
    <!--slider-->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner mt-3">
        <div class="carousel-item active ">
          <img src="images/slider/slider1.jpg" class="d-block w-100" alt="Server slow hai">
        </div>
        <div class="carousel-item">
          <img src="images/slider/slider2.png" class="d-block w-100" alt="Server slow hai">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

  <!--main body-->
  <div class="container mt-5">
  
  <h1 style="text-align:center; font-weight:bold;color:gray;">Our Services</h1>
  <hr/>
  <h6 style="text-align:center; font-weight:bold;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi semper in magna quis tincidunt. Donec at nisi et eros blandit</h6>
  <h6 style="text-align:center; font-weight:bold;">elementum fermentum eget augue</h6>
  

  <br/><br/><br/>
  
  <h1 style="text-align:center; font-weight:bold;color:gray;">Our Team</h1>
  <hr/>

  <div class="card-deck">
  <div class="card">
    <img src="images/card/d1.jpg" class="card-img-top" alt="server Slow hai">
    <div class="card-body">
      <h5 class="card-title">David Kanuel</h5>
      <p class="card-text">Facial Surgan</p>
    </div>
  </div>
  <div class="card">
    <img src="images/card/d2.jpg" class="card-img-top" alt="server Slow hai">
    <div class="card-body">
      <h5 class="card-title">David Kanuel</h5>
      <p class="card-text">Facial Surgan</p>
    </div>
    
  </div>
  <div class="card">
    <img src="images/card/d3.jpg" class="card-img-top" alt="server Slow hai">
    <div class="card-body">
      <h5 class="card-title">Harry</h5>
      <p class="card-text">Facial Surgan</p>
    </div>
  </div>
  <div class="card">
    <img src="images/card/d4.jpg" class="card-img-top" alt="server Slow hai">
    <div class="card-body">
      <h5 class="card-title">Potter</h5>
      <p class="card-text">Facial Surgan</p>
    </div>
  </div>
</div>

<br/><br/><br/>

<h1 style="text-align:center; font-weight:bold;color:gray;">Our Latest Blog</h1>
  <hr/>
  <h6 style="text-align:center; font-weight:bold;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sollicitudin nisi id consequat bibendum. Phasellus at convallis elit.</h6>
  <h6 style="text-align:center; font-weight:bold;">In purus enim, scelerisque id arcu vitae</h6>
  <br/><br/>
  </div>

  <?php include 'includes/footer.php' ?>
</body>

</html>