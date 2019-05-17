 <html>
 <head>
 <title>Data Saved</title>
 </head>
 <body>
 <?php
 //panggil file config.php untuk menghubungkan ke server
 include('koneksi.php');


 //tangkap data dari form
 if(isset($_POST['firstname'])){
	$firstname	= $_POST['firstname'];
 }
 if(isset($_POST['secondname'])){
	$secondname	= $_POST['secondname'];
 }
 if(isset($_POST['username'])){
	$username	= $_POST['username'];
 }
 if(isset($_POST['notelp'])){
	$notelp			=$_POST['notelp'];
 }
  if(isset($_POST['password'])){
	$password		=$_POST['password'];
 }
  if(isset($_POST['repassword'])){
	$repassword		=$_POST['repassword'];
 }
  if(isset($_POST['region'])){
	$region		=$_POST['region'];
 }
  if(isset($_POST['notelp'])){
	$notelp			=$_POST['notelp'];
 }
  if(isset($_POST['day'])){
	$day		=$_POST['day'];
 }
  if(isset($_POST['month'])){
	$month		=$_POST['month'];
 }
  if(isset($_POST['year'])){
	$year		=$_POST['year'];
 }
  if(isset($_POST['gender'])){
	$gender		=$_POST['gender'];
 }
  if(isset($_POST['comment'])){
	$comment			=$_POST['comment'];
 }
 
 
 //ini belum di set
 //simpan data ke database
 $query = mysql_query("INSERT INTO register(firstname,secondname,) VALUES('$CourseNumber','$CourseTitle','$SemesterTaken','$Role')");
 mysql_query($query);
  
 if($query){
	echo "<h2>Your data already saved</h2>";
 }
 ?>
 
 <a href="view.php">Show Data</a>
  
 </body>
 </html>