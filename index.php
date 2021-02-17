<style>
<?php
include 'css/style.css';
include 'media.css';
?>
</style>
<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/3e0c251e14.js" crossorigin="anonymous"></script>
    
    
    
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  </head>
  <body>
    <div class="text">
      <div class="text1">
        <h3  data-aos="fade-right">Welcome to the sparks bank</h3>
        <p  data-aos="fade-down"  data-aos-delay="3000">Fastest way to send and receive money</p>
        <a href="customers.php"><button  data-aos="fade-left" data-aos-delay="1000" class="text-white">Transfer money now</button>
        </a>
      </div>
    </div>
    <div style="display: none;" class="main1">
      <nav class="navbar navbar-expand-md navbar-light fixed-top bg">
        <a class="navbar-brand" href="#"> <span style="color:#ed7d2a; ">Sparks</span><span style="color:#2b468a;">bank</span>     </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="customers.php">CUSTOMERS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="history.php">HISTORY</a>
            </li>
            
          </ul>
        </div>
      </nav>
      
    </div>
    
    <div class="main">
      <nav class="navbar navbar-expand-md navbar-light fixed-top bg">
        <a class="navbar-brand" href="#"> <span style="color:#ed7d2a; ">Sparks</span><span style="color:#2b468a;">bank</span>     </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="customers.php">CUSTOMERS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="history.php">HISTORY</a>
            </li>
            
          </ul>
        </div>
      </nav>
      
    </div>
    <div class="image" style="display: none;">
      
    </div>
    <div class="container-fluid footer">
      
      <p>Copyright ©2021 All rights reserved | Made with ❤ by Shreya</p>
      
    </div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init({
    duration: 3000,
    once: true,
    });
    </script>
    
  </body>
</html>