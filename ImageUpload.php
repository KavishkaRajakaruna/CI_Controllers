<html>
	<head>
		<title></title>
	</head>
	<body>
		<form method="post" action="<?php echo site_url('Dashboard/ImageUpload');?>" enctype="multipart/form-data">
			
			Certifiacete Name: <input type="text" name="CertiName" /><br />
			Front Side of Certificate: <input type="file" name="ImageFront" /><br />
			Back Side of Certificate: <input type="file" name="ImageBack" /><br />
			Category: Edu. <input type="radio" name="Category" value="Edu" /> Sports:
			<input type="radio" name="Category" value="Sports" /> Other
			<input type="radio" name="Category" value="Other" /><br />
			Certifiacte level: Certificate
			<input type="radio" name="Level" value="Certificate" /> , Diploma
			<input type="radio" name="Level" value="Dip" /> , Advanced Diploma:
			<input type="radio" name="Level" value="AD" /> <br />
			<input type="submit" name="submit" value="Upload Image" />
		</form>
	</body>
</html>
