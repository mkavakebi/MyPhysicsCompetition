<?php
	include 'config.php';
	include 'functions.php'; 
?>
<?php
if (isset($_REQUEST['del']))
{
	$stmt = $dbh->prepare("DELETE FROM egg WHERE ID=?");
    $stmt->execute(array($_REQUEST['id']));
}
if (isset($_REQUEST['add']))
{
	$stmt = $dbh->prepare("INSERT INTO egg (groupname,school) VALUES (?,?)");
    $stmt->execute(array($_REQUEST['groupname'],$_REQUEST['groupschool']));
	while($db_field = $stmt->fetch()){
		echo $db_field['ID'];
		echo "</br>";
	}	
}
?>
<center>
<P style="text-align: center;"><a href="index.php">بازگشت به صفحه ی اصلی</a></P>
<form method="post">
<P>نام گروه:<input type="text" name="groupname" value=""></P>
<P>نام مدرسه:<input type="text" name="groupschool" value=""></P>
<input type="submit" name="add" value="اضافه کردن">
</form>
<P style="text-align: center;"><a href="random.php">صفحه ی رندوم</a></P>
</center>

<table border="1" style="border-collapse: collapse ;FONT-SIZE: 9pt; FONT-FAMILY: Tahoma;text-align: center;" width="570" dir="rtl" cellspacing="1" align="center">
<tr bgcolor="green">
	<th width="100" class="bTD" height="18">ردیف</th>
	<th width="120" class="bTD" height="18">نام گروه</th>
	<th width="368" class="bTD" height="18">نام مدرسه</th>
	<th width="50" class="bTD" height="18">نوبت</th>
	<th width="20" class="bTD" height="18">X</th>
</tr>
<?php
	$stmt = $dbh->prepare("SELECT * FROM egg");
    $stmt->execute();
    $i=0;
	while($db_field = $stmt->fetch())
	 {
		$i++;?>
		<tr bgcolor=<?php if($odd){echo "#CCECCC";}else{echo "#F7F7F7";} $odd=!$odd;  ?> align="center" vAlign="top">
		<td width="100" class="bTD" height="18"><?php echo $i;?></td>
		<td width="120" class="bTD" height="18"><?php echo $db_field['groupname'];?></td>
		<td width="368" class="bTD" height="18"><?php echo $db_field['school'];?></td>
		<td width="50" class="bTD" height="18"><?php echo $db_field['turn'];?></td>
		<td width="20" class="bTD" height="18"><a href="?del=1&id=<?php echo $db_field['ID'];?>">X</a></td>
		</tr>
<?php }?>
</table>