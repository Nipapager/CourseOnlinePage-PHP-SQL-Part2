<?php
        session_write_close();
        session_save_path('./temp');
	session_start();

	if(!isset($_SESSION['login_user'])){
		header('location: login.php');
	}
	
?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Έγγραφα μαθήματος</title>
		<meta charset="UTF-8">
	</head>
	<h1 id="top"></h1>
	<body>
		<div class="heading">
			<h1>Έγγραφα μαθήματος</h1>
		</div>
		<div class="menu">
			<a href="index.php"><img src="index.png" width=40; height=40>Αρχική σελίδα</a>
			<a href="announcement.php"><img src="announcements.png" width=40; height=40>Ανακοινώσεις</a>
			<a href="communication.php"><img src="communication.png" width=40; height=40;>Επικοινωνία</a>
			<a href="documents.php"><img src="documents.png" width=30; height=30>Έγγραφα μαθήματος</a>
			<a href="homework.php"><img src="homework.png" width=40; height=40;>Εργασίες</a>
			<a href="logout.php"><img src="logout.png" width=40; height=40;>Αποσύνδεση</a>
		</div>
		<div class="content">
		<?php
				if($_SESSION['role']=='Tutor'){
					echo "<a href='newDocument.php'>Προσθήκη νέου εγγράφου</a><br><br>";
				}
					$link =  mysqli_connect('webpagesdb.it.auth.gr:3306','nipapager','nipapager11','student2918partB');
					if(!$link){
								echo('Error connecting to the database: ' . $mysql_error());
								exit();
								}
					$sql = "SELECT * FROM docs order by id desc" ;
					$result = mysqli_query($link,$sql);
					while($row = mysqli_fetch_assoc($result)){
						echo '<b>Τίτλος</b>: '.$row['title'].'<br><br> </h2>
						<div class="frame">';
						if($_SESSION['role']=='Tutor'){
                                                                   
							echo "<a href='delDocument.php?id=".$row['id']." '>Διαγραφή εγγράφου</a> <br>
														  <a href='editDocument.php?id=".$row['id']." '>Eπεξεργασία</a>";
								  }		
						
						echo' '.$row['description'].'<br><br>
						Κατεβασέ από <a href="'.$row['filename'].'">εδώ</a>
                        </div>
						<hr>';
					}
			?>
		</div>
		<div class="top">
			<a href="#top">top</a>
		</div>
	</body>
</html>

