<?php
$link = mysqli_connect("localhost","root","","php_specials");
$result = mysqli_query($link,"SELECT * FROM comments ORDER BY id DESC LIMIT 5");
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_object($result))
	{
		?>
		<div class="col-md-3"><?= $row->name;?></div>
		<div class="col-md-7"><i><?= $row->comment;?></i></div>
		<div class="clearfix"></div>
		<p>&nbsp;</p>
		<?php
	}
}
?>