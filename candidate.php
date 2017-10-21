<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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
<table width="99%" height="770px" border="0" bordercolor="black" cellpading="0" cellspacing="0">
<tr>
<td>
<table class="shadow" width="99%" height="50px" border="1" bordercolor="black" cellpading="0" cellspacing="0">
<tr>
<td>
<center>
<select name="kategori">
<option value="keyword" name="keyword" id="keyword">Keyword</option>
<option value="province" name="province" id="province">Province</option>
<option value="skill" name="skill" id="skill">Skill</option>
<input type="text" maxlength="250" size="50px"></input>
<input type="submit" value="Search"></input>
</center>
</td>
</tr>
</table>
<br>
<table width="99%" height="650px" border="0" bordercolor="black" cellpading="0" cellspacing="0">
<tr>
<td>
<center>
<table class="shadow" width="100%" height="650px" border="1" bordercolor="black" cellpading="0" cellspacing="0">
<tr>
<th height="5px" width="40%">
JOB NAME
</th>
<th height="5px" width="30%">
PROVINCE
</th>
<th height="5px" width="30%">
SKILL
</th>
</tr>
<tr>
<td>

</td>
<td>

</td>
<td>

</td>
</tr>
</table>
</center>
</td>
</tr>
</table>
<p>
<center>PREVIOUS &nbsp; NEXT</center>
</td>
</tr>
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

<?php

?>