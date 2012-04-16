<?php
	include 'config.php';
	include 'functions.php'; 
?>
<?php
if(isset( $_REQUEST['wait'])){
		$er=SetState('wait',$_REQUEST['id'],$max_wait,$dbh);
		if($er){
			?>
			<P style="text-align:center;">.لیست انتظار پر شده است</P>
		<?php }
}
if(isset( $_REQUEST['play'])){
		$er=SetState('play',$_REQUEST['id'],$max_play,$dbh);
		if($er){
			?>
			<center>.لیست رکورد گیری پر شده است</center>
		<?php }
}
if(isset( $_REQUEST['done'])){
		SetState('done',$_REQUEST['id'],0,$dbh);
}
if(isset( $_REQUEST['undone'])){
		SetState('',$_REQUEST['id'],0,$dbh);
}
?>
<P style="text-align: center;"><a href="index.php">بازگشت به صفحه ی اصلی</a></P>
<br>
<table width=100% border="3">
<th>گروه هایی که در انتظار رکورد گیری هستند</th>
<th>گروه هایی که هم اکنون در حال رکورد گیری هستند</th>
<tr>
	<td>
		<table border="1" width="100%">
			<tr bgcolor="green">
			<th width="100" class="bTD" height="18">نوبت</th>
			<th width="120" class="bTD" height="18">نام گروه</th>
			<th width="368" class="bTD" height="18">نام مدرسه</th>
			<th width="20" class="bTD" height="18">بازی</th>
			<th width="20" class="bTD" height="18">معمولی</th>
			</tr>
			<?php
			$stmt = $dbh->prepare("SELECT *	FROM manjenigh WHERE state='wait' ORDER BY turn");
		    $stmt->execute();
			while($db_field = $stmt->fetch()){
				?>
				<tr bgcolor=<?php if($odd){echo "#CCECCC";}else{echo "#F7F7F7";} $odd=!$odd;  ?> align="center" vAlign="top">
				<td width="100" class="bTD" height="18"><?php echo $db_field['turn'];?></td>
				<td width="120" class="bTD" height="18"><?php echo NameLink($db_field['groupname'],$db_field['ID'],$dbh);?></td>
				<td width="368" class="bTD" height="18"><?php echo $db_field['school'];?></td>
				<td width="20" class="bTD" height="18"><a href="?play=1&id=<?php echo $db_field['ID'];?>">بازی</a></td>
				<td width="20" class="bTD" height="18"><a href="?undone=1&id=<?php echo $db_field['ID'];?>">معمولی</a></td>
				</tr>
			<?php }?>
		</table>
	</td>
	
	<td>
		<table border="1" width="100%">
			<tr bgcolor="green">
			<th width="100" class="bTD" height="18">نوبت</th>
			<th width="120" class="bTD" height="18">نام گروه</th>
			<th width="368" class="bTD" height="18">نام مدرسه</th>
			<th width="20" class="bTD" height="18">انتظار</th>
			</tr>
			<?php
			$stmt = $dbh->prepare("SELECT *	FROM manjenigh WHERE state='play' ORDER BY turn");
		    $stmt->execute();
			while($db_field = $stmt->fetch()){
				?>
				<tr bgcolor=<?php if($odd){echo "#CCECCC";}else{echo "#F7F7F7";} $odd=!$odd;  ?> align="center" vAlign="top">
				<td width="100" class="bTD" height="18"><?php echo $db_field['turn'];?></td>
				<td width="120" class="bTD" height="18"><?php echo NameLink($db_field['groupname'],$db_field['ID'],$dbh);?></td>
				<td width="368" class="bTD" height="18"><?php echo $db_field['school'];?></td>
				<td width="20" class="bTD" height="18"><a href="?wait=1&id=<?php echo $db_field['ID'];?>">انتظار</a></td>
				</tr>
			<?php }?>
		</table>
	</td>
</tr>
</table>
</br></br>
<table width=100% border="3">
<th>گروه هایی که هنوز در مسابقه شرکت نکرده اند</th>
<th>گروه هایی که رکورد گیری آنها به پایان رسیده</th>
<tr>
	
	<td>
		<table border="1" width="100%">
			<tr bgcolor="green">
			<th width="100" class="bTD" height="18">نوبت</th>
			<th width="120" class="bTD" height="18">نام گروه</th>
			<th width="368" class="bTD" height="18">نام مدرسه</th>
			<th width="20" class="bTD" height="18">انتظار</th>
			</tr>
			<?php
			$stmt = $dbh->prepare("SELECT *	FROM manjenigh WHERE state='' ORDER BY turn");
		    $stmt->execute();
			while($db_field = $stmt->fetch()){
				?>
				<tr bgcolor=<?php if($odd){echo "#CCECCC";}else{echo "#F7F7F7";} $odd=!$odd;  ?> align="center" vAlign="top">
				<td width="100" class="bTD" height="18"><?php echo $db_field['turn'];?></td>
				<td width="120" class="bTD" height="18"><?php echo NameLink($db_field['groupname'],$db_field['ID'],$dbh);?></td>
				<td width="368" class="bTD" height="18"><?php echo $db_field['school'];?></td>
				<td width="20" class="bTD" height="18"><a href="?wait=1&id=<?php echo $db_field['ID'];?>">انتظار</a></td>
				</tr>
			<?php }?>
		</table>
	</td>

	<td>
		<table border="1" width="100%">
			<tr bgcolor="green">
			<th width="100" class="bTD" height="18">نوبت</th>
			<th width="120" class="bTD" height="18">نام گروه</th>
			<th width="368" class="bTD" height="18">نام مدرسه</th>
			</tr>
			<?php
			$stmt = $dbh->prepare("SELECT *	FROM manjenigh WHERE state='done' ORDER BY turn");
		    $stmt->execute();
			while($db_field = $stmt->fetch()){
				?>
				<tr bgcolor=<?php if($odd){echo "#CCECCC";}else{echo "#F7F7F7";} $odd=!$odd;  ?> align="center" vAlign="top">
				<td width="100" class="bTD" height="18"><?php echo $db_field['turn'];?></td>
				<td width="120" class="bTD" height="18"><?php echo NameLink($db_field['groupname'],$db_field['ID'],$dbh);?></td>
				<td width="368" class="bTD" height="18"><?php echo $db_field['school'];?></td>
				</tr>
			<?php }?>
		</table>
	</td>
</tr>
</table>