<?php
require("connection.php");
$sql = mysql_query("SELECT id_employer, name_employer, province_employer FROM tb_employer ORDER BY date_employer DESC LIMIT 0, 3") or die(mysql_error());
if (mysql_num_rows($sql) > 0) {
	while ($row = mysql_fetch_array($sql)) {
		echo "
		<center>
		<table width=80% height=100% border=0 cellpading=0 cellspacing=0 bordercolor=black>
		<tr>
		<td>
		<a href=employer.php?id=".$row['id_employer'].">".$row['name_employer']."</a>
		</td>
		</tr>
		<tr>
		<td>
		<div style=text-align:justify>
		<small>
		";
		echo $row['province_employer'];
		echo "
		</small>
		</div>
		</td>
		</tr>
		</table>
		</center>
		<br>
		";
	}
}
else {
	echo "<center><b>EMPLOYER NOT AVAILABLE</b></center>";
}
?>