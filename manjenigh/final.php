<?php
	include 'config.php';
	include 'functions.php'; 
?>
<P style="text-align: center;"><a href="index.php">بازگشت به صفحه ی اصلی</a></P>
<table border="1" width="100%">
	<tr bgcolor="green">
	<th width="100" class="bTD" height="18">نوبت</th>
	<th width="120" class="bTD" height="18">نام گروه</th>
	<th width="368" class="bTD" height="18">نام مدرسه</th>
	<th width="120" class="bTD" height="18">امتیاز</th>
	<th width="120" class="bTD" height="18">مرحله چهارم</th>
	<th width="120" class="bTD" height="18">نهایی</th>
	</tr>
	<?php
	CalculateScore($dbh);
	$stmt = $dbh->prepare("SELECT *,?*davar/100 as percentage FROM manjenigh ORDER BY (score+percentage)");
	$stmt->execute(array(MaxScore($dbh)));
	while($db_field = $stmt->fetch())
	{
		$final=$db_field['score']+$db_field['percentage'];
		?>		
		<tr bgcolor=<?php if($odd){echo "#CCECCC";}else{echo "#F7F7F7";} $odd=!$odd;  ?> align="center" vAlign="top">
		<td width="100" class="bTD" height="18"><?php echo $db_field['turn'];?></td>
		<td width="120" class="bTD" height="18"><?php echo NameLink($db_field['groupname'],$db_field['ID'],$dbh);?></td>
		<td width="368" class="bTD" height="18"><?php echo $db_field['school'];?></td>
		<td width="120" class="bTD" height="18"><?php echo $db_field['score'];?></td>
		<td width="120" class="bTD" height="18"><?php echo $db_field['percentage'];?></td>
		<td width="120" class="bTD" height="18"><?php echo $final;?></td>
		</tr>
<?php }?>
</table>