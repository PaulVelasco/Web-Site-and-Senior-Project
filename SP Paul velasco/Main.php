<!DOCTYPE html>
<html>
<head>
	<style>
.alignleft {
	float:left;
        font: 23px;
        color:black;
}
.alignright {
	float: right;
        font: 23px; 
        color:black;
}
div.ex
{
width:50%;
height: 200px;
padding:10px;
border: dashed ;
margin:0px;
position: relative;
float: left;

}

div.ex3
{
padding:10px;
margin:0px;
position: inherit;
float: left;

}

div#cs-top{
    padding-left: 45%;
    padding-right: 45%;
}
.courses
{
    position: relative;
    float: none;
    width: 550px;
    
}
.another{
    position: relative;
    float: none;
    width: 550px;
    
}
</style>
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">  
</head>

<body>
	<?php
 $user='root';
 $passwd='root';
$host='localhost';
$dbname='SPDB';
$row = $_GET['Sid'];
try{
 $dbh = new PDO('mysql:host = $host;dbname=SPDB', $user, $passwd, 
array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}catch(PDOException $e) { 
 echo $e->getMessage(); 
}
?>

<div class="navbar navbar-inverse">
<div class="navbar-inner">
<div class="container"style="width:1000px">
<a class="brand" >SUNY New Paltz Computer Science Program</a>
</div>
</div>
<div id="wrap">
<div class="container" style="width:1000px">
	<div id="contents">
<?
   $m = $dbh->query('select * from STUDENT WHERE  S_ID= "'.$_GET['Sid'].'" ');
    $result = $m->fetch(PDO::FETCH_ASSOC);
     print_r("<h3>".$result['S_NAME']."</h3>");
	 
    ?>		
<a class="btn btn-mini btn-primary" href="index.php">Go Back</a>
<div style="margin-top: 20px; margin-left: 445px;">
	<table>
		<tr>
			
		
			 <? $row = $dbh->query('select * from STUDENT_REC where S_ID= "'.$_GET['Sid'].'"and C_ID ="CPS210" ');
     	$class = $row->fetch(PDO::FETCH_ASSOC);
		if(isset($class['S_ID'])){
			$color = "btn-success";
		}
		else{
			$color = "btn-danger";
		}
    ?>
    <!--copied from here -->
			<td><a  id="b1"class="btn btn-block  <?=$color?>" href="#" style="" rel="popover"  data-content='
<form id="mainForm" name="mainForm" method="post" action="">
 <?
 if(isset($class['S_ID'])){
 	 	print_r("<tr><td><a".$class['S_ID']."\">".$class['C_ID']."</a></td><td> ".$class['SEMESTER']."</td><td> ".$class['GRADE']."</td></tr>");
	
		}
		else{
 	 	print_r("<tr><td><a\">Class not taken."."</a></td><td> "."</td><td> "."</td></tr>");
		}
 ?>
<input type="button"  onclick="ChangeText()" value="Edit" class="btn btn-block btn-mini"/>
</form>
' data-placement="top" data-original-title="CPS 210" >Computer </br>Science 1 </br>(4)</a></td>
<!--END OF IT -->
		</tr>
		<tr>
			<td><i class="icon-arrow-down" style="margin-left: 26px"></i></td>
		</tr>
		<tr>
<!--  CS2 BUTTON   -->			
			 <? $row = $dbh->query('select * from STUDENT_REC where S_ID= "'.$_GET['Sid'].'"and C_ID ="CPS310" ');
     	$class = $row->fetch(PDO::FETCH_ASSOC);
		if(isset($class['S_ID'])){
			$color = "btn-success";
		}
		else{
			$color = "btn-danger";
		}
    ?>
			<td><a id="b2"class="btn btn-block <?=$color?>" href="#" style="" rel="popover"  data-content='
<form id="mainForm" name="mainForm" method="post" action="">
 <?
 if(isset($class['S_ID'])){
 	 	print_r("<tr><td><a".$class['S_ID']."\">".$class['C_ID']."</a></td><td> ".$class['SEMESTER']."</td><td> ".$class['GRADE']."</td></tr>");
	
		}
		else{
 	 	print_r("<tr><td><a\">Class not taken."."</a></td><td> "."</td><td> "."</td></tr>");
		}
 ?>
<input type="button"  onclick="ChangeText1()" value="Edit" class="btn btn-block btn-mini"/>
</form>
' data-placement="top" data-original-title="Data Structures" >Computer</br>Science 2</br> (4)</a></td>
<!---END OF IT -->
		</tr>
	</table>
	
</div>
<div style="height: 75px;"> 
	<div style="margin-left: 370px; float: left">
		<img src="../arrowleft.png" />
	</div>
	<div style="float: right; padding-right: 400px;">
		<img src="../arrowright.png" />
	</div>

</div>
<div class="alignleft"> 
	<p>
<button class="btn btn-mini btn-primary" onclick="demoDisplay()"href="#">Show</button>
<button class="btn btn-mini btn-primary" onclick="demoHid()" href="#">Hide</button>
</p>
<p id="s1" >Knowledge</p>
<div  id="p1"class="ex" style="width: 450px; height: 220px;">
  <p>Must take All:</p>
  <div class="courses">
  	<table>
  		<tr>
  			
  			<? $row = $dbh->query('select * from STUDENT_REC where S_ID= "'.$_GET['Sid'].'"and C_ID ="CPS330" ');
     	$class = $row->fetch(PDO::FETCH_ASSOC);
		if(isset($class['S_ID'])){
			$color = "btn-success";
		}
		else{
			$color = "btn-danger";
		}
    ?>
  			<td><a id="b4" class="btn btn-block <?=$color?>" href="#" style="" rel="popover" data-content='
<form id="mainForm" name="mainForm" method="post" action="">
 <?
 if(isset($class['S_ID'])){
 	 	print_r("<tr><td><a".$class['S_ID']."\">".$class['C_ID']."</a></td><td> ".$class['SEMESTER']."</td><td> ".$class['GRADE']."</td></tr>");
	
		}
		else{
 	 	print_r("<tr><td><a\">Class not taken."."</a></td><td> "."</td><td> "."</td></tr>");
		}
 ?>
 <input type="button"  onclick="ChangeText3()" value="Edit" class="btn btn-block btn-mini"/>
</form>
' data-placement="top" data-original-title="Assembly and Architecture" >Assembly and</br> Architecture</br> (4)</a></td>
  			
  			
  			
  <? $row = $dbh->query('select * from STUDENT_REC where S_ID= "'.$_GET['Sid'].'"and C_ID ="CPS315" ');
     	$class = $row->fetch(PDO::FETCH_ASSOC);
		if(isset($class['S_ID'])){
			$color = "btn-success";
		}
		else{
			$color = "btn-danger";
		}
    ?>			
  			<td><a  id="b3" class="btn btn-block  <?=$color?>" href="#" style="" rel="popover" data-content='
<form id="mainForm" name="mainForm" method="post" action="">
 <?
 if(isset($class['S_ID'])){
 	 	print_r("<tr><td><a".$class['S_ID']."\">".$class['C_ID']."</a></td><td> ".$class['SEMESTER']."</td><td> ".$class['GRADE']."</td></tr>");
	
		}
		else{
 	 	print_r("<tr><td><a\">Class not taken."."</a></td><td> "."</td><td> "."</td></tr>");
		}
 ?>
<input type="button"  onclick="ChangeText2()" value="Edit" class="btn btn-block btn-mini"/>
</form>
' data-placement="top" data-original-title="CPS 315" >Computer </br>Science III </br>(4)</a></td>




<? $row = $dbh->query('select * from STUDENT_REC where S_ID= "'.$_GET['Sid'].'"and C_ID ="CPS352" ');
     	$class = $row->fetch(PDO::FETCH_ASSOC);
		if(isset($class['S_ID'])){
			$color = "btn-success";
		}
		else{
			$color = "btn-danger";
		}
    ?>
  			<td><a  id="b7"class="btn btn-block  <?=$color?>" href="#" style="" rel="popover"  data-content='
<form id="mainForm" name="mainForm" method="post" action="">
 <?
 if(isset($class['S_ID'])){
 	 	print_r("<tr><td><a".$class['S_ID']."\">".$class['C_ID']."</a></td><td> ".$class['SEMESTER']."</td><td> ".$class['GRADE']."</td></tr>");
	
		}
		else{
 	 	print_r("<tr><td><a\">Class not taken."."</a></td><td> "."</td><td> "."</td></tr>");
		}
 ?>
<input type="button"  onclick="ChangeText6()" value="Edit" class="btn btn-block btn-mini"/>
</form>
' data-placement="top" data-original-title="Object Oriented Programming" >Object Oriented </br>Programming</br>(3)</a></td><p>    <p>


<!--  DICRETT BUTTON 320--->
<? $row = $dbh->query('select * from STUDENT_REC where S_ID= "'.$_GET['Sid'].'"and C_ID ="MAT320" ');
     	$class = $row->fetch(PDO::FETCH_ASSOC);
		if(isset($class['S_ID'])){
			$color = "btn-success";
		}
		else{
			$color = "btn-danger";
		}
    ?>

  			<td><a  id="b8"class="btn btn-block  <?=$color?>" href="#" style="" rel="popover"  data-content='
<form id="mainForm" name="mainForm" method="post" action="">
 <?
 if(isset($class['S_ID'])){
 	 	print_r("<tr><td><a".$class['S_ID']."\">".$class['C_ID']."</a></td><td> ".$class['SEMESTER']."</td><td> ".$class['GRADE']."</td></tr>");
	
		}
		else{
 	 	print_r("<tr><td><a\">Class not taken."."</a></td><td> "."</td><td> "."</td></tr>");
		}
 ?>
<input type="button"  onclick="ChangeText7()" value="Edit" class="btn btn-block btn-mini"/>
</form>
' data-placement="top" data-original-title="Discrete Math for CS" >Discrete Math </br>for CS </br>(3)</a></td>
<!-- END OF IT-->
  		</tr>
		<tr>
			<td><i class="icon-arrow-down" style="margin-left: 38px"></i></td>
			<td><i class="icon-arrow-down" style="margin-left: 29px"></i></td>
			<td><i class="icon-arrow-down" style="margin-left: 44px"></i></td>
			<td><i class="icon-arrow-down" style="margin-left: 58px"></i></td>
		</tr>
		<tr>
			<? $row = $dbh->query('select * from STUDENT_REC where S_ID= "'.$_GET['Sid'].'"and C_ID ="CPS340" ');
     	$class = $row->fetch(PDO::FETCH_ASSOC);
		if(isset($class['S_ID'])){
			$color = "btn-success";
		}
		else{
			$color = "btn-danger";
		}
    ?>
			<td><a  id="b5"class="btn btn-block  <?=$color?>" href="#" style="" rel="popover"  data-content='
<form id="mainForm" name="mainForm" method="post" action="">
 <?
 if(isset($class['S_ID'])){
 	 	print_r("<tr><td><a".$class['S_ID']."\">".$class['C_ID']."</a></td><td> ".$class['SEMESTER']."</td><td> ".$class['GRADE']."</td></tr>");
	
		}
		else{
 	 	print_r("<tr><td><a\">Class not taken."."</a></td><td> "."</td><td> "."</td></tr>");
		}
 ?>
<input type="button"  onclick="ChangeText4()" value="Edit" class="btn btn-block btn-mini"/>
</form>
' data-placement="top" data-original-title="Operating Systems" >Operating </br>Systems </br>(4)</a></td>

<!-- Language Processing Buttomn   -->
 <? $row = $dbh->query('select * from STUDENT_REC where S_ID= "'.$_GET['Sid'].'"and C_ID ="CPS425" ');
     	$class = $row->fetch(PDO::FETCH_ASSOC);
		if(isset($class['S_ID'])){
			$color = "btn-success";
		}
		else{
			$color = "btn-danger";
		}
    ?>
    
			<td><a  id="b6"class="btn btn-block <?=$color?>" href="#" style="" rel="popover" data-content='
<form id="mainForm" name="mainForm" method="post" action="">
 <?
 if(isset($class['S_ID'])){
 	 	print_r("<tr><td><a".$class['S_ID']."\">".$class['C_ID']."</a></td><td> ".$class['SEMESTER']."</td><td> ".$class['GRADE']."</td></tr>");
	
		}
		else{
 	 	print_r("<tr><td><a\">Class not taken."."</a></td><td> "."</td><td> "."</td></tr>");
		}
 ?>
<input type="button"  onclick="ChangeText5()" value="Edit" class="btn btn-block btn-mini"/>
</form>
' data-placement="top" data-original-title="Language Processing" >Language </br>Processing </br>(4)</a></td>
<!--end of BUTTON -->				
			<? $row = $dbh->query('select * from STUDENT_REC where S_ID= "'.$_GET['Sid'].'"and C_ID ="CPS353" ');
     	$class = $row->fetch(PDO::FETCH_ASSOC);
		if(isset($class['S_ID'])){
			$color = "btn-success";
		}
		else{
			$color = "btn-danger";
		}
    ?>
			<td><a  id="b9" class="btn btn-block <?=$color?>" href="#" style="" rel="popover"  data-content='
<form id="mainForm" name="mainForm" method="post" action="">
 <?
 if(isset($class['S_ID'])){
 	 	print_r("<tr><td><a".$class['S_ID']."\">".$class['C_ID']."</a></td><td> ".$class['SEMESTER']."</td><td> ".$class['GRADE']."</td></tr>");
	
		}
		else{
 	 	print_r("<tr><td><a\">Class not taken."."</a></td><td> "."</td><td> "."</td></tr>");
		}
 ?>
<input type="button"  onclick="ChangeText8()" value="Edit" class="btn btn-block btn-mini"/>
</form>
' data-placement="top" data-original-title="Software Engineering" >Software</br> Engineering </br>(3)</a></td>


<!--  the cps 415---->
<? $row = $dbh->query('select * from STUDENT_REC where S_ID= "'.$_GET['Sid'].'"and C_ID ="CPS415" ');
     	$class = $row->fetch(PDO::FETCH_ASSOC);
		if(isset($class['S_ID'])){
			$color = "btn-success";
		}
		else{
			$color = "btn-danger";
		}
    ?>

			<td><a  id="b10"class="btn btn-block <?=$color?>" href="#" style="" rel="popover"  data-content='
<form id="mainForm" name="mainForm" method="post" action="">
 <?
 if(isset($class['S_ID'])){
 	 	print_r("<tr><td><a".$class['S_ID']."\">".$class['C_ID']."</a></td><td> ".$class['SEMESTER']."</td><td> ".$class['GRADE']."</td></tr>");
	
		}
		else{
 	 	print_r("<tr><td><a\">Class not taken."."</a></td><td> "."</td><td> "."</td></tr>");
		}
 ?>
<input type="button"  onclick="ChangeText9()" value="Edit" class="btn btn-block btn-mini"/>
</form>
' data-placement="top" data-original-title="Discrete Continuous Algorithms" >Discrete Continuous</br> Algorithms</br> (3)</a></td>

<!----end of it --->

		</tr>	
	</table>
  	</div>
  </div>
</div>
</div>
<div class= "alignright">
	<p>
<button class="btn btn-mini btn-primary" onclick="demoShow()"href="#">Show</button>
<button class="btn btn-mini btn-primary" onclick="demoHidden()" href="#">Hide</button>
</p>
<p id= "s2">Skills</p>
<div id= "p2"class="ex" style="width: 450px; height: 200px;">
  <p>Must take One:</p>
  <table>
  		<tr>
  			<? $row = $dbh->query('select * from STUDENT_REC where S_ID= "'.$_GET['Sid'].'"and C_ID ="CPS440" ');
     	$class = $row->fetch(PDO::FETCH_ASSOC);
		if(isset($class['S_ID'])){
			$color = "btn-success";
		}
		else{
			$color = "btn-danger";
		}
    ?>
  			<td><a id="b11"class="btn btn-block <?=$color?>" href="#" style="" rel="popover"  data-content='
<form id="mainForm" name="mainForm" method="post" action="">
 <?
 if(isset($class['S_ID'])){
 	 	print_r("<tr><td><a".$class['S_ID']."\">".$class['C_ID']."</a></td><td> ".$class['SEMESTER']."</td><td> ".$class['GRADE']."</td></tr>");
	
		}
		else{
 	 	print_r("<tr><td><a\">Class not taken."."</a></td><td> "."</td><td> "."</td></tr>");
		}
 ?>
<input type="button"  onclick="ChangeText10()" value="Edit" class="btn btn-block btn-mini"/>
</form>
' data-placement="top" data-original-title="CPS 440" >Database</br> Principles</br>(3)</a></td>
<? $row = $dbh->query('select * from STUDENT_REC where S_ID= "'.$_GET['Sid'].'"and C_ID ="CPS470" ');
     	$class = $row->fetch(PDO::FETCH_ASSOC);
		if(isset($class['S_ID'])){
			$color = "btn-success";
		}
		else{
			$color = "btn-danger";
		}
    ?>

  			<td><a  id="b13"class="btn btn-block <?=$color?>" href="#" style="" rel="popover"  data-content='
<form id="mainForm" name="mainForm" method="post" action="">
 <?
 if(isset($class['S_ID'])){
 	 	print_r("<tr><td><a".$class['S_ID']."\">".$class['C_ID']."</a></td><td> ".$class['SEMESTER']."</td><td> ".$class['GRADE']."</td></tr>");
	
		}
		else{
 	 	print_r("<tr><td><a\">Class not taken."."</a></td><td> "."</td><td> "."</td></tr>");
		}
 ?>
<input type="button"  onclick="ChangeText12()" value="Edit" class="btn btn-block btn-mini"/>
</form>
' data-placement="top" data-original-title="CPS 470" > Networks </br> </br>(3)</br></a></td>
<? $row = $dbh->query('select * from STUDENT_REC where S_ID= "'.$_GET['Sid'].'"and C_ID ="CPS493" ');
     	$class = $row->fetch(PDO::FETCH_ASSOC);
		if(isset($class['S_ID'])){
			$color = "btn-success";
		}
		else{
			$color = "btn-danger";
		}
    ?>
  		<td><a id="b14" class="btn btn-block <?=$color?>" href="#" style="" rel="popover"  data-content='
<form id="mainForm" name="mainForm" method="post" action="">
 <?
 if(isset($class['S_ID'])){
 	 	print_r("<tr><td><a".$class['S_ID']."\">".$class['C_ID']."</a></td><td> ".$class['SEMESTER']."</td><td> ".$class['GRADE']."</td></tr>");
	
		}
		else{
 	 	print_r("<tr><td><a\">Class not taken."."</a></td><td> "."</td><td> "."</td></tr>");
		}
 ?>
<input type="button"  onclick="ChangeText13()" value="Edit" class="btn btn-block btn-mini"/>
</form>
' data-placement="top" data-original-title="Web Server Programming" >Web Server </br>Programming</br>(3)</a></td>
<? $row = $dbh->query('select * from STUDENT_REC where S_ID= "'.$_GET['Sid'].'"and C_ID ="CPS342" ');
     	$class = $row->fetch(PDO::FETCH_ASSOC);
		if(isset($class['S_ID'])){
			$color = "btn-success";
		}
		else{
			$color = "btn-danger";
		}
    ?>

  		<td><a  id="b15"class="btn btn-block <?=$color?>" href="#" style="" rel="popover"  data-content='
<form id="mainForm" name="mainForm" method="post" action="">
 <?
 if(isset($class['S_ID'])){
 	 	print_r("<tr><td><a".$class['S_ID']."\">".$class['C_ID']."</a></td><td> ".$class['SEMESTER']."</td><td> ".$class['GRADE']."</td></tr>");
	
		}
		else{
 	 	print_r("<tr><td><a\">Class not taken."."</a></td><td> "."</td><td> "."</td></tr>");
		}
 ?>
<input type="button"  onclick="ChangeText14()" value="Edit" class="btn btn-block btn-mini"/>
</form>
' data-placement="top" data-original-title="CPS 342" >Embedded </br>Linux </br>(3)</a></td>
  		</tr>
		<tr >
<? $row = $dbh->query('select * from STUDENT_REC where S_ID= "'.$_GET['Sid'].'"and C_ID ="CPS492" ');
     	$class = $row->fetch(PDO::FETCH_ASSOC);
		if(isset($class['S_ID'])){
			$color = "btn-success";
		}
		else{
			$color = "btn-danger";
		}
    ?>

			<td><a  id="b12"class="btn btn-block <?=$color?>" href="#" style="" rel="popover"  data-content='
<form id="mainForm" name="mainForm" method="post" action="">
 <?
 if(isset($class['S_ID'])){
 	 	print_r("<tr><td><a".$class['S_ID']."\">".$class['C_ID']."</a></td><td> ".$class['SEMESTER']."</td><td> ".$class['GRADE']."</td></tr>");
	
		}
		else{
 	 	print_r("<tr><td><a\">Class not taken."."</a></td><td> "."</td><td> "."</td></tr>");
		}
 ?>
<input type="button"  onclick="ChangeText11()" value="Edit" class="btn btn-block btn-mini"/>
</form>
' data-placement="top" data-original-title="CPS 492" >AI/Robotics</br> (3)</a></td>
		</tr>	
	</table>
</div>
</div>
<div class="ex3" aling ="center">
<div class="another">
</div>
</div>
<div class= "alignleft">
	<p>
<button class="btn btn-mini btn-primary" onclick="demoAppear()"href="#">Show</button>
<button class="btn btn-mini btn-primary" onclick="demohid()" href="#">Hide</button>
</p>
<div  id="p4"class="ex"style="width: 450px; height: 180px">
	
<p>Math, Science & Engineering (MSE), Must take ALL:</p>
<table style="margin-left: 50px;">
  		<tr>
  		
  			<? $row = $dbh->query('select * from STUDENT_REC where S_ID= "'.$_GET['Sid'].'"and C_ID ="MAT251" ');
     	$class = $row->fetch(PDO::FETCH_ASSOC);
		if(isset($class['S_ID'])){
			$color = "btn-success";
		}
		else{
			$color = "btn-danger";
		}
    ?>
  			
  			<td><a  id="b17"class="btn btn-block <?=$color?>" href="#" style="" rel="popover"  data-content='
<form id="mainForm" name="mainForm" method="post" action="">
 <?
 if(isset($class['S_ID'])){
 	 	print_r("<tr><td><a".$class['S_ID']."\">".$class['C_ID']."</a></td><td> ".$class['SEMESTER']."</td><td> ".$class['GRADE']."</td></tr>");
	
		}
		else{
 	 	print_r("<tr><td><a\">Class not taken."."</a></td><td> "."</td><td> "."</td></tr>");
		}
 ?>
<input type="button"  onclick="ChangeText16()" value="Edit" class="btn btn-block btn-mini"/>
</form>
' data-placement="top" data-original-title="MATH 251" >Calculus 1</br>(4)</a></td>
<? $row = $dbh->query('select * from STUDENT_REC where S_ID= "'.$_GET['Sid'].'"and C_ID IN("BIO201","PHY201","CHE201") ');
     	$class = $row->fetch(PDO::FETCH_ASSOC);
		if(isset($class['S_ID'])){
			$color = "btn-success";
		}
		else{
			$color = "btn-danger";
		}
    ?>
<!----data-trigger="hover" --->
  		<td><a  id="b21"class="btn btn-block <?=$color?>" href="#" style="" rel="popover"  data-content='
<form id="mainForm" name="mainForm" method="post" action="">
 <?
 if(isset($class['S_ID'])){
 	 	print_r("<tr><td><a".$class['S_ID']."\">".$class['C_ID']."</a></td><td> ".$class['SEMESTER']."</td><td> ".$class['GRADE']."</td></tr>");
	
		}
		else{
 	 	print_r("<tr><td><a\">Class not taken."."</a></td><td> "."</td><td> "."</td></tr>");
		}
 ?>
<input type="button"  onclick="ChangeText20()" value="Edit" class="btn btn-block btn-mini"/>
</form>
' data-placement="top" data-original-title="Science 1" >Science 1 </br>(4)</a></td>
<? $row = $dbh->query('select * from STUDENT_REC where S_ID= "'.$_GET['Sid'].'"and C_ID ="EGC230" ');
     	$class = $row->fetch(PDO::FETCH_ASSOC);
		if(isset($class['S_ID'])){
			$color = "btn-success";
		}
		else{
			$color = "btn-danger";
		}
    ?>
  			<td><a  id="b19"class="btn btn-block <?=$color?>" href="#" style="" rel="popover"  data-content='
<form id="mainForm" name="mainForm" method="post" action="">
 <?
 if(isset($class['S_ID'])){
 	 	print_r("<tr><td><a".$class['S_ID']."\">".$class['C_ID']."</a></td><td> ".$class['SEMESTER']."</td><td> ".$class['GRADE']."</td></tr>");
	
		}
		else{
 	 	print_r("<tr><td><a\">Class not taken."."</a></td><td> "."</td><td> "."</td></tr>");
		}
 ?>
<input type="button"  onclick="ChangeText18()" value="Edit" class="btn btn-block btn-mini"/>
</form>
' data-placement="top" data-original-title="EGC 230" >Digital Logic Design </br>(3)</a></td>
  		</tr>
		<tr>
			<td><i class="icon-arrow-down" style="margin-left: 26px"></i></td>
			<td><i class="icon-arrow-down" style="margin-left: 26px"></i></td>
			<td><i class="icon-arrow-down" style="margin-left: 56px"></i></td>
		</tr>
		<tr>		
			<? $row = $dbh->query('select * from STUDENT_REC where S_ID= "'.$_GET['Sid'].'"and C_ID ="MAT252" ');
     	$class = $row->fetch(PDO::FETCH_ASSOC);
		if(isset($class['S_ID'])){
			$color = "btn-success";
		}
		else{
			$color = "btn-danger";
		}
    ?>	
			<td><a id="b18"class="btn btn-block <?=$color?>" href="#" style="" rel="popover2"  data-content='
<form id="mainForm" name="mainForm" method="post" action="">
 <?
 if(isset($class['S_ID'])){
 	 	print_r("<tr><td><a".$class['S_ID']."\">".$class['C_ID']."</a></td><td> ".$class['SEMESTER']."</td><td> ".$class['GRADE']."</td></tr>");
	
		}
		else{
 	 	print_r("<tr><td><a\">Class not taken."."</a></td><td> "."</td><td> "."</td></tr>");
		}
 ?>
 <input type="button"  onclick="ChangeText17()" value="Edit" class="btn btn-block btn-mini"/>
</form>
' data-placement="top" data-original-title="MATH 252" >Calculus 2 </br>(4)</a></td>
<? $row = $dbh->query('select * from STUDENT_REC where S_ID= "'.$_GET['Sid'].'"and C_ID IN("BIO202","PHY202","CHE202") ');
     	$class = $row->fetch(PDO::FETCH_ASSOC);
		if(isset($class['S_ID'])){
			$color = "btn-success";
		}
		else{
			$color = "btn-danger";
		}
    ?>
			<td><a  id="b22"class="btn btn-block <?=$color?>" href="#" style="" rel="popover2"  data-content='
<form id="mainForm" name="mainForm" method="post" action="">
 <?
 if(isset($class['S_ID'])){
 	 	print_r("<tr><td><a".$class['S_ID']."\">".$class['C_ID']."</a></td><td> ".$class['SEMESTER']."</td><td> ".$class['GRADE']."</td></tr>");
	
		}
		else{
 	 	print_r("<tr><td><a\">Class not taken."."</a></td><td> "."</td><td> "."</td></tr>");
		}
 ?>
<input type="button"  onclick="ChangeText22()" value="Edit" class="btn btn-block btn-mini"/>
</form>
' data-placement="top" data-original-title="Science 2" >Science 2 </br>(4)</a></td>
<? $row = $dbh->query('select * from STUDENT_REC where S_ID= "'.$_GET['Sid'].'"and C_ID ="EGC208" ');
     	$class = $row->fetch(PDO::FETCH_ASSOC);
		if(isset($class['S_ID'])){
			$color = "btn-success";
		}
		else{
			$color = "btn-danger";
		}
    ?>
<td><a  id="b20"class="btn btn-block <?=$color?>" href="#" style="" rel="popover2"  data-content='
<form id="mainForm" name="mainForm" method="post" action="">
 <?
 if(isset($class['S_ID'])){
 	 	print_r("<tr><td><a".$class['S_ID']."\">".$class['C_ID']."</a></td><td> ".$class['SEMESTER']."</td><td> ".$class['GRADE']."</td></tr>");
	
		}
		else{
 	 	print_r("<tr><td><a\">Class not taken."."</a></td><td> "."</td><td> "."</td></tr>");
		}
 ?>
 <input type="button"  onclick="ChangeText19()" value="Edit" class="btn btn-block btn-mini"/>
</form>
' data-placement="top" data-original-title="EGC 208" >Digital Logic lab </br>(1)</a></td></div>
		</tr>	
	</table>
</div>
</div>
<div id="p3"class= "alingright" style="width: 150px; margin-top: 270px; margin-left: 710px;">
	<table>
		<tr>
			<td><i class="icon-arrow-down" style="margin-left: 38px"></i></td>
		</tr>
		<tr>		
			<? $row = $dbh->query('select * from STUDENT_REC where S_ID= "'.$_GET['Sid'].'"and C_ID ="CPS450" ');
     	$class = $row->fetch(PDO::FETCH_ASSOC);
		if(isset($class['S_ID'])){
			$color = "btn-success";
		}
		else{
			$color = "btn-danger";
		}
    ?>
			<td><a  id="b16"class="btn btn-block <?=$color?>" href="#" style="" rel="popover"  data-content='
<form id="mainForm" name="mainForm" method="post" action="">
 <?
 if(isset($class['S_ID'])){
 	 	print_r("<tr><td><a".$class['S_ID']."\">".$class['C_ID']."</a></td><td> ".$class['SEMESTER']."</td><td> ".$class['GRADE']."</td></tr>");
	
		}
		else{
 	 	print_r("<tr><td><a\">Class not taken."."</a></td><td> "."</td><td> "."</td></tr>");
		}
 ?>
<input type="button"  onclick="ChangeText15()" value="Edit" class="btn btn-block btn-mini"/>
</form>
' data-placement="top" data-original-title="CPS 450" >Senior Project </br> (4)</a></td>
		</tr>
	</table>
	
</div>



</div>
</div>
</div>
<div id ="footer">
	<div class="container">
  <p class="alignleft">Major: 12 courses + MSE(6 courses)</p>
  <p class="alignright">Minor: 4 courses + 1 Math </p> 
  </div>
</div>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<script> 
   // THE FUCTION FOR THE SHOW
   function demoDisplay() {
		document.getElementById("p1").style.display = 'block';
		document.getElementById("s1").style.display = 'block';

		}
		 function demoShow() {
		document.getElementById("p2").style.display = 'block';
		document.getElementById("p3").style.display = 'block';
		document.getElementById("s2").style.display = 'block';

		}
		 function demoAppear() {
		document.getElementById("p4").style.display = 'block';
	}
	
//TO CHANGE THE TEXT ON THE BUTTONS 
function ChangeText(){ document.getElementById('b1').innerHTML="CS I (4)";}
function ChangeText1(){ document.getElementById('b2').innerHTML="CS II (4)";}
function ChangeText2(){ document.getElementById('b3').innerHTML="CS III <br>(4)";}
function ChangeText3(){ document.getElementById('b4').innerHTML="Asm <br>(4)";}
function ChangeText4(){ document.getElementById('b5').innerHTML="Os <br>(4)";}
function ChangeText5(){ document.getElementById('b6').innerHTML="Lp <br> (4)";}
function ChangeText6(){ document.getElementById('b7').innerHTML="Oop <br>(3)";}
function ChangeText7(){ document.getElementById('b8').innerHTML="Dmc <br>(3)";}
function ChangeText8(){ document.getElementById('b9').innerHTML="Se <br>(3)";}
function ChangeText9(){ document.getElementById('b10').innerHTML="Dc/a <br>(3)";}
function ChangeText10(){ document.getElementById('b11').innerHTML="DATABASE <br>(3)";}
function ChangeText11(){ document.getElementById('b12').innerHTML="AI/R <br>(3)";}
function ChangeText12(){ document.getElementById('b13').innerHTML="NETWORKS CPS<br>(3)";}
function ChangeText13(){ document.getElementById('b14').innerHTML="WB SERVER <br>(3)";}
function ChangeText14(){ document.getElementById('b15').innerHTML="Android Development <br>(3)";}
function ChangeText15(){ document.getElementById('b16').innerHTML=" PROJECT<br>(4)";}
function ChangeText16(){ document.getElementById('b17').innerHTML="CAL I <br> (4)";}
function ChangeText17(){ document.getElementById('b18').innerHTML="CAL II <br>(4)";}
function ChangeText18(){ document.getElementById('b19').innerHTML="DLD I <br>(3)";}
function ChangeText19(){ document.getElementById('b20').innerHTML="DLL II <br>(1)";}
function ChangeText20(){ document.getElementById('b21').innerHTML="BIO/<br>CHEM/PHY I<br> (4)";}
function ChangeText22(){ document.getElementById('b22').innerHTML="BIO/<br>CHEM/PHY II<br>(4)";}   




// THE FUNCTION FOR THE HIDE

 function demoHid()
{
document.getElementById("p1").style.display="none";
document.getElementById("s1").style.display="none";

}
function demoHidden(){
document.getElementById("p2").style.display="none";
document.getElementById("p3").style.display="none";
document.getElementById("s2").style.display="none";

}
function demohid(){
document.getElementById("p4").style.display="none";
}

// POP OVER 
	$(function(){
		$('a[rel=popover]').popover({
    	html: 'true',
		placement: 'bottom'
		});

	});
	$(function(){
		$('a[rel=popover2]').popover({
    	html: 'true',
		placement: 'top'
		});

	});

</script> 
</body>
</html>

