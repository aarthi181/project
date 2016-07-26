<html>
<head>
	<?php include 'header.php'; ?>
	<link rel="stylesheet" type="text/css" href="mod_v_r.css" />
</head>
<body>
<div class="nav_links">
<a href="resources.php">Resources >></a><a href="documents.php">Documents</a>
</div>
<div class="main">
<form action="upload.php" method="post" enctype="multipart/form-data">Select image to upload:
<input type="file" name="fileToUpload" id="fileToUpload">
<input type="submit" value="Upload Image" name="submit">
</form>
</div>
</body>
<footer>
	<?php include 'footer.php'; ?>
</footer>