<?php
session_start();
require("js/register.js");
require("connection.php");
$username = $password = $confirm = $name = $address = $city = $province = $phone = $email = $fax = $cell = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if ($_SESSION["type"] == "employer") {
		$username = $_POST["username"];
		$password = md5($_POST["password"]);
		$confirm = md5($_POST["confirm"]);
		$name = $_POST["name"];
		$address = $_POST["address"];
		$city = $_POST["city"];
		$province = $_POST["province"];
		$phone = $_POST["phone"];
		$email = $_POST["email"];
		$fax = $_POST["fax"];
		$date = date("Y/m/d");
		if ($username == "" or '' OR $password == "" or '' OR $confirm == "" or '' OR $name == "" or '' OR $address == "" or '' OR $city == "" or '' OR $province == "" or '' OR $phone == "" or '' OR $email == "" or '' OR $fax == "" or '') {
			header("location:register.php");
		}
		else {
			if ($password == $confirm) {
				$sql1 = mysql_query("SELECT username_employer FROM tb_employer WHERE username_employer='$username'");
				if (mysql_num_rows($sql1) > 0) {
					header("location:register.php");					
				}
				else {
					$sql2 = mysql_query("INSERT INTO tb_employer(username_employer, password_employer, name_employer, address_employer, province_employer , city_employer , phone_employer , fax_employer, email_employer, date_employer) VALUES('$username', '$password', '$name', '$address', '$province', '$city', '$phone', '$fax', '$email', '$date')") or die (mysql_error());
					$_SESSION["username"] = $username;
					$_SESSION["name"] = $name;
					header("location:index.php");
				}
			}
			else {
				echo "Tidak Sama";
			}
		}
		
	}
	elseif ($_SESSION["type"] == "candidate") {
		$username = $_POST["username"];
		$password = md5($_POST["password"]);
		$confirm = md5($_POST["confirm"]);
		$title = $_POST["title"];
		$first = $_POST["first"];
		$last = $_POST["last"];
		$address = $_POST["address"];
		$city = $_POST["city"];
		$province = $_POST["province"];
		$phone = $_POST["phone"];
		$email = $_POST["email"];
		$postal = $_POST["postal"];
		$fax = $_POST["fax"];
		$cell = $_POST["cell"];
		$date = date("Y/m/d");
		if ($username == "" or '' OR $password == "" or '' OR $confirm == "" or '' OR $first == "" or '' OR $last == "" or '' OR $address == "" or '' OR $city == "" or '' OR $province == "" or '' OR $phone == "" or '' OR $email == "" or '' OR $postal == "" or '' OR $fax == "" or '' OR $cell == "" or '') {
			header("location:register.php");
		}
		else {
			if ($password == $confirm) {
				$sql1 = mysql_query("SELECT username_candidate FROM tb_candidate WHERE username_candidate='$username'");
				if (mysql_num_rows($sql1) > 0) {
					header("location:register.php");					
				}
				else {
					$sql2 = mysql_query("INSERT INTO tb_candidate(username_candidate, password_candidate, title_candidate, first_name_candidate, last_name_candidate, address_candidate, city_candidate, province_candidate, phone_candidate , email_candidate, postal_code_candidate, fax_candidate, cell_candidate, date_candidate) VALUES('$username', '$password', '$title', '$first', '$last', '$address', '$city', '$province', '$phone', '$email', '$postal', '$fax', '$cell', '$date')") or die (mysql_error());
					$_SESSION["username"] = $username;
					$_SESSION["first"] = $name;
					header("location:index.php");
				}
			}
			else {
				echo "Tidak Sama";
			}
		}
	}
}
else {
	header("location:register.php");
}
?>