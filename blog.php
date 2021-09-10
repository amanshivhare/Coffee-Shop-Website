<?php
//Initialize Session
session_start();

if (isset($_SESSION['login'])) {

    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The Perfect Cup - Blog</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand">The Perfect Cup</div>
    <div class="address-bar">47 A Sheetal Nagar Near Bombay Hospital | Indore 452010 | Temporarily closed </div>

    <!-- Navigation -->
    <?php require_once 'nav.php'; ?>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
				
				<h2 class="text-center">Welcome <?php echo $fname; echo " "; echo $lname; ?> - <a href="logout.php">Logout</a></h2>
				
                    <hr>
                    <h2 class="intro-text text-center">The Perfect Cup
                        <strong>blog</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-1.jpg" alt="">
                    <h2>COCONUT OIL COFFEE
                        <br>
                        <small>July 07, 2021</small>
                    </h2>
                    <p><strong>How to Make Coconut Oil Coffee</strong><br>
					   First, you start by brewing your coffee as you normally do. Then I like using a blender because it helps the stiff coconut oil to melt more quickly and smoothly with the hot coffee in the blender. Pour the coffee into the blender and add the coconut oil.<br>
					   Blend it up until you notice that the coffee reaches a lighter brown color and it’s basically done!<br><br>
					   Top Tips for Making This Coconut Oil Coffee Recipe.<br><br>
						<strong>(1)</strong>&nbsp;&nbsp;&nbsp;I love adding coconut milk to it and some warm spices like cayenne and/or cinnamon.<br>
						<strong>(2)</strong>&nbsp;&nbsp;&nbsp;You can add some sweetener of your choice like sugar, honey, maple syrup or stevia.<br>
						<strong>(3)</strong>&nbsp;&nbsp;&nbsp;It’s very customizable so you can even add some flavored syrups or tailor it to your own coffee tastes.<br> It can also work well if you cool it in the fridge.<br>
						<strong>(4)</strong>&nbsp;&nbsp;&nbsp;For best results, I strongly urge you to find virgin coconut oil that is cold pressed and unrefined.<br> That way you know it’s not processed or chemically treated coconut oil.
					</p>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-2.jpg" alt="">
                    <h2>IRISH COFFEE 
                        <br>
                        <small>July 07, 2021</small>
                    </h2>
                    <p><strong>How to Make Irish Coffee<br><br>
								Ingredients<br><br></strong>
								<strong>(1)</strong> 2 teaspoons packed brown sugar<br>    
								<strong>(2)</strong> 4 ounces strong hot coffee<br>    
								<strong>(3)</strong> 1 1/2 ounces Irish whiskey<br> 
								<strong>(4)</strong> 1 ounce heavy cream, lightly whipped<br> 
								<strong>(5)</strong>Stir until the sugar is dissolved. <br> 
								<strong>(6)</strong>Float the lightly whipped heavy cream on top <br>by slowly pouring it over the back of a spoon.<br>  
								<strong>(7)</strong>Do not stir. Instead, drink the Irish coffee through the cream.<br> <br> 
								<strong>Enjoy.</strong>
					</p>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-3.jpg" alt="">
                    <h2>FROZEN CARAMEL LATTE 
                        <br>
                        <small>July 07, 2021</small>
                    </h2>
                    <p><strong>How to Make Frozen Caramel Latte.<br><br>
					Ingredients</strong><br> <br> 
					<strong>•</strong> ¼ c. PJ’s Iced Coffee Concentrate<br> 
					<strong>•</strong> 5 tbsp. caramel sundae syrup, <br> plus additional for garnish<br> 
					<strong>•</strong> 1 tbsp. vanilla flavored syrup<br> 
					<strong>•</strong> ¼ c. cold milk<br> 
					<strong>•</strong> 1 ½ c. ice cubes<br> 
					<strong>•</strong> Whipped cream, for garnish<br> 
					Yield: 2 Servings<br> <br>
					
					<strong>Preperation</strong><br><br>

					Place PJ’s Iced Coffee Concentrate, caramel sundae syrup, vanilla syrup, and cold milk in blender container.<br> Cover and blend on medium speed until combined. Add ice cubes. Process until thick and slushy. Pour into tall glasses.<br> Top with whipped cream, drizzle with caramel syrup, and serve.
					
					</p>
                    <hr>
                </div>
               
            </div>
        </div>

    </div>
    <!-- /.container -->

	<!-- Modal 1 -->
	<div id="myModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Coconut Oil Coffee</h4>
		  </div>
		  <div class="modal-body">
			<p>Sample Text.</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>
	
	<!-- Modal 2 -->
	<div id="myModal2" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Irish Coffee</h4>
		  </div>
		  <div class="modal-body">
			<p>Sample Text.</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>
	
	<!-- Modal 3 -->
	<div id="myModal3" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Frozen Caramel Latte</h4>
		  </div>
		  <div class="modal-body">
			<p>Sample Text.</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>
	
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; The Perfect Cup 2021</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

<?php

} else {
    header("location:login.php ");
}
?>
