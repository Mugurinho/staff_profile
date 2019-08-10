<?php
include("dbConnect.php");

if(isset($_POST['Upload']) && $_FILES['userfile']['size'] > 0){
		$title = $_POST['ft'];
		$fileName = $_FILES['userfile']['name'];
		$tmpName  = $_FILES['userfile']['tmp_name'];
		$fileSize = $_FILES['userfile']['size'];
		$fileType = $_FILES['userfile']['type'];
		$fp      = fopen($tmpName, 'r');
		$content = fread($fp, filesize($tmpName));
		$content = addslashes($content);
		fclose($fp);

		if(!get_magic_quotes_gpc())
		{
		    $fileName = addslashes($fileName);
		}
		$description = $_POST['fd'];
			
		$insert = "INSERT INTO Files(Type, Size, FileName, Title, Description, File, Username) VALUES ('$fileType', '$fileSize', '$fileName', '$title', '$description', '$content', '$username')";
		$result = mysqli_query($conn, $insert);
		$_SESSION['Username'] = $username;
		if($result){
			echo "File has been uploaded";
				header("Refresh:1; url=addFiles.php");	
		move_uploaded_file($_FILES['userfile']['tmp_name'],"files/".$_FILES['userfile']['name']);
		}
		else{
			 echo "File has not been uploaded, please try again";
				header("Refresh:1; url=addFiles.php");	
		}
		mysqli_close($conn);
}
?>