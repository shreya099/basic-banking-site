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
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
    body{
    height:500px;
    }
    .main{
    background:none;
    }
    .container{
    position: relative;
    top:-296px;
    margin-left:50px;
    }
    .footer{
    position: relative;
    top:-100px;
    }
    .footer p{
    position: relative;
    top:30px;
    }
    th{
    text-align: justify;
    }
    @media screen and (max-width: 500px) {
    .text,.text1{
    display: none;
    }
    .main{
    
    width:100%;
    margin-top:-135px!important;
    float: left;
    }
    .container{
    position: relative;
    top:77px;
    margin-left:-16px;
    }
    .footer{
    display: none;
    }
    }
    @media screen and (max-width: 800px) and (min-width: 500px){
    .container{
    position: relative;
    top:-656px;
    margin-left:50px;
    }
    
    }
    </style>
  </head>
  <body>
    <div class="text">
      <div class="text1">
        
      </div>
    </div>
    <div class="main">
      <nav class="navbar navbar-expand-md navbar-light fixed-top bg">
        <a class="navbar-brand" href="#"> <span style="color:#ed7d2a; ">Sparks</span><span style="color:#2b468a;">bank</span>     </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php">HOME</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="customers.php">CUSTOMERS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="history.php">HISTORY</a>
            </li>
            
          </ul>
        </div>
      </nav>
      
    </div>
    <div class="container" data-aos="zoom-in">
      <table class="table table-light table-striped">
        
        <tr>
          
          <th>Name</th>
          <th>Email</th>
          <th>Balance</th>
          <th>Select Sender</th>
        </tr>
        <?php
        include('db.php');
        $data="SELECT * from customers";
        $res=mysqli_query($conn,$data);
        while($a=mysqli_fetch_array($res)){;
        ?>
        <tr>
          
          <td><?php echo $a['name'] ?></td>
          <td><?php echo $a['email'] ?></td>
          <td>Rs <?php echo $a['balance']?></td>
          
          <td>
            <button class="btn" name="user">
            <a href="show.php?id=<?php echo $a['id']?>" style="color:#000" name="user"><button class="btn btn-outline-dark">Transfer now</button></a>
            
            </button>
            
          </td>
        </tr>
        <?php }?>
        
      </table>
    </div>
    <div class="footer">
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