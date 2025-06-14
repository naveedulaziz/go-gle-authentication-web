<?php

$conn = new mysqli("localhost","root","","sectionj");
if ($conn->connect_error)
{
	die ("connection Failed");
}
else
{
	//echo "Connection passed again";
}


if (isset($_POST['nextstep']))
{
	$fname = $_POST['firstn'];
	$lname = $_POST['lastn'];
	$username = $_POST['username'];
	$pass = $_POST['crpass'];
	$cnfmpass = $_POST['cnpass'];
	$bdy = $_POST['date'];
	$gender = $_POST['gend'];
	$phone = $_POST['ph'];
	$crntmail = $_POST['crmail'];
	$location = $_POST['locat'];
	

	$sql = "insert into google (fname, lname, username, pass, cnfpass, date, gender, phone, cemail, location) values ('".$fname."','".$lname."','".$username."','".$pass."','".$cnfmpass."','".$bdy."','".$gender."','".$phone."','".$crntmail."','".$location."') ";

	$res = mysqli_query($conn, $sql);
}
if (isset($_POST['update']))
{
	$oldname= $_POST['oldn'];
	$fname = $_POST['firstn'];
	$lname = $_POST['lastn'];
	$username = $_POST['username'];
	$pass = $_POST['crpass'];
	$cnfmpass = $_POST['cnpass'];
	$bdy = $_POST['date'];
	$gender = $_POST['gend'];
	$phone = $_POST['ph'];
	$crntmail = $_POST['crmail'];
	$location = $_POST['locat'];
	

	$sql = "update google set fname='".$fname."', lname='".$lname."', username='".$username."', pass='".$pass."', cnfpass='".$cnfmpass."', date='".$bdy."', gender='".$gender."', phone='".$phone."', cemail='".$crntmail."', location='".$location."' WHERE fname='".$oldname."'";

	$res = mysqli_query($conn, $sql);
}

if (isset($_POST['delete']))
{
	$del = $_POST['del'];
	

	$sql = "delete from google where fname='".$del."'";

	$res = mysqli_query($conn, $sql);
}

$sql="SELECT * FROM google";
$records=mysqli_query($conn, $sql);


$conn->close();

?>
<html>
<head>
<title>Table Show</title>
</head>
<body>
<table border="1px solid" width="100%">
 <tr>
      <th>Fist Name</th>
      <th>Last Name</th>
      <th>User Name</th>
      <th>Password</th>
      <th>Conform Password</th>
      <th>Birthday</th>
      <th>Gender</th>
      <th>Mobile Number</th>
	  <th>Current Email</th>
      <th>Location</th>
	  </tr>
	  <?php
	  while($google=mysqli_fetch_assoc($records)){
		  echo "<tr>";
		  echo "<td>".$google['fname']."</td>";
		  echo "<td>".$google['lname']."</td>";
		  echo "<td>".$google['username']."</td>";
		  echo "<td>".$google['pass']."</td>";
		  echo "<td>".$google['cnfpass']."</td>";
		  echo "<td>".$google['date']."</td>";
		  echo "<td>".$google['gender']."</td>";
		  echo "<td>".$google['phone']."</td>";
		  echo "<td>".$google['cemail']."</td>";
		  echo "<td>".$google['location']."</td>";
		  echo"</tr>";
	  }//end while
	  ?>
	  </table>
	  <form action="delete.php" method="post">
	  <input type="submit" value="DELETE RECORD" name="delete">
	  </form>
	  <form action="update.php" method="post">
	  <input type="submit" value="UPDATE RECORD" name="update">
	  </form>
</body>
</html>