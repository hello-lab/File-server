<!doctype html>
<html>
<head>
   <meta charset="UTF-8">
   <link rel="shortcut icon" href="./.favicon.ico">
   <title>FILES</title>

   <link rel="stylesheet" href="./.style.css">
   <script src="./.sorttable.js"></script>
</head>

<body>

<div id="container">
	<h1>DIRECTORY CONTENTS</h1>

	<table class="sortable">
	    <thead>
		<tr>
			<th>FILE-NAME</th>
			<th>TYPE</th>
			<th>SIZE</th>
		</tr>
	    </thead>
	    <tbody><?php


  

	// Decides if hidden files should be displayed, based on query above.
	   
    $files = glob('./pdfs/*');
    
    

    foreach($files as $file){
      
    $path = rtrim($file,"."); 
    $path_parts = pathinfo($path);  
        echo '<tr>';
        echo '<td><a href="'.$file.'" download="'.$file.'"></a></td>';
        echo '<td class = type >'.$path_parts['extension'].'</td>';
        echo '<td class = size>'.filesize($file).' bytes</td>';
        echo '</tr>';
    }
	// Output
	 
	   
	
	?>

	    </tbody>
	</table>
  
	
</div>

  <table class = hmm><tbody>  <tr >
    
    <td>
<form action="upload.php" method="post" enctype="multipart/form-data">  Select file to upload:
  <input type="file" name="fileToUpload" id="fileToUpload"></td>

</tr><tr> <td><input type="submit" value="Upload File" name="submit">
</td>
</tr>
</form>
  </tbody></table>
</html>