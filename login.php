<?php
session_start();
require("connection.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if ($_SESSION["username"] == "") {
		echo "
		<form method=POST action=$_SERVER[PHP_SELF]>
		<table width=100% height=0 border=0 bordercolor=black cellpading=0 cellspacing=0>
		<tr>
		<td>
		<center>
		<table width=80% height=0 border=0 bordercolor=black cellpading=0 cellspacing=0>
		<tr>
		<td height=30%>
		<label for=username>Username :</label><input type=text size= name=username id=username maxlength=50></input>
		<br>
		<label for=password>Password :</label><input type=text size= name=password id=password maxlength=50></input>
		<br>
		<select name=type>
		<option value=candidate id=candidate name=candidate>Candidate</option>
		<option value=employer id=employer name=employer>Employer</option>
		</select>
		<br>
		<input type=submit value=Login></input>
		</td>
		</tr>
		</table>
		</center>
		</td>
		</tr>
		</table>
		</form>
		";	}
	else {
		echo "Welcome Back ";
		echo $_SESSION["username"];
	}
	if ($_POST["type"] == "employer") {
		$sql1 = mysql_query("SELECT username_employer, password_employer FROM tb_employer") or die (mysql_error());
		if (mysql_num_rows($sql1) > 0) {
			$_SESSION["username"] = $_POST["username"];;
			header("location:member_area.php");
		}
		else {
			header("location:index.php");
		}
	}
	elseif ($_POST["type"] == "candidate") {
		$sql2 = mysql_query("SELECT username_candidate, password_candidate FROM tb_candidate") or die (mysql_error());
		if (mysql_num_rows($sql1) > 0) {
			$_SESSION["username"] = $_POST["username"];;
			header("location:member_area.php");
		}
		else {
			header("location:index.php");
		}
	}
}
else {
		echo "
		<form method=POST action=$_SERVER[PHP_SELF]>
		<table width=100% height=0 border=0 bordercolor=black cellpading=0 cellspacing=0>
		<tr>
		<td>
		<center>
		<table width=80% height=0 border=0 bordercolor=black cellpading=0 cellspacing=0>
		<tr>
		<td height=30%>
		<label for=username>Username :</label><input type=text size= name=username id=username maxlength=50></input>
		<br>
		<label for=password>Password :</label><input type=text size= name=password id=password maxlength=50></input>
		<br>
		<select name=type>
		<option value=candidate id=candidate name=candidate>Candidate</option>
		<option value=employer id=employer name=employer>Employer</option>
		</select>
		<br>
		<input type=submit value=Login></input>
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
?>
