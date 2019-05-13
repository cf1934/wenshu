<?php

function dbopen()
{
	$connstr="Driver={Microsoft Access Driver (*.mdb)};Dbq=".realpath("worksys.mdb");
    $con=odbc_connect($connstr,"","",SQL_CUR_USE_ODBC);
	if(!$con)
	{
		echo "Database Failed...";
	}
	else{
		return $con;
	}
}

function readtable($con,$tbname)
{
	$sqlquery="SELECT * FROM $tbname";
	$rs=odbc_exec($con,$sqlquery);
	if(!$rs)
	{
		echo "Table Unavilible.";
	}
	else
	{
		return $rs;
	}
}

function showtable($rs)
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
		for($i=2;$i<=odbc_num_fields($rs);$i++)
		{
			echo "<td>".iconv('GB2312','UTF-8',odbc_result($rs,$i))."</td>";
		}
		echo "</tr>";
	}
    echo "</table>"; 
	return NULL;
}

function addnew($rs)
{
    echo "<form action='cf.php' method='post'>";
    echo "<table>";
	for($i=2;$i<=odbc_num_fields($rs);$i++)
	{
		echo "<tr>";
		echo "<td>".odbc_field_name($rs,$i)."</td>";
	    echo "<td><input type='text' name='".odbc_field_name($rs,$i)."'></td>";
		echo "</tr>";
	}
	echo "<input type='submit' value='确定'></tr></form>";
	return NULL;
}

function GtoU($str_in)
{
	$str_out=iconv('GB2312','UTF-8',$str_in);
	return $str_out;
}

function UtoG($str_in)
{
	$str_out=iconv('UTF-8','GB2312',$str_in);
	return $str_out;
}

?>
