<?php
	include 'config.php';
	include 'functions.php'; 
?>
<body 	style="background-image:url('../back2.jpg');background-repeat:no-repeat;" onload="JavaScript:timedRefresh(2000);">
</br>
<table border="1" width="700" style="text-align: center;font-size: 100;">
<caption >مشغول رکوردگیری</caption>
	<?php
	$stmt = $dbh->prepare("SELECT *	FROM manjenigh WHERE state='play' ORDER BY turn");
    $stmt->execute();
	while($db_field = $stmt->fetch()){
		?>
		<td><?php echo $db_field['groupname'];?></td>
	<?php }?>	
</table>
</br>
</br>
</br>
<table border="1" width="900" style="text-align: center;font-size: 40;font-style: oblique; ">
<caption >گروه های در حال انتظار</caption>
	<?php
	$stmt = $dbh->prepare("SELECT *	FROM manjenigh WHERE state='wait' ORDER BY turn");
    $stmt->execute();
	while($db_field = $stmt->fetch()){
		?>
		<td><?php echo $db_field['groupname'];?></td>
	<?php }?>
</table>
<script type="text/JavaScript">
<!--
function timedRefresh(timeoutPeriod) {
	setTimeout("location.reload(true);",timeoutPeriod);
}
//   -->
</script>
</body>
