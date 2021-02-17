<style>
<?php
include 'css/style.css';
include 'css/style1.css';
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
		
		
		</style>
	</head>
	<body>
		<?php
		include('db.php');
		if(isset($_GET['id']))
		{
		$id=$_GET['id'];
		$d="SELECT * from customers where id= $id";
		$res=mysqli_query($conn,$d);
		$x=mysqli_fetch_array($res);
		
		}
		?>
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
		<div class="m" >
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
		<img src="https://image.freepik.com/free-vector/money-transfer-abstract-concept-illustration-credit-card-transfer-digital-payment-method-online-cashback-service-electronic-bank-transaction-sending-money-worldwide_335657-926.jpg" width="300px" data-aos="fade-right">
		<div class="container" data-aos="fade-left"  data-aos-delay="1000">
			<h3>Customer Details</h3>
			<ul class="list-group list-group-horizontal">
				<li class="list-group-item">name</li>
				<li class="list-group-item"  name="sender"><?php echo $x['name'] ?></li>
			</ul>
			<ul class="list-group list-group-horizontal-sm">
				<li class="list-group-item">email</li>
				<li class="list-group-item"><?php echo $x['email'] ?></li>
				
			</ul>
			<ul class="list-group list-group-horizontal-sm">
				<li class="list-group-item">balance</li>
				<li class="list-group-item"><?php echo $x['balance']?></li>
				
			</ul>
		</div>
		<img src="https://image.freepik.com/free-vector/online-banking-technology-e-wallet-e-payment-internet-app-money-internet-withdraw-smartphone-application-monetization-ecommerce-design-element_335657-2642.jpg" width="300px" style="margin-left:690px;position: relative;top:-139px" data-aos="fade-right"  data-aos-delay="2000">
		<form action="transfer.php" method="POST">
			<div class="container1" data-aos="fade-left"  data-aos-delay="3000">
				<h3>Money Transfer</h3>
				<ul>
					<input type="text" class="form-control" name="id"  value="<?php echo $x['id']?>" style="border: 1px solid #eaebeb; display: none;">
				</ul>
				
				<ul class="list-group list-group-horizontal">
					<li class="i list-group-item">sender</li>
					<li class="i list-group-item"><input type="text" name="sender" value="<?php echo $x['name']?>" style="background: transparent; color:#fff"></li>
				</ul>
				<ul class="list-group list-group-horizontal-sm">
					<li class="list-group-item i">select receiver</li>
					<li class="list-group-item i"><select name="reciever" class="form-control" required="">
						<option value="0">Select</option>
						<?php
						include 'db.php';
						$res = mysqli_query($conn, "SELECT * FROM customers WHERE id!='$id'");
						while($row = mysqli_fetch_array($res)) {
						echo("<option> "."  ".$row['name']."</option>");
						}
						?>
						
					</select></li>
					
				</ul>
				<ul class="list-group list-group-horizontal-sm">
					<li class="list-group-item i">amount to be transferred</li>
					<li class="list-group-item i"><input type="number" id="myNumber" name="amount" required=""></li>
					
				</ul>
				<button value="transfer" name="transfer">Transfer</button>
			</div>
		</form>
		<form action="transfer.php" method="POST">
			<div class="container0" data-aos="fade-left"  data-aos-delay="3000"  style="display: none;">
				<h3>Money Transfer</h3>
				<ul>
					<input type="text" class="form-control" name="id"  value="<?php echo $x['id']?>" style="border: 1px solid #eaebeb; display: none;">
				</ul>
				
				<ul class="list-group list-group-horizontal">
					<li class="i list-group-item">sender</li><br>
					<li class="i list-group-item"><input type="text" name="sender" value="<?php echo $x['name']?>" style="background: transparent; color:#fff"></li>
				</ul>
				<ul class="list-group list-group-horizontal-sm">
					<li class="list-group-item i">select reciever</li>
					<li class="list-group-item i"><select name="reciever" class="form-control" required="">
						<option value="0">Select</option>
						<?php
						include 'db.php';
						$res = mysqli_query($conn, "SELECT * FROM customers WHERE id!='$id'");
						while($row = mysqli_fetch_array($res)) {
						echo("<option> "."  ".$row['name']."</option>");
						}
						?>
						
					</select></li>
					
				</ul>
				<ul class="list-group list-group-horizontal-sm">
					<li class="list-group-item i">amount to be transferred</li>
					<li class="list-group-item i"><input type="number" id="myNumber" name="amount" required=""></li>
					
				</ul>
				<button value="transfer" name="transfer">Transfer</button>
			</div>
		</form>
		<script>
		function myFunction() {
		document.getElementById("myNumber").stepUp(5);
		}
		</script>
		<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
		<script>
		AOS.init({
		duration: 3000,
		once: true,
		});
		</script>
		
	</body>
</html>