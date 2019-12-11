<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
			echo "<h2>C.V Upload Page. <h2/> ";
			echo "<h2>Click Choose file to browse and select your file <h2/> ";
			echo "<h2>Warning!!: Your file must be of an extension of PDF or DOC only! <h2/> ";
			echo "<h2>Warning!!: Your file size must not exceed 2 MB! <h2/> ";
		  echo " <form action = '.\api\webservice\FileUploadRestrictDownload.php' method = 'POST' enctype = 'multipart/form-data'>";
		  echo "<br/>";
		  echo "<input type = 'file' name = 'cv' />";
		  echo "<br/>";
		  echo "<input type = 'submit'/>";
		  
          echo " </form> ";?>
	</body>
	</html>
