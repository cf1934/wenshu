<head>
<meta charset="UTF-8">
</head>
<?php
$connstr="Driver={Microsoft Access Driver (*.mdb)};Dbq=".realpath("worksys.mdb");
$con=odbc_connect($connstr,"","",SQL_CUR_USE_ODBC);
echo "<p>";
$sqlquery="SELECT * FROM lawsuit";
$rs=odbc_exec($con,$sqlquery);
if (!$rs)
{
	echo "SQL Query Failed...";
}
else
{
	echo "<table border='1'>";
    echo "<tr>";
	for($i=2;$i<=odbc_num_fields($rs);$i++)
	{
		echo "<td>";
		echo odbc_field_name($rs,$i);
	    echo "</td>";
	}
	echo "</tr>";
	while(odbc_fetch_row($rs))
	{
		echo "<tr>";
		$reason=iconv('GB2312','UTF-8',odbc_result($rs,'reason'));
		$law1st=iconv('GB2312','UTF-8',odbc_result($rs,'law1st'));
		$law2nd=iconv('GB2312','UTF-8',odbc_result($rs,'law2nd'));
		$amount1=iconv('GB2312','UTF-8',odbc_result($rs,'amount1'));
		$amount2=iconv('GB2312','UTF-8',odbc_result($rs,'amount2'));
		$amount3=iconv('GB2312','UTF-8',odbc_result($rs,'amount3'));
		echo "<td>$reason</td>";
		echo "<td>$law1st</td>";
		echo "<td>$law2nd</td>";
		echo "<td>$amount1</td>";
		echo "<td>$amount2</td>";
		echo "<td>$amount3</td>";
		echo "</tr>";
	}
    echo "</table>"; 
}
odbc_close($con);
?>