<?php
include('proc.php');
$dbname="worksys.mdb";
$tbname="caseinfo";
$con=dbopen();
$rs=readtable($con,$tbname);
showtable($rs);
?>
