<html>
<head>
	<title>Exam Questions</title>
	<?php include 'header.php'; ?>
	<link rel="stylesheet" type="text/css" href="mod_v_r.css" />
</head>
<body>
	<div class="nav_links">
		<a href="try_it_yourself.php">Try it yourself >></a><a href="exam_qs.php">Exam Qs</a>
	</div>
	
  <div class="main">
  <h1>Disclaimer</h1>
  <p>If you do not understand some of the questions in these papers do not be alarmed as they are ones that you would encounter at the end of your course.</p>
  <p>The purpose of this website is to give you a foundational level of knowledge to prepare you for the content taught in lectures which will in turn prepare you for these exam questions.</p>
  <p>They are provided here purely so that you can see the level of knowledge that you will have once completing the course.</p>
  <p>You could also use these resources to search up keywords and get a headstart on the content!</p>
  </div>
  <div id="container">
  
    <h1>Exam Papers and Mark Schemes</h1>
    
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
        $myDirectory=opendir("exams/");
        
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
            <td><a href='exams/./$namehref'>$name</a></td>
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