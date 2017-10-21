<?php
require("connection.php");
$sql = mysql_query("SELECT id_job, name_job, province_job, skill_job FROM tb_job ORDER BY date_job DESC LIMIT 0, 3") or die(mysql_error());
if (mysql_num_rows($sql) > 0) {
	while ($row = mysql_fetch_array($sql)) {
		echo "
		<center>
		<table width=80% height=100% border=0 cellpading=0 cellspacing=0 bordercolor=black>
		<tr>
		<td>
		<a href=job.php?id=".$row['id_job'].">".$row['name_job']."</a>
		</td>
		</tr>
		<tr>
		<td>
		<div style=text-align:justify>
		<small>
		";
		echo $row['province_job'];
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		echo $row['skill_job'];
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
	echo "<center><b>JOB NOT AVAILABLE</b></center>";
}
?>