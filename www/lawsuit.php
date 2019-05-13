<?php
include('proc.php');
$dbname="worksys.mdb";
$tbname="lawsuit";
$con=dbopen();
$rs=readtable($con,$tbname);
showtable($rs);
?>
