<?php
	session_start();
?>
<?php
	if(!isset($_SESSION['num'])){
		header("location: admin.login.php");
	}
	
	?>
<html>
	<head>
		<title> My head </title>
		<link rel="stylesheet" href="css/w3.css">
		<script src="js/jquery.min.js"></script>
		<script src="js/w3.js" ></script>
	</head>
	<body>
	<div class="w3-container w3-green w3-xlarge">
			Hello <?php echo $_SESSION['name']; ?>
			<div class="w3-right">
				Not <?php echo $_SESSION['name']; ?>
				<a href="admin.logout.php">Sign out</a>
			</div>
		</div><br><br>
<?php 
$aemail= $_SESSION['email'];
$update=$_POST['update'];
$option=$_POST['option'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phoenix";
$conn = new mysqli($servername, $username, $password, $dbname);
   $sql = "SELECT id, coll_id, name, email, mobile, stream, entry_year, money   FROM students where coll_id='$update'";
   $result = mysqli_query($conn,$sql);
   $row = mysqli_fetch_assoc($result);
   $num = mysqli_num_rows($result);
   if($num==1){
	$sql="UPDATE students SET money='$option' where coll_id='$update'";
	$sql2="UPDATE students SET paidto='$aemail' where coll_id='$update'";
	if ($conn->query($sql) === TRUE) {
		if($conn->query($sql2) === TRUE){
			echo "Record updated successfully";
		}
		else{
			echo "Error 1";
		}
	  }  
	else{
		echo "Error 2";
	} 
   }
   else {
    echo "Not found";
}
$conn->close();
?>

 <a href="admin.php">Click to go back </a>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phoenix";
$conn = new mysqli($servername, $username, $password, $dbname);
 $sql = "SELECT id, coll_id, name, email, mobile, stream, entry_year, money   FROM students where coll_id='$update'";
   $result = mysqli_query($conn,$sql);
   $row = mysqli_fetch_assoc($result);
   $num = mysqli_num_rows($result);
      
      if($num == 1) {
         //session_register("email");
         $id = $row['id'];
         $coll_id = $row['coll_id'];
         $name = $row['name'];
         $email = $row['email'];
         $mobile = $row['mobile'];
         $stream = $row['stream'];
         $entry_year = $row['entry_year'];
		 $money = $row['money'];
		 
		 echo "<table border=4 id='id01'><tr><th>ID</th><th>College ID</th><th>Name</th><th>Mobile</th><th>Stream</th><th>Current Year</th><th>Money</th></tr>";
		 echo "<tr class='row'><td>".$id."</td><td>".$row['coll_id']."</td><td>".$row['name']."</td>";
	echo "<td>".$row['mobile']."</td><td>".$row['stream']."</td><td>".$row['entry_year']."</td><td>".$row['money']."</td></tr></table>";
		
      }
$conn->close();	
?>	
 
	</body>
</html>
