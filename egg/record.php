<?php
	include 'config.php';
	include 'functions.php'; 
?>
<?php
if(isset($_REQUEST['submit']))
{
	$E=max($_REQUEST['E'],1);
	
	$stmt = $dbh->prepare("UPDATE egg SET bord=?,E=?,davar=?,state='done' WHERE ID=?");
	$stmt->execute(array($_REQUEST['bord'],$E,$_REQUEST['davar'],$_REQUEST['id']));
	$db_field = $stmt->fetch();
}
if (isset($_REQUEST['id']))
{
	$stmt = $dbh->prepare("SELECT * FROM egg WHERE ID=?");
	$stmt->execute(array($_REQUEST['id']));
	$db_field = $stmt->fetch();
}
?>
<P style="text-align: center;"><a href="davar.php">بازگشت به صفحه ی داوری</a></P>
<form method="POST" style="text-align:center;">
<?php echo $db_field['groupname'];?></br>
<?php echo $db_field['school'];?></br>
<input type="hidden" name="id" value="<?php echo $db_field['ID'];?>">
<P>برد به متر:<input type="text" name="bord" value="<?php echo $db_field['bord'];?>"></P>
<P>خطا:<input type="text" name="E" value="<?php echo $db_field['E'];?>"></P>
<P>درصد مرحله چهارم:<input type="text" name="davar" value="<?php echo $db_field['davar'];?>"></P>
<P><input type="submit" name="submit" value="ثبت"></P>
</form>