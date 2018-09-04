<?php
	$uid="";
	$uname="";
	$login = false;
	session_start();
	if(isset($_SESSION['userid']) && isset($_SESSION['username'])){
		$uid = $_SESSION['userid'];
		$uname = $_SESSION['username'];
		$login = true;
		//echo $uid;
	}
	else{
		header("location: home.php");
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Successful</title>

	<!-- Bootstrap core CSS -->

	<!-- Custom styles for this template -->
	<link href="css/full-slider.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style-slider.css">
	<link rel="stylesheet" type="text/css" href="css/custom-navbar.css">


	<link rel="stylesheet" type="text/css" href="css/bootstrap.min1.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min1.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min1.css">
    <script src="js/jquery.min1.js"></script>
    <script src="js/owl.carousel1.js"></script>
    <script src="css/owl.theme.min1.css"></script>
    <script src="css/owl.carousel1.css"></script>
    <script src="js/bootstrap.min1.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style-item1.css">

	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style-slider.css">

	<style type="text/css">

		#nav-item-name{
			font-size: 15px;
			padding-left:6px;
			padding-right: 6px;
		}

		#sliderLink{
			font-size: 12px;
		}
		strike{
			color: red;
			padding-right: 7px;
		}

		body{
			background-color: rgba(44, 62, 80,.2);
		}

		#drowdownMenu{
			padding: 2px;
		}
		#drowdownMenu li{
			margin:2px;
		}
		
		#nav-item-name{
			color: #F1C40F;
		}
		#heading{
			margin-top: 150px;
			text-align: center;
		}
		.isa_success {
			font-size: 60px;
			padding: 10px;
		    color: #4F8A10;
    		background-color: #DFF2BF;
		}

		.btn{
			font-family: Arial, Helvetica, sans-serif;
			width: 100%;
			height: 40px;
			font-size: 20px;
			border: 1px solid black;
		}
		#placeorder:hover,#addmore:hover{
			background: #186A3B;
			color: white;
			border: none;
		}
		a{
			text-decoration: none;
			color: black;
		}


		
	</style>


</head>

<body>

<!-- Navigation  navbar-dark bg-dark-->
	<nav class="navbar navbar-expand-lg navbar-dark  fixed-top" id="navigationbar" style="border-radius: 0px;">
	    <div class="container" id="nav-container">
		    <a class="navbar-brand" id="nav-item-name" href="home.php"><img src="images/logo.png" style="height: 50px; width: 50px;"></a>
		    <h4 id="nav-item-name" style="word-spacing: -5;">Foodie</h4>
		    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarResponsive">
		        <ul class="navbar-nav ml-auto">
			        <li class="nav-item active">
			          <a class="nav-link" href="home.php" id="nav-item-name">Home
			          </a>
			        </li>

		        	<li class="nav-item">
			          <a class="nav-link" id="nav-item-name" href="home.php#about" >About</a>
			        </li>
			        
			        <li class="nav-item">
			          <a class="nav-link" id="nav-item-name" href="home.php#contactus">Contact</a>
			        </li>			        

		        	<li class="nav-item dropdown">
		        		<a class="nav-link dropdown-toggle" id="nav-item-name" href="" data-toggle="dropdown">Menu</a>
		        		<ul class="dropdown-menu" role="menu" aria-labelledby="menu1" id="drowdownMenu">
						    <li role="presentation"><a role="menuitem" href="home.php#availableITEM">Available Menu</a></li>
						    <li role="presentation"><a role="menuitem" href="home.php#specialITEM">Special Menu</a></li>
						    <li role="presentation"><a role="menuitem" href="home.php#discountITEM">Discount Menu</a></li>
						    <li role="presentation" class="divider"></li>
						    <li role="presentation"><a role="menuitem" href="foodbycategory.php?id=1">Pizza Menu</a></li>
						    <li role="presentation"><a role="menuitem" href="foodbycategory.php?id=2">Pasta Menu</a></li>
						    <li role="presentation"><a role="menuitem" href="foodbycategory.php?id=3">Burger Menu</a></li>
						    <li role="presentation"><a role="menuitem" href="foodbycategory.php?id=4">Beverage Menu</a></li>

						</ul>
		        	</li>
			        <li class="nav-item">
			          	<?php 
			        		if($uid == ""){ ?>
			          			<a class="nav-link" id="nav-item-name" href="login.php">login</a> <?php
			        		} 
			        		else { ?>
			        			<li class="nav-item dropdown">
					        		<a class="nav-link dropdown-toggle" id="nav-item-name" href="" data-toggle="dropdown"><?php echo $uname; ?></a>
					        		<ul class="dropdown-menu" role="menu" aria-labelledby="menu1" id="drowdownMenu">
									    <li role="presentation"><a role="menuitem" href="cart.php">Cart</a></li>
									    <li role="presentation" class="divider"></li>
									    <li role="presentation"><a role="menuitem" href="orderHistory.php">History</a></li>
										<li role="presentation" class="divider"></li>
									    <li role="presentation"><a role="menuitem" href="logout.php">logout</a></li>
									</ul>
					        	</li> <?php
			        		}
			        	?>
			        </li>
		        </ul>
		    </div>
	    </div>
	</nav>

	<!-- Page Content -->
	<section class="py-5" id="heading">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
	                <div class="isa_success">
					     <i class="fa fa-check"></i>
					     Added to your CART!
					</div>
	            </div>
			</div>
		</div>	
	</section>

	<section class="py-5">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-3 col-xs-3" align="center"></div>
				<div class="col-md-3 col-sm-3 col-xs-3" align="left">
					  <a class="btn" id="addmore" href="home.php#availableITEM">Add More</a>
	            </div>
				<div class="col-md-3 col-sm-3 col-xs-3" align="left">
					  <a class="btn" id="placeorder" href="cart.php">Place Order</a>
	            </div>
				<div class="col-md-3 col-sm-3 col-xs-3" align="center"></div>

			</div>
		</div>	
	</section>



	<!-- Bootstrap core JavaScript -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>


	<script type="text/javascript">
		var a = $(".navbar").offset().top;

		$(document).scroll(function(){
		    if($(this).scrollTop() > a)
		    {   
		       $('.navbar').css({"background":"rgba(52, 58, 64,.8)"});
		    } else {
		       $('.navbar').css({"background":"transparent"});
		    }
		});

	</script>

</body>

</html>