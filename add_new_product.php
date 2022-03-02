<?php 

include("connection.php");

if (isset($_POST['add'])) {
	
	$file = $_FILES['image']['name'];
	$name = $_POST['name'];
	$price = $_POST['price'];



	if (empty($file)  && empty($name) && empty($price)) {
		echo "fff";
	}else{
		$query = "INSERT INTO cart(name,price,image) VALUES('$name','$price','$file')";
		$res = mysqli_query($connect,$query);

		if ($res) {
		  move_uploaded_file($_FILES['image']['tmp_name'], "img/$file");

		  $name = "";
		  header("Location: index.php");
		}else{
			
		}
	}
}


 ?>


<!DOCTYPE html>
<html>
<head>
	<title>ADD A CARD</title>
</head>
<body style="background: url(loginbg.jpg);">

	<?php 
      include("header.php");
	 ?>


	 <div class="container" >
	 	<div class="col-md-12 d-flex justify-content-center" style="border:8px solid white">
	 	
	 			<div class="col-md-4 mt-4" style="color:white">
	 				<h3 class="text-center text-white">ADD A CARD</h3>
	 				<form method="post" enctype="multipart/form-data">
	 					<label>UPLOAD IMAGE</label>
	 					<input type="file" name="image" class="form-control" style="background-color:#e69090">
	 					<label>BRAND NAME</label>
	 					<input type="text" name="name" class="form-control" style="background-color:#e69090">
	 					<label>GIFTCARD PRICE</label>
	 					<input type="number" name="price" class="form-control" style="background-color:#e69090">
	 					<input type="submit" name="add" class="btn btn-info my-5" value="ADD NEW CARD" style="padding: 0.375rem 5.95rem;">
	 				</form>
	 		</div>
	 	</div>
	 </div>
<?php include('slider.html');?>
<?php include('footer.php');?>
</body>
</html>