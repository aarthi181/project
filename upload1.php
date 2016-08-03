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
<?php
		  include "scripts/connect.php";	
		$idir = "uploads/";   // Path To Images Directory

		if (isset ($_FILES['fupload'])){

		$randomd=rand(0000,9999);

		//upload the image to tmp directory
		$url = $_FILES['fupload']['name'];   // Set $url To Equal The Filename For Later Use 
		if ($_FILES['fupload']['type'] == "application/pdf"
		|| $_FILES['fupload']['type'] == "application/doc") { 
			$file_ext = strrchr($_FILES['fupload']['name'], '.');   // Get The File Extention In The Format Of , For Instance, .jpg, .gif or .php 
			$copy = copy($_FILES['fupload']['tmp_name'], "$idir" . "$randomd" . $_FILES['fupload']['name']);   // Move Image From Temporary Location To Permanent Location 
				}
				}

	error_reporting (E_ALL ^ E_NOTICE);
	
    if ($_POST['submit']) {
		
		$document = mysql_real_escape_string("$idir" . "$randomd" . $_FILES['fupload']['name']);
		$name = mysql_real_escape_string($_POST['name']);
		$description = mysql_real_escape_string($_POST['description']);
		
				
        $SQL = " INSERT INTO documents";
        $SQL .= " (document, name, description) VALUES ";
        $SQL .= " ('$document', '$name', '$description') ";
		
        $result = mysql_db_query($db,$SQL,$cid);
        $last=mysql_insert_id();
        
        if (!$result) { echo("ERROR: " . mysql_error() . "\n$SQL\n");    }
		
		header("location:document-added.php?ref=$last");
		exit();

    }
?>
</div>
</body>
<footer>
	<?php include 'footer.php'; ?>
</footer>