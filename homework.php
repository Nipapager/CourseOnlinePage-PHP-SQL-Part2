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
		<title>Εργασίες Έγγραφα μαθήματος</title>
		<meta charset="UTF-8">
	</head>
	<h1 id="top"></h1>
	<body>
		<div class="heading">
			<h1>Εργασίες Έγγραφα μαθήματος</h1>
		</div>
		<div class="menu">
			<a href="index.php"><img src="index.png" width=40; height=40>Αρχική σελίδα</a>
			<a href="announcement.php"><img src="announcements.png" width=40; height=40>Ανακοινώσεις</a>
			<a href="communication.php"><img src="communication.png" width=40; height=40;>Επικοινωνία</a>
			<a href="documents.php"><img src="documents.png" width=40; height=40>Έγγραφα μαθήματος</a>
			<a href="homework.php"><img src="homework.png" width=30; height=30;>Εργασίες</a>
			<a href="logout.php"><img src="logout.png" width=40; height=40;> Αποσύνδεση</a>
		</div>
		<div class="content">
		<?php
				if($_SESSION['role']=='Tutor'){
					echo "<a href='newHomework.php'>Προσθήκη νέας εργασίας</a>";
				
				}
				
					$link =  mysqli_connect('webpagesdb.it.auth.gr:3306','nipapager','nipapager11','student2918partB');
						if(!$link){
								echo('Error connecting to the database: ' . $mysql_error());
								exit();}
					$sql = "SELECT * FROM projects order by id desc" ;
					$result = mysqli_query($link,$sql);
					$i=1;
					while($row = mysqli_fetch_assoc($result)){
						
							echo '<h2>Eργασία '.$i.'</h2>
									<div class="frame">';
									if($_SESSION['role']=='Tutor'){
																			   
										echo "<a href='delHomework.php?id=".$row['id']." '>Διαγραφή εγγράφου</a> <br>
																	  <a href='editHomework.php?id=".$row['id']." '>Eπεξεργασία</a>";
											  }		
									
									echo'														
										<p>
										<b>Στόχοι</b>:'.$row['targets'].'<br><br>
										<b>Εκφώνηση</b>: Κατεβάστε την εκφώνηση της εργασίας από <a href="'.$row['description'].'">εδώ</a> <br><br>
										<b>Παραδοτέα</b>:<br><br>
										'.$row['files'].'<br><br>
										<b><em1>Ημερομηνία παράδοσης</em1></b>:'.date('d-m-Y',strtotime($row['deadline'])).'
										</p>
									</div>
									<hr>' ;
									$i++;
					}
			?>
		<div class="top">
			<a href="#top">top</a>
		</div>	
	</body>
</html>


