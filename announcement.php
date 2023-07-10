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
		<title>Ανακοινώσεις</title>
		<meta charset="UTF-8">
	</head>
	<h1 id="top"></h1>
	<body>
		<div class="heading">
			<h1>Ανακοινώσεις</h1>
		</div>
		<div class="menu">
			 <a href="index.php"><img src="index.png" width=40; height=40>Αρχική σελίδα</a>
			 <a href="announcement.php"><img src="announcements.png" width=30; height 30>Ανακοινώσεις</a>
			 <a href="communication.php"><img src="communication.png" width=40; height=40;>Επικοινωνία</a>
			 <a href="documents.php"><img src="documents.png" width=40; height=40;>Έγγραφα μαθήματος</a>
			 <a href="homework.php"><img src="homework.png" width=40; height=40;>Εργασίες</a>
			 <a href="logout.php"><img src="logout.png" width=40; height=40;>Αποσύνδεση</a>
		</div>
		<div class="content">
		<?php
				if($_SESSION['role']=='Tutor'){
					echo "<a href='newAnnouncement.php'>Προσθήκη νέας ανακοίνωσης</a>";
				                                                   }
					$link = mysqli_connect('webpagesdb.it.auth.gr:3306','nipapager','nipapager11','student2918partB');
					if(!$link){
							echo ('Error connecting to the database: ' . $mysql_error());
							exit();
                                                        }
					$sql = "SELECT * FROM announcement order by date desc";
					$result = mysqli_query($link,$sql);
					$i=1;
					while($row = mysqli_fetch_assoc($result)){
							echo '<h2>Ανακοίνωση '.$i.' </h2>
									<div class="frame">';
							if($_SESSION['role']=='Tutor'){
								echo "<a href='delAnnouncement.php?id=".$row['id']." '>Διαγραφή Aνακοίνωσης</a> <br>
								          <a href='editAnnouncement.php?id=".$row['id']." '>Eπεξεργασία Aνακοίνωσης</a>";
							}
							echo '
										<p><b>Ημερομηνία</b>: '.date('d-m-Y',strtotime($row['date'])).'<br><br>
										<b>Θέμα</b>: '.$row['subject'].'<br><br>
										Περιγραφή:<br><br>
										'.$row['text'].'
										</p>
									</div>
									<hr>';
									$i++;
					}
			?>
		<div class="top">
			<a href="#top">top</a>
		</div>
	</body>
</html>
