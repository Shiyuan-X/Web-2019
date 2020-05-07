<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<style type="text/css">
		h2 { color: black;
			background-color: grey;
			text-align: center;}
		a:link {color: blue}
		a:visted {color: blue}
		a:hover {color: black ; font-weight: bold;}
		h2 {text-align: center;}
		h6 {text-align: center;}
		p {text-align: center;}
		body {background-color: white}
	</style>

</head>
<body>

	<header>
		<nav>
			

					<form action="/web2019/search_result.php" method="POST" align="center">

						
						<button onmousedown="window.location.href='/web2019/index.php'"	
								title="home" >
							<img src="/web2019/icon/Home.png"
									width="60px">
							<h1>HOME</h1>
						</button>

					<!--
						<button onmousedown="window.location.href='/web2019/new_product.inc.php'"			
								title="new_product" >
							<img src="/web2019/icon/New_Product.png"
									width="60px">
							<h1>NEW PRODUCT</h1>
						</button>
					-->
					
						<button onmousedown="window.location.href='/web2019/sell.php'"	
								title="sell" 
									width="60px">
							<img src="/web2019/icon/Sell.png"
									width="60px">
							<h1>SELL</h1>
						</button>

						<button onmousedown="window.location.href='/web2019/kart.php'"	
								title="kart" >
							<img src="/web2019/icon/Kart.png"
									width="60px">
							<h1>KART</h1>
						</button>

						<button onmousedown="window.location.href='/web2019/order.php'"	
								title="order" >
							<img src="/web2019/icon/My_Order.png"
									width="60px">
							<h1>MY ORDER</h1>
						</button>

					<!--
						<button onmousedown="window.location.href='/web2019/signup.php'"	
								title="signup" >
							<img src="/web2019/icon/Sign_Up.png"
									width="60px">
							<h1>SIGN UP</h1>
						</button>
					-->


						<input 	type="text" 
								name="searchbox"
								style="height: 50px; width: 450px; font-size: 35pt";
								placeholder="Look for good stuff!">

							<button type="submit" 
								name="searchbtn" >
								<img src="/web2019/icon/Search.png"
									width="60px">
							<b><h1>Search</h1></b>	
							</button>

							<!--
<?php
				//		if (isset($_POST['login'])) 
						{
				//			$buyer=$_POST["key"];
        		//				echo "Hello: " . $_POST["key"];
								
?>	
								<button type="submit" 
										name="logout" >
									<img src="/web2019/icon/Logout.png"
									width="60px">
									<h1><b>Logout</b></h1>	
								</button>
<?php						
						}
				//		else
						{
?>							
								<input 	type="text" 
										name="key"
										style="height: 50px; width: 200px; font-size: 35pt;">
								<button type="submit" 
										name="login" ;>
									<img src="/web2019/icon/Log_Me_In.png"
									width="60px">
									<H1><b>Log me in</b></h1>	
								</button>

							-->
					</form>
<?php	
						}
?>
			
		</nav>

	</header>

	<hr>
