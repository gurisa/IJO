<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
session_start()
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="" content="Lowongan Kerja Online " />
<meta name="keywords" content="Lowongan Kerja Online" />
<meta name="description" content="Indonesian Job Online" />

<title>Indonesian Job Online</title>
<script src="css/SpryMenuBar.js" type="text/javascript"></script>
<link href="css/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<link href="css/settings.css" rel="stylesheet" type="text/css" />
</head>
<body>
<center>
<table width="80%" height= "0" border="0" bordercolor="black" cellpading="0" cellspacing="0">
<tr>
<td width="25%">
<img src="image/job_logo.png" width="" height="" alt=""></img>
</td>
<td>
<font face="Courier New" size="5px">
<b>INDONESIAN JOB ONLINE</b>
</font>
<br>
<font face="Times New Roman" size="2px">
CHOOSE A JOB YOU LOVE AND YOU WILL NEVER HAVE TO WORK A DAY IN YOUR LIFE
</font>
</td>
</tr>
</table>
<br>
<table width="100%" height = "0" border="0" bordercolor="black" cellpading="0" cellspacing="0">
<tr>
<td>
<center>
<table class="shadow" width="80%" height = "0" border="0" bordercolor="black" cellpading="0" cellspacing="0">
<tr>
<td width="70%" bgcolor="#006600">
<?php
require("menu_bar.php");
?>
</td>
<td width="30%" bgcolor="#006600">
<input type="text" id="search" maxlength="250" size="30px"></input>
<input type="submit" value="Search"></input>
</td>
</tr>
</table>
</center>
</td>
</tr>
</table>
<br>
<table width="100%" height = "0" border="0" bordercolor="black" cellpading="0" cellspacing="0">
<tr>
<td>
<center>
<table width="80%" border="0" bordercolor="black" cellpading="0" cellspacing="0">
<tr>
<td rowspan="2">

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if ($_POST["type"] == "employer") {
	$_SESSION["type"] = "employer";
	echo "
		<form method=POST action=register_validation.php>
		<table class=shadow width=99% height=500px border=1 bordercolor=black cellpading=0 cellspacing=0>
		<tr><th height=5px>EMPLOYER FORM</th></tr>
		<tr>
		<td>
		<br>
		<center>
		<table class=shadow width=98% height=0 border=1 bordercolor=black cellpading=0 cellspacing=0>
		<tr>
		<td><label for=username>USERNAME</label></td>
		<td><input type=text id=username name=username maxlength=50 size=50px></input></td>
		</tr>
		<tr>
		<td><label for=password>PASSWORD</label></td>
		<td><input type=password id=password name=password maxlength=20 size=50px></input></td>
		</tr>
		<tr>
		<td><label for=confirm>CONFIRM PASSWORD</label></td>
		<td><input type=password id=confirm name=confirm maxlength=20 size=50px></input></td>
		</tr>
		</table>
		</center>
		<br>
		<center>
		<table class=shadow width=98% height=0 border=1 bordercolor=black cellpading=0 cellspacing=0>
		<tr>
		<td><label for=name>EMPLOYER NAME</label></td>
		<td><input type=text id=name name=name maxlength=250 size=50px></input></td>
		</tr>
		<tr>
		<td><label for=address>ADDRESS</label></td>
		<td><textarea name=address id=address rows=4 cols=40 maxlength=250></textarea></td>
		</tr>
		<tr>
		<td><label for=city>CITY</label></td>
		<td><input type=text id=city name=city maxlength=250 size=50px></input>
		</td>
		</tr>
		<tr>
		<td><label for=province>PROVINCE</label></td>
		<td>
		<select name=province id=province>
		";
		require("connection.php");
		$sql = mysql_query("SELECT name_province FROM tb_province ORDER BY name_province ASC");
		while ($row = mysql_fetch_array($sql)) {
			echo "<option value=".$row['name_province']." id=".$row['name_province']." name=".$row['name_province'].">".$row['name_province']."</option>";
		}
		echo "
		</select>
		</td>
		</tr>
		<tr>
		<td><label for=phone>PHONE</label></td>
		<td><input type=text id=phone name=phone maxlength=250 size=50px></input>
		</td>
		</tr>
		<tr>
		<td><label for=email>EMAIL</label></td>
		<td><input type=text id=email name=email maxlength=250 size=50px></input></td>
		</tr>
		<tr>
		<td><label for=fax>FAX</label></td>
		<td><input type=text id=fax name=fax maxlength=250 size=50px></input></td>
		</tr>
		</table>
		</center>
		<br>
		<center>
		<table width=98% height=10px border=0 bordercolor=black cellpading=0 cellspacing=0>
		<tr>
		<td width=90%>
		<input type=checkbox name=agree id=agree value=agree><label for=agree>I agree with any term and conditions</label></input>
		</td>
		<td width=10%>
		<input type=submit value=Register></input>
		</td>
		</tr>
		</table>
		</center>
		</td>
		</tr>
		</table>
		</form>
		";
	}
	elseif ($_POST["type"] == "candidate") {
		$_SESSION["type"] = "candidate";
		echo "
		<form method=POST action=register_validation.php>
		<table class=shadow width=99% height=500px border=1 bordercolor=black cellpading=0 cellspacing=0>
		<tr><th height=5px>CANDIDATE FORM</th></tr>
		<tr>
		<td>
		<br>
		<center>
		<table class=shadow width=98% height=0 border=1 bordercolor=black cellpading=0 cellspacing=0>
		<tr>
		<td><label for=username>USERNAME</label></td>
		<td><input type=text id=username name=username maxlength=50 size=50px></input></td>
		</tr>
		<tr>
		<td><label for=password>PASSWORD</label></td>
		<td><input type=password id=password name=password maxlength=20 size=50px></input></td>
		</tr>
		<tr>
		<td><label for=confirm>CONFIRM PASSWORD</label></td>
		<td><input type=password id=confirm name=confirm maxlength=20 size=50px></input></td>
		</tr>
		</table>
		</center>
		<br>
		<center>
		<table class=shadow width=98% height=0 border=1 bordercolor=black cellpading=0 cellspacing=0>
		<tr>
		<td><label for=title>TITLE</label></td>
		<td><input type=text id=title name=title maxlength=250 size=50px></input></td>
		</tr>
		<tr>
		<td><label for=first>FIRST NAME</label></td>
		<td><input type=text id=first name=first maxlength=250 size=50px></input></td>
		</tr>
		<tr>
		<td><label for=last>LAST NAME</label></td>
		<td><input type=text id=last name=last maxlength=250 size=50px></input></td>
		</tr>
		<tr>
		<td><label for=address>ADDRESS</label></td>
		<td><textarea name=address id=address rows=4 cols=40 maxlength=250></textarea></td>
		</tr>
		<tr>
		<td><label for=city>CITY</label></td>
		<td><input type=text id=city name=city maxlength=250 size=50px></input>
		</td>
		</tr>
		<tr>
		<td><label for=province>PROVINCE</label></td>
		<td>
		<select name=province>
		";
		require("connection.php");
		$sql = mysql_query("SELECT name_province FROM tb_province ORDER BY name_province ASC");
		while ($row = mysql_fetch_array($sql)) {
			echo "<option value=".$row['name_province']." id=".$row['name_province']." name=".$row['name_province'].">".$row['name_province']."</option>";
		}
		echo "
		</select>
		</td>
		</tr>
		<tr>
		<td><label for=phone>PHONE</label></td>
		<td><input type=text id=phone name=phone maxlength=250 size=50px></input>
		</td>
		</tr>
		<tr>
		<td><label for=email>EMAIL</label></td>
		<td><input type=text id=email name=email maxlength=250 size=50px></input></td>
		</tr>
		<tr>
		<td><label for=postal>POSTAL CODE</label></td>
		<td><input type=text id=postal name=postal maxlength=10 size=50px></input></td>
		</tr>
		<tr>
		<td><label for=fax>FAX</label></td>
		<td><input type=text id=fax name=fax maxlength=250 size=50px></input></td>
		</tr>
		<tr>
		<td><label for=cell>CELL</label></td>
		<td><input type=text id=cell name=cell maxlength=250 size=50px></input></td>
		</tr>
		</table>
		</center>
		<br>
		<center>
		<table width=98% height=10px border=0 bordercolor=black cellpading=0 cellspacing=0>
		<tr>
		<td width=90%>
		<input type=checkbox name=agree id=agree><label for=agree>I agree with any term and conditions</label></input>
		</td>
		<td width=10%>
		<input type=submit value=Register></input>
		</td>
		</tr>
		</table>
		</center>
		</td>
		</tr>
		</table>
		</form>
		";
	}
	else {
		header("location:register.php");
	}
}
else {
	echo "
	<center>
	<form method=POST action=$_SERVER[PHP_SELF]>
	<table class=shadow width=50% height=100px border=1 bordercolor=black cellpading=0 cellspacing=0>
	<tr>
	<th>
	SELECT REGISTRATION TYPE
	</th>
	</tr>
	<tr>
	<td>
	<input type=radio name=type id=employer value=employer><label for=employer>EMPLOYER</label></input>
	<input type=radio name=type id=candidate value=candidate><label for=candidate>CANDIDATE</label></input>
	</td>
	</tr>
	<tr>
	<td>
	<input type=submit value=Select></input>
	</td>
	</tr>
	</table>
	</form>
	</center>
	";
}
?>

<table width="99%" height="185px" border="0" bordercolor="black" cellpading="0" cellspacing="0">
<tr><td></td></tr>
</table>
</td>
<td width="30%" rowspan="2">
<table class="shadow" width="100%" height = "100px" border="1" bordercolor="black" cellpading="0" cellspacing="0">
<tr>
<th height="5px">
LOGIN
</th>
</tr>
<tr>
<td>
<?php
require("login.php");
?>
</td>
</tr>
</table>
<br>
<table class="shadow" width="100%" height="250px" border="1" bordercolor="black" cellpading="0" cellspacing="0">
<tr>
<th height="5px">
LATEST COMPANY
</th>
</tr>
<tr>
<td>
<?php
require("latest_company.php");
?>
</td>
</tr>
</table>
<br>
<table class="shadow" width="100%" height="250px" border="1" bordercolor="black" cellpading="0" cellspacing="0">
<tr>
<th height="5px">
LATEST JOB
</th>
</tr>
<tr>
<td>
<?php
require("latest_job.php");
?>
</td>
</tr>
</table>
<br>
<table class="shadow" width="100%" height="100px" border="1" bordercolor="black" cellpading="0" cellspacing="0">
<tr>
<th height="5px">
WEBSITE STATUS
</th>
</tr>
<tr>
<td>
<?php
require("website_status.php");
?>
</td>
</tr>
</table>
</td>
</tr>
</table>
</center>
</td>
</tr>
</table>
<br>
<table width="100%" height = "0" border="0" bordercolor="black" cellpading="0" cellspacing="0">
<tr>
<td>
<center>
<?php
require("footer.php");
?>
</center>
</td>
</tr>
</table>
</center>

<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"css/SpryMenuBarDownHover.gif", imgRight:"css/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>