<?php // query.php
require_once 'login.php';
$db_server = mysql_connect($db_hostname, $db_username, $db_password);

if (!$db_server) die("Unable to connect to MySQL: " . mysql_error());

mysql_select_db($db_database)
	or die("Unable to select database: " . mysql_error());

$query = "SELECT trans, transAmount, endBalance, date FROM chkledger";
$result = mysql_query($query);
if (!$result) die ("Database access failed: " . mysql_error());
$rows = mysql_num_rows($result);

echo "<table><tr> <th>Transaction</th> <th>Transaction Amount</th>
	<th>End Balance</th><th>Date</th></tr>";

for ($j = 0 ; $j < $rows ; ++$j)
{
	$row = mysql_fetch_row($result);
	echo "<tr>";
	for ($k = 0 ; $k < 4 ; ++$k) echo "<td>$row[$k]</td>";
	echo "</tr>";
}

echo "</table>";
            
mysql_close($dbc);
	
?>
