<?php
	include 'config.php';
	include 'functions.php'; 
?><?php
if (isset($_REQUEST['rand'])){ 
	$num=RecordCount($dbh);
	$turn=range(1,$num);
	$turn=array_rand($turn,$num);
	$stmt = $dbh->prepare("UPDATE egg SET turn=0");
	$stmt->execute();
	foreach ($turn as $i) 
	{
		$stmt = $dbh->prepare("SELECT ID FROM egg WHERE turn=0");
		$stmt->execute();
		$db_field = $stmt->fetch();
		$stmt = $dbh->prepare("UPDATE egg SET turn=? WHERE ID=?");
		$stmt->execute(array($turn[$i]+1,$db_field['ID']));
	}
	echo 'نوبت های جدید تعیین شد!';
}
?><P style="text-align: center;"><a href="groups.php">بازگشت به صفحه ی گروه ها</a></P>
<P style="text-align: center;"><a href="?rand=1">نوبت دادن به گروه ها به صورت رندوم</a></P>