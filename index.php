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
		<title><h1></h1>Αρχική σελίδα</title>
		<meta charset="UTF-8">
	</head>
	<body>
			<div class="heading">
				<h1>Αρχική Σελίδα</h1>
			</div>
			<div class="menu">
			  <a href="index.php"><img src="index.png" width=30; height=30>Αρχική σελίδα</a>
			  <a href="announcement.php"><img src="announcements.png" width=40; height=40>Ανακοινώσεις</a>
			  <a href="communication.php"><img src="communication.png" width=40; height=40;>Επικοινωνία</a>
			  <a href="documents.php"><img src="documents.png" width=40; height=40;>Έγγραφα μαθήματος</a>
			  <a href="homework.php"><img src="homework.png" width=40; height=40;>Εργασίες</a>
			  <a href="logout.php"><img src="logout.png" width=40; height=40;>Αποσύνδεση</a>
			</div> 
			<div class="content">
					<br>
					<div class="frame">
						<p>Σε αυτό τον ιστότοπο θα βρεις βοηθητικό υλικό για το μάθημα <b>Ανάπτυξη Εφαρμογών Κινητών Συσκευών</b> του τμήματος πληροφορικής του ΑΠΘ
					</div>
					<br>
					<div class="frame">
						<p>
						<ul>
							<li>Το πεδίο <b>Ανακοινώσεις</b> περιέχει όλες τις ανακοινώσεις του μαθήματος</li>
							<br>
							<li>Το πεδίο <b>Επικοινωνία</b> περιέχει τα στοιχέια επικοινωνίας του διδάσκοντα και του βοηθητικού προσωπικού (email, zoom link, ώρες επικοινωνίας κλπ.)</li>
							<br>
							<li>Το πεδίο <b>Εγγραφα μαθήματος</b> περιέχει εκπαιδευτικό υλικό (διαφάνειες του διδάσκοντα, ηλεκτρονικά βιβλία, βίντεο κλπ.)</li>
							<br>
							<li>Το πεδίο <b>Εργασίες</b> περιέχει εργασίες πάνω στο μάθημα</li>
					</div>
				<br>
				<img src="HomePagePic.jpg" width=350 alt="HomePagePic">
			</div>
	</body>
</html>
