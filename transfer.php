<style>
<?php
include 'css/style.css';
include 'media.css';
  ?>
</style>
<?php
include 'db.php';
$flag=false;
if (isset($_POST['transfer']))
{
$id=$_POST['id'];
$sender=$_POST['sender'];
$reciever=$_POST["reciever"];
$amount=$_POST["amount"];?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!-- Including the bootstrap CDN -->
    <link rel="stylesheet" href= "https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src= "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"> </script>
    <script src= "https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://anijs.github.io/lib/anicollection/anicollection.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <!--Including style sheet-->
      <link rel="stylesheet" href="index.css">
      <!-- Icon -->
      <link rel="icon" height="50px" href="./images/icon.png">
    </head>
    <body>
    </body>
  </html>
  <?php
  $sql = "SELECT balance FROM customers WHERE id='$id'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  if($amount>$row["balance"] or $row["balance"]-$amount<100){
  echo "<script>swal( 'Error','Insufficient Balance!','error' ).then(function() { window. location = 'viewcustomers.php'; });;</script>";
  
  }
  else{
  
  $sql = "UPDATE `customers` SET balance=(balance-$amount) WHERE id='$id'";
  
  if ($conn->query($sql) === TRUE) {
  $flag=true;
  } else {
  echo "Error updating record: " . $conn->error;
  }
  }
  
  }
  
  } else {
  echo "0 results";
  }
  if($reciever==0)
  {
  echo "<script>swal( 'Error','Select reciever!','error' ).then(function() { window. location = 'customers.php'; });;</script>";
  exit();
  }
  if($flag==true){
  $sql = "UPDATE `customers` SET balance=(balance+$amount) WHERE name='$reciever'";
  if ($conn->query($sql) === TRUE) {
  $flag=true;
  
  }
  
  else {
  echo "Error updating record: " . $conn->error;
  }
  }
  if($flag==true){
  $sql = "INSERT INTO `transfer` (`sender`, `reciever`, `amount`) VALUES ('$sender','$reciever','$amount')";
  if ($conn->query($sql) === TRUE) {
  } else
  {
  echo "Error updating record: " . $conn->error;
  }
  }
  }
  if($flag==true){
  echo "<script>swal('Transfered!', 'Transaction Successfull','success').then(function() { window. location = 'customers.php'; });;</script>";
  }
  elseif($flag==false)
  {
  echo "<script>
  $('#text2').show()
  </script>";
  }
  ?>