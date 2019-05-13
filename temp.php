<head>
<meta charset="UTF-8">
</head>

<form action="" method="post">
    <input type='hidden' name='T1' id='text' value=''>
	<input type='file' name='F1' id='file' onchange='document.getElementById("text").value=this.value'>
    <input type='submit' value='go'>
</form>
<?php
if(!isset($_POST['T1']))
    $_POST['T1']="";
echo $_POST['T1'];
?>