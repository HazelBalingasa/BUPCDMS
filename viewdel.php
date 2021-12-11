<?php
session_start();
include 'connection.php';
if($log != "log"){
	header ("Location: viewreg.php");
}
$ctrl = $_REQUEST['key'];
$SQL = "DELETE FROM regestration WHERE apid = '$ctrl'";
mysql_query($SQL);
mysql_close($db_handle);
print "<script>location.href = 'viewreg.php'</script>";
?>