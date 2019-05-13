<head>
<meta charset=utf-8">
<script type="text/javascipt">
function getIdValue(str)
{
	var string;
	if(str=='aaa')
	{
	    string='bbb';
	}
	else if(str=='ccc')
	{
	    sting='ddd';
	}
	alert(sting);
	return string;
}
</script>
</head>

<form method="post" action="">
<input type="text" name="T1" id="T1" onchange="document.getElementById('T2').value=getIdValue(this.value)">
<input type="text" name="T2" id="T2">
<input type="submit" value="go">
</form>
<?php
echo exec('e:\wenshu\doc\new.exe');
?>