<!DOCTYPE html>
<html lang = "e">
<head>
	<meta charset="UTF-8">
	<title>Upload</title>
</head>

<body>
		<form method="POST" enctype="multipart/form-data">
				<input type="file" name=uploadFile />
				<input type="submit" />
		</form>
</body>
</html>
<pre>
	<?php
		
		if($_FILES){
			// print_r($_FILES);
			$arqName = $_FILES['uploadFile']['name'];
			$name = explode(".", $arqName)[0];
			$ext = explode(".", $arqName)[1];
			echo $newName = md5($name.time()). '.' .$ext;
			
			if(!file_exists('uploads')){
				mkdir('uploads');	
				chmod('uploads', 0777);		
			}

			move_uploaded_file($_FILES['uploadFile']['tmp_name'], 'uploads/'.$newName);
		}
?>