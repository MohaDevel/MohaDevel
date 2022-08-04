<!DOCTYPE html>
<html lang="ar">
<head>
	<meta charset="utf-8">
	<meta name="description" content="Online marketing site where you
	 can buy the best products ">
	 <link rel="stylesheet" type="text/css" href= "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstra.min.css">
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<title>The first admin interface</title>
</head>
<body>

	<div class="container"> 
		<div class="card">
			<div class="img_container">
				<img src="img/logo.jpg">
			</div>

			<form action="" method="post">
				<div class="txt_pro">
				<input type="text" name="name_product">
				<span></span>
				<label> Product name  </label>
                </div>

                <div class="txt_pro">
				<input type="text" name="price_product">
				<span></span>
				<label>  Product price </label>
                </div>

                <div class="add_img">
                	<input type="file" name="file_img" id="file">
                	<div id="h"><label for="file" > upload image</label></div>

                	<button name="upload"> upload product </button>
                	
                </div>

                <div class="signup_link"> 
                	To view all products | <a href="productsofadmin.php"> Click here </a>

                 </div>


				

			</form>

			

		</div>
		
	</div>

</body>
</html>