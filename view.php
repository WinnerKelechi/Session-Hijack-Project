<?php 
session_start();
include ('db_connect.inc.php');


 include ("nav.php");
?>
<hr>
<center>
    <h1>Monitor Your Activities</h1>
    <form action="view.php" method="post">
        <select name="select" style="width:500px; height:50px">
            <option selected>...Select Comment...</option>
            <option value=0>Without INTRUSION DETECTION ALGORITHM</option>

            <option value=1>With INTRUSION DETECTION ALGORITHM</option>
            <input type="submit" value="Submit" name="submit">
        </select>


    </form>
    <hr>



    <?php


if(isset($_POST["submit"]))
{
 
 
	$select = $_POST["select"];

	if ($select==0) {
			$query="SELECT name,comment FROM `comment`";
		$result=mysqli_query($conn,$query);

		echo"<table border='2px' cellpadding='20'>
		<tr>
		<th>Person's Name</th>
		<th>Comment</th>
		</tr>";
		while($row=mysqli_fetch_row($result)){
		echo "<tr>
		<td>$row[0]</td>
		<td>$row[1]</td>

		</tr>";
		}
		echo"</table>";
	}



	else{
		$query="SELECT sessionid,ipaddress,name,comment FROM `securecomment`";
		$result=mysqli_query($conn,$query);

		echo"<table border='2px' cellpadding='20'>
		<tr>
		<th>Session</th>
		<th>IP address</th>
		<th>Person's Name</th>
		<th>Comment</th>
		</tr>";
		while($row=mysqli_fetch_row($result)){
		echo "<tr>
		<td>$row[0]</td>
		<td>$row[1]</td>
		<td>$row[2]</td>
		<td>$row[3]</td>
		</tr>";
		}
		echo"</table>";
		}
}
/*
$comment = $_POST["comment"];



*/




?>
</center>
