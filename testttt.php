<!DOCTYPE html>
<HTML>
<HEAD>
 <meta charset="UTF-8">
 
 
</HEAD>
<BODY>
 <?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "test";

   // Create connection
   $conn = new mysqli($servername, $username, $password, $dbname);
   // Check connection
   
   if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
   } else {
        echo "Connected successfully";
   }
   
   

  
 ?>
 <br>
 <br>Eισοδο για καθηγητες
<form action="" method="GET">
  <label for="fname">Email:</label><br>
  <input type="text" placeholder="Email" id="fname" name="fname"><br>
  <label for="lname">password:</label><br>
  <input type="password" placeholder="Password" id="pass" name="pass">
  <button type="submit">ΣΥΝΔΕΣΗ</button>
   
</form>
<?php
$sql = "SELECT * FROM `persons` WHERE email=18091 and password1=123";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
echo "Weclome"; }
else {
		echo "0 results";
	}
?>
   

 <br><Br><Br><br><h1>                ΑΝΑΚΟΙΝΩΣΕΙ</br></h1>
 
 <form action="" method="GET">
  <label for="fname2">Search:</label><br>
  <input type="text"  id="fname2" name="fname2"><br>
  
  <button type="submit">Go</button>
   

</form>
 
 <?php
	$sql = "SELECT * FROM announcement ";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
?>	
		<tr>
		    ΚαΘηγητης:
			<td><?=$row['Apostolea'];?></td>
			<br>
			<a href="Anakoinosei.php"><td><?=$row['Titlos'];?></td></a>
			
			<br>
			<td><?=$row['Anakoinosei'];?></td>
			<br><Br>
			
			
		</tr>
<?php	
	}
	}
	else {
		echo "0 results";
	}
	mysqli_close($conn);
?>
 

</BODY>
</HTML>