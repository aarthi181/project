<html>
<head>
	<title>Document Resources</title>
	<?php include 'header.php'; ?>
	<link rel="stylesheet" type="text/css" href="mod_v_r.css" />
	 <script src=".sorttable.js"></script>
</head>
<body>
	<div class="nav_links">
		<a href="resources.php">Resources >></a><a href="documents.php">Documents</a>
	</div>
	<div class="main">
	<?php
	session_start();
	if (!(isset($_SESSION['user']) && $_SESSION['user'] != '')) {
		echo('<p>To upload your own documents and contribute to these resources, please <a href="login.php">Log in</a>.');
	}
	else {
		echo('<p><form action="upload_doc.php" method="post" enctype="multipart/form-data"><font color="#120c2f"><b>Select file to upload:</b></font></p>
		<p><input type="file" name="fileToUpload" id="fileToUpload"></p>
		<p><input type="submit" value="Upload File" name="submit">
		</form></p>
		<p>Must be a file with any of the following extensions:<ul><li>doc</li><li>docx</li><li>pdf</li><li>txt</li><li>docm</li><li>pages</li><li>pub</li><li>rtf</li></ul></p>');
	}
	?>
	</div>
	<div id="container">
  
    <h1>Directory Contents</h1>
    
    <table class="sortable">
      <thead>
        <tr>
          <th>Filename</th>
          <th>Type</th>
        </tr>
      </thead>
      <tbody>
      <?php
        // Opens directory
        $myDirectory=opendir("uploads/documents/");
        
        // Gets each entry
        while($entryName=readdir($myDirectory)) {
          $dirArray[]=$entryName;
        }
        
        // Finds extensions of files
        function findexts ($filename) {
          $filename=strtolower($filename);
          $exts=split("[/\\.]", $filename);
          $n=count($exts)-1;
          $exts=$exts[$n];
          return $exts;
        }
		
        
        // Closes directory
        closedir($myDirectory);
        
        // Counts elements in array
        $indexCount=count($dirArray);
        
        // Sorts files
        sort($dirArray);
        
        // Loops through the array of files
        for($index=0; $index < $indexCount; $index++) {
        
          // Allows ./?hidden to show hidden files
          if($_SERVER['QUERY_STRING']=="hidden")
          {$hide="";
          $ahref="./";
          $atext="Hide";}
          else
          {$hide=".";
          $ahref="./?hidden";
          $atext="Show";}
          if(substr("$dirArray[$index]", 0, 1) != $hide) {
          
          // Gets File Names
          $name=$dirArray[$index];
          $namehref=$dirArray[$index];
          
          // Gets Extensions 
		  
          $extn=findexts($dirArray[$index]); 
          
          // Prettifies File Types, add more to suit your needs.
          switch ($extn){
            case "png": $extn="PNG Image"; break;
            case "jpg": $extn="JPEG Image"; break;
            case "svg": $extn="SVG Image"; break;
            case "gif": $extn="GIF Image"; break;
            case "ico": $extn="Windows Icon"; break;
            
            case "txt": $extn="Text File"; break;
            case "log": $extn="Log File"; break;
            case "htm": $extn="HTML File"; break;
            case "php": $extn="PHP Script"; break;
            case "js": $extn="Javascript"; break;
            case "css": $extn="Stylesheet"; break;
            case "pdf": $extn="PDF Document"; break;
            
            case "zip": $extn="ZIP Archive"; break;
            case "bak": $extn="Backup File"; break;
            
            default: $extn=strtoupper($extn)." File"; break;
          }
          
          // Separates directories
          if(is_dir($dirArray[$index])) {
            $extn="&lt;Directory&gt;"; 
            $class="dir";
          } else {
            $class="file";
          }
          
          // Cleans up . and .. directories 
          if($name=="."){$name=". (Current Directory)"; $extn="&lt;System Dir&gt;";}
          if($name==".."){$name=".. (Parent Directory)"; $extn="&lt;System Dir&gt;";}
          
          // Print 'em
		  print("
          <tr class='$class'>
            <td><a href='uploads/documents/./$namehref'>$name</a></td>
            <td>$extn</td> 

          </tr>");
		  }
        }

      ?>
      </tbody>
    </table>
  </div>
</body>
<footer>
	<?php include 'footer.php'; ?>
</footer>
</html>