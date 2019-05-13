<head>
<meta charset="UTF-8">
</head>

<?php
include('proc.php');
$dbname="worksys.mdb";
$con=dbopen();

$F_reason=UtoG($_POST['T1']);
$F_law1=UtoG($_POST['T2']);
$F_law2=UtoG($_POST['T3']);
$F_amt1=UtoG($_POST['T4']);
$F_amt2=UtoG($_POST['T5']);
$F_amt3=UtoG($_POST['T6']);

$sqlquery="INSERT INTO lawsuit (reason,law1st,law2nd,amount1,amount2,amount3) VALUES ('$F_reason','$F_law1','$F_law2','$F_amt1','$F_amt2','$F_amt3')";

if(!odbc_exec($con,$sqlquery))
    {
		echo "Write Database Failed.";
	}
else
{
	echo "新案卷类型添加成功.";
}
odbc_close($con);
?>
