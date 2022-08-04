<!DOCTYPE html>
<html lang="ar">
<head>
	<meta charset="utf-8">
	  <!--This is an introduction to the site -->
	<meta name="description" content="Online marketing site where you
	 can buy the best products ">

	  <!-- This is the style link-->
	<link rel="stylesheet" type="text/css" href="css/updatecss.css">
	<title>Update interface | Admin</title>
</head>
<body>

	<div class="container"> 
		<div class="card">
			<div class="img_container">
				<h2> Editing of products</h2>
			</div>

			<form action="" method="post">
				<div class="txt_pro">
				<input type="text" name="id">
				<span></span>
				<label> Id </label>
                </div>

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
                	<div id="h"><label for="file" > Update product image</label></div>

                	<button name="upload">  Product modification</button>
                	
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