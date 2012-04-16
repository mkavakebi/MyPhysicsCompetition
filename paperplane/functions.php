<?php
function NameLink($groupname,$id,$dbh)
{
	return '<a href="record.php?id='.$id.'">'.$groupname."<a>";
}
function SetState($state,$id,$max,$dbh)
{
	$stmt = $dbh->prepare("SELECT COUNT(ID) as num FROM plane WHERE state=?");
	$stmt->execute(array($state));
	$db_field = $stmt->fetch();
	if($db_field['num']>=$max AND $max!=0){return 'exceed';}
	$stmt = $dbh->prepare("UPDATE plane SET state=? WHERE ID=?");
	$stmt->execute(array($state,$id));
}
function RecordCount($dbh)
{
	$stmt = $dbh->prepare("SELECT COUNT(ID) as num FROM plane");
	$stmt->execute();
	$db_field = $stmt->fetch();
	return $db_field['num'];
}
function MaxScore($dbh)
{
	$stmt = $dbh->prepare("SELECT MAX(score) as m FROM plane");
	$stmt->execute();
	$db_field = $stmt->fetch();
	return $db_field['m'];
}
function CalculateScore($dbh)
{
	$stmt = $dbh->prepare("UPDATE plane SET score=10*bord");
	$stmt->execute();
}