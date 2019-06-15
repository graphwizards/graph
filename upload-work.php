<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Upload Portfolio</title>
</head>
<body>
	<form method="post"  action="upload-img.php" enctype="multipart/form-data">
		
		<label for="image_1">Image</label> <br>
		<input type="file" name="image"> <br><br>

		<br>
		<br>
		<Select name="cat">
			<option value="all"></option>
			<option value="product_packaging_and_labels">Product packaging and labels</option>
			<option value="marketing_materials">Marketing materials</option>
			<option value="visual_identity">Visual identity</option>
			<option value="shirt_&_apparel_designs">Shirt & Apparel designs</option>
			<option value="websites_&_digital_plateforms">Websites & digital Plateforms</option>
		</Select>

		<br>
		<input type="text" name="description" placeholder="Description">
		<br><br>
		<button value="submit" name="submit" type="submit">submit</button>



	</form>

<br><br>
++++++++++++++++++++++++++++++++++++ Services Upload ++++++++++++++++++++++++++++++++++++++

<br><br>
	<form action="service.php" method="post" enctype="multipart/form-data">
	<label for="image">Image</label> <br>
	<input type="file" name="image"> <br><br>
	<label for="name">Name</label><br>
	<input required="required" type="text" name="name"> <br><br>
	<label for="desc">Description</label><br>
	<textarea name="desc" id="desc" cols="30" rows="10" ></textarea> 
	<br><br>

	<button value="sumit" name="submit">Submit</button>

	
	
	
	</form>



	<br><br><br>
	++++++++++++++++++++++++++++++++++++++ ThemeImage ++++++++++++++++++++++++++++++++++++++
	<br><br>


	<form action="theme.php" method="post" enctype="multipart/form-data">
	<label required="required"  for="image">Image</label> <br>
	<input type="file" name="image"> <br><br>
	<label for="name">Name</label><br>
	<input type="text" name="name"> <br><br>
	<label for="status">Status</label> <br>
	
	<Select name="status">
			<option value="all"></option>
			<option value="activate">Active</option>
			<option value="deactivate">Deactive</option>
				</Select>
	
	<br><br>

	<button value="sumit" name="submit">Submit</button>

	
	
	
	</form>

</body>
</html>