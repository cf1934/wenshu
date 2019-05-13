<head>
<meta charset="UTF-8">
</head>

<?php
include('proc.php');
$dbname="worksys.mdb";
$tbname="lawsuit";
$con=dbopen();
$rs=readtable($con,$tbname);
#showtable($rs);


echo "选择需要删除的案卷类型";
echo "<form action='deletelaw.php' method='post'>";
echo "<select name='S1'>";
echo "<option value=''></option>";

while(odbc_fetch_row($rs))
	{
		echo "<option>".GtoU(odbc_result($rs,2))."</option>";
	}
echo "<input type='submit' value='确定'></form>";

odbc_close($con);
?>