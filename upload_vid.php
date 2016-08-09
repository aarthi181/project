<html>
<head>
	<title>Video Resources</title>
	<?php include 'header.php'; ?>
	<link rel="stylesheet" type="text/css" href="mod_v_r.css" />
</head>
<body>
	<div class="nav_links">
		<a href="resources.php">Resources >></a><a href="audio.php">Audio</a>
	</div>
	<div class="main">
	<?php
	$target_dir = "uploads/video/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$FileType = pathinfo($target_file,PATHINFO_EXTENSION);
	// Check if image file is a actual image or fake image
	/*if(isset($_POST["submit"])) {
		$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		if($check !== false) {
			echo "File is an image - " . $check["mime"] . ".";
			$uploadOk = 1;
		} else {
			echo "File is not an image.";
			$uploadOk = 0;
		}
	}*/

	// Check if file already exists
	if (file_exists($target_file)) {
		echo "Sorry, file already exists.";
		$uploadOk = 0;
	}
	 // Check file size
	if ($_FILES["fileToUpload"]["size"] > 500000) {
		echo "Sorry, your file is too large.";
		$uploadOk = 0;
	}
	// Allow certain file formats
	if($FileType != "3g2" && $FileType != "asf" && $FileType != "avi"
	&& $FileType != "divx" && $FileType != "f4v" && $FileType != "flv" 
	&& $FileType != "m4v" && $FileType != "mod" && $FileType != "mov"
	 && $FileType != "mp4" && $FileType != "mpeg" && $FileType != "mpg"
	  && $FileType != "mswmm" && $FileType != "swf" && $FileType != "wlmp" && $FileType != "wmv") {
		echo "Sorry, only ... are allowed.";
		$uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		} else {
			echo "Sorry, there was an error uploading your file.";
		}
	}
	?>

	</div>
</body>
<footer>
	<?php include 'footer.php'; ?>
</footer>