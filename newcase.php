<head>
<meta charset="UTF-8">
</head>

<?php
include('proc.php');
$dbname="worksys.mdb";
$con=dbopen();

$F_name=UtoG($_POST['T1']);
$F_id=UtoG($_POST['T2']);
$F_address=UtoG($_POST['T3']);
$F_company=UtoG($_POST['T4']);
$F_cpyaddr=UtoG($_POST['T5']);
$F_license=UtoG($_POST['T6']);
$F_vehicle=UtoG($_POST['T7']);
$F_cargo=UtoG($_POST['T8']);
$F_square=UtoG($_POST['T9']);
$F_casetype=UtoG($_POST['T10']);
$F_reason=UtoG($_POST['T11']);
$F_casedate=UtoG($_POST['T12']);
$F_location=UtoG($_POST['T13']);
$F_examtime=UtoG($_POST['T14']);
$F_questiontime=UtoG($_POST['T15']);
$F_oper1st=UtoG($_POST['T16']);
$F_oper2nd=UtoG($_POST['T17']);
$F_caselevel=UtoG($_POST['T18']);
$F_amount=UtoG($_POST['T19']);
$F_casenum=UtoG($_POST['T20']);
$F_law1st=UtoG($_POST['T21']);
$F_law2nd=UtoG($_POST['T22']);
$F_rptnum=UtoG($_POST['T23']);
$F_rptdate=UtoG($_POST['T24']);
$F_ifmnum=UtoG($_POST['T25']);
$F_paynum=UtoG($_POST['T26']);
$F_clsdate=UtoG($_POST['T27']);
$F_state=UtoG($_POST['T28']);

$sqlquery=<<<sql
INSERT INTO caseinfo (
name,id,address,company,cpyaddr,license,vehicle,cargo,square,casetype,reason,casedate,location,
examtime,questiontime,oper1st,oper2nd,caselevel,amount,casenum,law1st,law2nd,rptnum,rptdate,
ifmnum,paynum,clsdate,state) VALUES (
'$F_name','$F_id','$F_address','$F_company','$F_cpyaddr','$F_license','$F_vehicle','$F_cargo','$F_square','$F_casetype','$F_reason','$F_casedate','$F_location',
'$F_examtime','$F_questiontime','$F_oper1st','$F_oper2nd','$F_caselevel','$F_amount','$F_casenum','$F_law1st','$F_law2nd','$F_rptnum','$F_rptdate',
'$F_ifmnum','$F_paynum','$F_clsdate','$F_state')
sql;

if(!odbc_exec($con,$sqlquery))
    {
		echo "Write Database Failed.";
	}
else
{
	echo "新案卷添加成功.";
}
odbc_close($con);

echo exec('e:\wenshu\doc\new.exe');

?>
