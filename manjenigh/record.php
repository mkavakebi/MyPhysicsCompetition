<?php
	include 'config.php';
	include 'functions.php'; 
?>
<?php
if(isset($_REQUEST['submit']))
{
	$stmt = $dbh->prepare("UPDATE manjenigh SET bord=?,vazn=?,davar=?,state='done' WHERE ID=?");
	$stmt->execute(array($_REQUEST['bord'],$_REQUEST['vazn'],$_REQUEST['davar'],$_REQUEST['id']));
	$db_field = $stmt->fetch();
}
if (isset($_REQUEST['id']))
{
	$stmt = $dbh->prepare("SELECT * FROM manjenigh WHERE ID=?");
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
<P>وزن:<input type="text" name="vazn" value="<?php echo $db_field['vazn'];?>"></P>
<P>درصد مرحله چهارم:<input type="text" name="davar" value="<?php echo $db_field['davar'];?>"></P>
<P><input type="submit" name="submit" value="ثبت"></P>
</form>