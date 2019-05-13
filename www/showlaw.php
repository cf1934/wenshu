<head>
<meta charset="UTF-8">
</head>

<?php
include('proc.php');
$dbname="worksys.mdb";
$tbname="lawsuit";
$con=dbopen();

$a=UtoG($_POST['S1']);
$sqlquery="SELECT * FROM lawsuit WHERE reason='$a'";
$rs=odbc_exec($con,$sqlquery);

echo "<br>案由：".GtoU(odbc_result($rs,'reason'));
echo "<br>违法条款：".GtoU(odbc_result($rs,'law1st'));
echo "<br>处罚依据：".GtoU(odbc_result($rs,'law2nd'));
echo "<br>轻微：".GtoU(odbc_result($rs,'amount1'));
echo "<br>一般：".GtoU(odbc_result($rs,'amount2'));
echo "<br>严重：".GtoU(odbc_result($rs,'amount3'));

odbc_close($con);

?>