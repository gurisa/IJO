<?php
require ("connection.php");
echo "
<center>
<table width=0 height=100% border=0 bordercolor=black cellpading=0 cellspacing=0>
<tr>
<td>
";
$sql1 = mysql_query("SELECT COUNT(*) AS total_employer FROM tb_employer");
$row = mysql_fetch_array($sql1);
echo "<b>".$row['total_employer']."</b> Employers Registered";
echo "<br>";
$sql2 = mysql_query("SELECT COUNT(*) AS total_candidate FROM tb_candidate");
$row = mysql_fetch_array($sql2);
echo "<b>".$row['total_candidate']."</b> Candidates Registered";
echo "<br>";
$sql2 = mysql_query("SELECT COUNT(*) AS total_job FROM tb_job");
$row = mysql_fetch_array($sql2);
echo "<b>".$row['total_job']."</b> Active Job Available";
echo "
</td>
</tr>
</table>
</center>
";
?>