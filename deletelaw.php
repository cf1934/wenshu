<head>
<meta charset="UTF-8">
</head>

<?php
include('proc.php');
$dbname="worksys.mdb";
$tbname="lawsuit";
$con=dbopen();

$a=UtoG($_POST['S1']);
$sqlquery="DELETE FROM lawsuit WHERE reason='$a'";

if(!odbc_exec($con,$sqlquery))
{
	echo "DELETE Failed.";
}
else
{
	echo "案卷类型删除成功.";
}


odbc_close($con);
?>