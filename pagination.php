<?php
$link = mysqli_connect("localhost","root","","php_specials");

$q2 = "SELECT count(id) as total from users";
$result2 = mysqli_query($link,$q2);
$row2 = mysqli_fetch_object($result2);
$total = $row2->total;

if(!isset($_GET['limit']))
	$limit = 5;
else
	$limit = $_GET['limit'];


if(!isset($_GET['offset']))
	$offset = 0;
else
	$offset = $_GET['offset'];

$pages = (int)($total/5);
if($total%$limit != 0)
{
	$pages=$pages+1;
}







$q = "SELECT * FROM users LIMIT ".$offset.",".$limit;
$result = mysqli_query($link,$q);

if(mysqli_num_rows($result)>0)
{
	?>
<table width="100%" border="1">
	<tr>
		<th>ID</th><th>Name</th><th>Email</th><th>Gender</th>
	</tr>
	<?php
	while($row = mysqli_fetch_object($result))
	{
		?>
		<tr>
			<td><?= $row->id;?></td>
			<td><?= $row->name;?></td>
			<td><?= $row->email;?></td>
			<td><?= $row->gender;?></td>
		</tr>
		<?php
	}
	?>
</table>
	<?php
	for($i=0;$i<$pages;$i++)
	{
		$offset = $limit*$i;
		?>
		<a href="pagination.php?offset=<?= $offset;?>&limit=<?= $limit;?>"><?= $i+1;?></a>
		<?php
	}
}
?>