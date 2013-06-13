<!DOCTYPE html>
<html>
<head>
<link href="bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">  
</head>    
<body>

<div class="container" style="width:500px">
<div id="content">
	    <h3> Roster of Students: </h3>
<table class="table table-striped table-bordered table-hover">
	<thead>
        <tr>
            <th>Student Id </th>
            <th>Student Name </th>
        </tr>   
    </thead>
<tbody>
	
	
<?php
 $user='root';
 $passwd='root';
$host='localhost';
$dbname='SPDB';
$row2 = $_GET['S_ID'];
try{
 $dbh = new PDO('mysql:host = $host;dbname=SPDB', $user, $passwd, 
array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
 foreach($dbh->query('select * from STUDENT') as $row) {
 print_r("<tr><td>".$row['S_ID']."</td><td><a href=Main.php?Sid=".$row['S_ID'].">".$row['S_NAME']."</a></td></tr>"); 
 }
}catch(PDOException $e) { 
 echo $e->getMessage(); 
}

if (isset($_POST['sub']) )
{
$con=mysqli_connect("localhost","root","root","SPDB");
// Check connection

if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql="INSERT INTO STUDENT (S_ID, S_NAME )
VALUES
('$_POST[S_ID]','$_POST[S_NAME]')";

if (!mysqli_query($con,$sql))
{
die('Error: ' . mysqli_error());
}

mysqli_close($con);
}

if (isset($_POST['Edit']))
{
	$con2=mysqli_connect("localhost","root","root","SPDB");

	$sql2 = "SELECT * FROM STUDENT WHERE S_ID=$row2";
	$results = $dbh->query($sql2);
    $course = $results->fetch(PDO::FETCH_ASSOC);	
	
$save = "UPDATE STUDENT "
            . "Set S_ID='$_POST[S_ID]', S_NAME='$_POST[S_NAME]' "
            . "WHERE S_ID=$_POST[S_ID] ";
    $dbh->query($save);
    header("Location: index.php");
   
 if (!mysqli_query($con,$sql))
{
die('Error: ' . mysqli_error());
}

mysqli_close($con2);

}
?>


</tbody>
</table>

<div class="container">
    <div class="row" style="padding-top: 20px;"> <a  class="btn btn-primary" rel="popover" data-content='
<form method="post" action="">
    <p>
        <label>Student Id:</label>
        <input type="text" name="S_ID" />
    </p>
    <p>
        <label>Student Name :</label>
        <input type="text" name="S_NAME" />
    </p>
    <p>
        <input type="submit" name="sub"  value="Submit" />
    </p>
</form>
' data-placement="top" data-original-title="Add form">Add Student</a>

    </div>
    
 
    <div class="row" style="padding-top: 20px;"> <a href="#" class="btn btn-primary" rel="popover" data-content='
<form method="post" action="">
    <p>
        <label>Student Id:</label>
        <input type="text" name="S_ID" value="<?=$course['S_ID']?>" />
    </p>
    <p>
        <label>Student Name :</label>
        <input type="text" name="S_NAME" value="<?=$course['S_NAME']?>" />
    </p>
    <p>
        <input type="submit" name="Edit" value="Edit"  />
        <input type="submit" value="Cancel" href="index.php" />
    </p>
</form>
' data-placement="top" data-original-title="Edit form">Edit Student</a>

    </div>
</div>  
    <div class="row" style="padding-top: 20px;"> <a href="#" class="btn btn-primary" rel="popover" data-content='
<form method="post" action="">
  <p>Are you sure you want to delete this last entry?</p>
        <input type="hidden" name="" />
<input type="submit" value="Yes" />
<input type="submit" value="NO" href="index.php" />
</form>
' data-placement="top" data-original-title="Delete">Delete Student</a>

    </div>

</div>  
</div>   
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<script> 
	$(function(){
		$('a[rel=popover]').popover({
    	html: 'true',
		placement: 'top'
		});
	});
	
	</script>

</body>
</html>