<!DOCTYPE html>
<html lang="ar">
<head>
	<meta charset="utf-8">
	  <!--This is an introduction to the site -->
	<meta name="description" content="Online marketing site where you
	 can buy the best products ">

	  <!-- This is the style link-->
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<title>The first interface | Admin</title>
</head>
<body>

	<div class="container"> 
		<div class="card">
			<div class="img_container">
				<img src="image/logo.jpg">
			</div>
<!-- الانسي تايب ضرورية لرفع الصورة -->
			<form action="insert.php" method="post" enctype="multipart/form-data">
				<div class="txt_pro">
				<input type="text" name="name">
				<span></span>
				<label> Product name  </label>
                </div>

                <div class="txt_pro">
				<input type="text" name="price">
				<span></span>
				<label>  Product price </label>
                </div>

                <div class="add_img">
                	<input type="file" name="image" id="file" style="display: none;">
                	<div id="h"><label for="file" > upload image</label></div>

                	<button name="upload"> upload product </button>
                	
                </div>

                <div class="signup_link"> 
                	<!-- go to the products display page-->
                	To view all products | <a href="productsadmin.php"> Click here </a>

                 </div>


				

			</form>

			

		</div>
		
	</div>

</body>
</html>