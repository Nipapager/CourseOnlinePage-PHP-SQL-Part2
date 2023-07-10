**Greek:**

Δημιουργία ιστοσελίδας τύπου e-learning για ένα μάθημα του τμήματος Πληροφορικής. Στο πρώτο μέρος γίνεται χρήση μόνο της HTML και της CSS. 

Link για το πρώτο μέρος: https://github.com/Nipapager/CourseOnlinePage-HTML-Part1

Στο δεύτερο μέρος η σελίδα επικοινωνεί με βάση δεδομένων SQL με τη χρήση php. Για την εκφώνηση της εργασίας δείτε το αρχείο Pronunciation.docx στον φάκελο PronunciationAndReport

**Για την υλοποίηση του δυναμικού ιστοχώρου χρησιμοποιήθηκαν τα εξής php αρχέια:**
1.	login.php. Η σελίδα στην οποία ο χρήστης (μαθητής ή καθηγητής) κάνει login στην ιστοσελίδα. Άμα βάλει τα στοιχεία του (email, password) σωστά τότε μεταφέρεται στη σελίδα index.php.
2.	index.php. Η κεντρική σελίδα του site. Ο χρήστης εισέρχεται σε αυτή μετά από το πετυχημένο login. Η σελίδα περιέχει γενικές πληροφορίες του site (εισαγωγικό κείμενο, περιγραφή στόχων κλπ.)
3.	announcement.php. Στη σελίδα αυτή βρίσκονται ανακοινώσεις σχετικά με το μάθημα. Εάν ο χρήστης είναι καθηγητής (tutor) τότε πέρα από τις ανακοινώσεις εμφανίζονται και τρεις επιπλέον επιλογές. Η προσθήκη νέας ανακοίνωσης, η διαγραφή και η επεξεργασίας μιας ανακοίνωσης.
4.	newAnnouncement.php. Σε αυτή τη σελίδα οδηγείται ο χρήστης τύπου tutor όταν θέλει να προσθέσει μια νέα ανακοίνωση.
5.	editAnnouncement.php. Σε αυτή τη σελίδα οδηγείται ο χρήστης τύπου tutor όταν θέλει να επεξεργαστεί μια ανακοίνωση.
6.	delAnnouncement.php. Αρχείο με κώδικα php για τη διαγραφή μιας ανακοίνωσης από χρήστες τύπου tutor.
7.	communication.php. Στη συγκεκριμένη ιστοσελίδα υπάρχει μια φόρμα επικοινωνίας των μαθητών με τους καθηγητές. Οι μαθητές συμπληρώνουν τη φόρμα και το μήνυμα στέλνεται στα email των καθηγητών. Στην σελίδα επίσης παρέχονται πληροφορίες επικοινωνίες με τους καθηγητές.
8.	documents.php. Τα έγγραφα του μαθήματος. Διαφάνειες, διαλέξεις κλπ. Εάν ένας χρήστης είναι διδάσκοντας (tutor) θα έχει τη δυνατότητα να προσθέσει νέο έγγραφο ή να επεξεργαστεί και να διαγράψει κάποιο από τα ήδη υπάρχοντα
9.	newDocument.php. Σε αυτή τη σελίδα οδηγείται ο χρήστης τύπου tutor όταν θέλει να προσθέσει ένα νέο έγγραφο.
10.	editDocumentt.php. Σε αυτή τη σελίδα οδηγείται ο χρήστης τύπου tutor όταν θέλει να επεξεργαστεί ένα έγγραφο.
11.	delDocument.php. Αρχείο με κώδικα php για τη διαγραφή ενός εγγράφου από χρήστες τύπου tutor.
12.	homework.php. Σε αυτή την ιστοσελίδα βρίσκονται εκφωνήσεις εργασιών που μπορούν να κατεβάσουν οι φοιτητές. Εάν ένας χρήστης είναι διδάσκοντας έχει την επιπλέον δυνατότητα να προσθέσει μια νέα εργασία, να επεξεργαστεί και να διαγράψει μια ήδη υπάρχουσα.
13.	newHomework.php. Σε αυτή τη σελίδα οδηγείται ο χρήστης τύπου tutor όταν θέλει να προσθέσει μια νέα ανακοίνωση.
14.	editHomework.php. Σε αυτή τη σελίδα οδηγείται ο χρήστης τύπου tutor όταν θέλει να επεξεργαστεί μια εργασία.
15.	delHomework.php. Αρχείο με κώδικα php για τη διαγραφή μιας εργασίας από χρήστες τύπου tutor.
16.	logout.php. Αρχείο με κώδικα php για την πραγματοποίηση αποσύνδεσης από τον λογαριασμό ενός χρήστη.

**Για την υλοποίηση του δυναμικού ιστοχώρου χρησιμοποιήθηκε η βάση δεδομένων student2918partB.sql. Οι πίνακες της βάσης είναι οι εξής:**
1.	users: Εδώ αποθηκεύονται οι χρήστες του site.
a.	INT id: id χρήστη
b.	VARCHAR fname: όνομα χρήστη
c.	VARCHAR lname: επίθετο χρήστη
d.	VARCHAR email: email χρήστη
e.	VARCHAR password: κωδικός χρήστη
f.	VARCHAR role: ρόλος χρήστη (tutor ή student)
2.	announcement: Εδώ αποθηκεύονται οι ανακοινώσεις του site.
a.	INT id: id ανακοίνωσης
b.	DATE date: ημερομηνία ανακοίνωσης
c.	VARCHAR subject: θέμα ανακοίνωσης
d.	VARCHAR text: περιεχόμενο ανακοίνωσης
3.	docs: Εδώ αποθηκεύονται τα έγγραφα του site.
a.	INT id: id εγγράφου
b.	VARCHAR title: τίτλος εγγράφου
c.	VARCHAR description : περιγραφή εγγράφου
d.	VARCHAR filename: όνομα αρχείου εγγράφου
4.	projects: Εδώ αποθηκεύονται οι εργασίες του site.
a.	INT id: id εργασίας
b.	VARCHAR targets : στόχοι εργασίας
c.	VARCHAR files: παραδοτέα εργασίας
d.	VARCHAR description: όνομα αρχείου εργασίας
e.	DATE deadline: ημερομηνίας παράδοσης εργασίας

**Οδηγίες πρόσβασης χρηστών:**

_Για να συνδεθείτε στην ιστοσελίδα ως μαθητής (Student) μπορείτε να χρησιμοποιήσετε τους εξής λογαριασμούς:_

1. UserName/Email: nikospap@student.gr
   Password : 123
2. UserName/Email : giannislaf@student.gr
   Password : 123
     
_Για να συνδεθείτε στην ιστοσελίδα ως καθηγητής (Tutor) μπορείτε να χρησιμοποιήσετε τον λογαριασμό:_

UserName/Email : giannisas@tutor.gr
Password : 123


**Link για τον δυναμικό ιστοχώρο:**
http://nipapager.webpages.auth.gr/2918partB/

===================================================================

**English**

Creation of an e-learning website for a course of the Department of Computer Science. In the first part only HTML and CSS are used. 

Link to the first part: https://github.com/Nipapager/CourseOnlinePage-HTML-Part1

In the second part the page communicates with SQL database using php. For the pronunciation of the assignment see the file Pronunciation.docx in the PronunciationAndReport folder

**For the implementation of the dynamic website the following php primitives were used:**
1. login.php. The page on which the user (student or teacher) logs in to the website. If he puts his data (email, password) correctly then he is transferred to the index.php page.
2. index.php. The main page of the site. The user enters it after successful login. The page contains general information of the site (introductory text, description of objectives, etc.).
3. announcement.php. This page contains announcements about the course. If the user is a tutor, then in addition to the announcements, three additional options are displayed. Adding a new announcement, deleting and editing an announcement.
4. newAnnouncement.php. This is the page to which the tutor type user is directed when he wants to add a new announcement.
5. editAnnouncement.php. This is the page to which the tutor type user is directed when they want to edit an announcement.
6. delAnnouncement.php. File with php code for deleting an announcement by tutor type users.
7. communication.php. On this website there is a form for students to communicate with tutors. Students fill in the form and the message is sent to the tutors' emails. The page also provides communication information with the tutors.
8. documents.php. The course documents. Slides, lectures etc. If a user is a tutor he/she will have the possibility to add a new document or edit and delete one of the existing ones
9. newDocument.php. This is the page to which the tutor type user is directed when they want to add a new document.
10. editDocumentt.php. This is the page to which the user of type tutor is directed when he/she wants to edit a document.
11. delDocument.php. File with php code for deleting a document by tutor type users.
12. homework.php. This website contains homework assignments that can be downloaded by students. If a user is a tutor they have the additional ability to add a new assignment, edit and delete an existing assignment.
13. newHomework.php. This is the page to which the tutor type user is directed when they want to add a new announcement.
14. editHomework.php. This is the page to which the tutor type user is directed when they want to edit a homework.
15. delHomework.php. File with php code for deleting a homework from tutor type users.
16. logout.php. File with php code for logging out of a user's account.

**For the implementation of the dynamic website the database student2918partB.sql was used. The tables of the database are the following:**
1. users.
a. INT id: user id
b. VARCHAR fname: user name
c. VARCHAR lname: user's last name
d. VARCHAR email: user email
e. VARCHAR password: user password
f. VARCHAR role: user role (tutor or student)
2. announcement: this is where the site's announcements are stored.
a. INT id: announcement id
b. DATE date: date of announcement
c. VARCHAR subject: announcement subject
d. VARCHAR text: announcement content
3. docs: This is where the site's documents are stored.
a. INT id: document id
b. VARCHAR title: document title
c. VARCHAR description : document description
d. VARCHAR filename: document filename
4. projects: this is where the site's projects are stored.
a. INT id: project id
b. VARCHAR targets : work objectives
c. VARCHAR files : work deliverables
d. VARCHAR description : work file name
e. DATE deadline: date of work delivery

**User access instructions:**

_To log in to the website as a student you can use the following accounts:_

1. UserName/Email: nikospap@student.gr
   Password : 123
2. UserName/Email : giannislaf@student.gr
   Password : 123
     
_To log in to the website as a tutor you can use the following account:_

UserName/Email : giannisas@tutor.gr
Password : 123


**Link to the dynamic website:**
http://nipapager.webpages.auth.gr/2918partB/
