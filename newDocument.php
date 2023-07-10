<?php
	if(!isset($_POST['submit'])){
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Προσθήκη νέου εγγράφου</title>
		<meta charset="UTF-8">
	</head>
	<body>
			<form  action="newDocument.php" enctype="multipart/form-data" method="post">
				<div class="container">
					<h1>Προσθήκη νέου εγγράφου</h1>
					<hr>
					<fieldset>
						Τίτλος:<br>
						<input type="text" name="title"><br><br>
						Περιγραφή:<br>
						<textarea rows="20" cols="200" name="description"></textarea><br>
                        <input type="file" name="filename"><br><br>
						<button type="submit" name="submit">Προσθήκη εγγράφου</button>
				</div>
				<br><br>
				</fieldset>
			</form>
	</body>
</html>
<?php
}else{
    $target = "docs/";
    $target = $target . basename( $_FILES['filename']['name']);
    $filename=basename( $_FILES['filename']['name']);
    $description=addslashes($_POST['description']);
    $title=$_POST['title'];
    
    if(move_uploaded_file($_FILES['filename']['tmp_name'], $target)) {
        $link = mysqli_connect('webpagesdb.it.auth.gr:3306','nipapager','nipapager11','student2918partB');
       $sql="INSERT INTO docs (id,title,description,filename) VALUES ('','$title','".addslashes($description)."','".$target."')";
       $result = mysqli_query($link,$sql);
                if($result)
                {
                    header("location: documents.php");
                }
                else{
                    echo "failed";
                }
    }
    }
?>
