<!DOCTYPE html>
<html>
<head>
	<title>Basic Javascript</title>
	<script type="text/javascript" src="jquery-3.5.1.min.js"></script>
</head>
<body>
	<!--
	<div id="mydiv">
		adfadfadf<br>
		adfadfadf<br>
		adfadfadf<br>
	</div>
	<div>
		adf
		adf
		adafd
	</div>
	<a href="#" class="anc">Click Here</a>

	<script type="text/javascript">
		$(function(){
			$('.anc').click(function(){
				$('#mydiv').hide();
			})
		});
	</script>-->

	<div class="mydiv">
		
	</div>
	<a href="#" class="anc">Click Me</a>
	<script type="text/javascript">
		$(function(){
			$('.anc').click(function(){
				$.ajax({
					url: 'test_ajax.php',
					data: 'name=Anwar&gender=male',
					type: 'post',
					success: function(res)
					{
						alert(res);
					}
				})
			})
		})
	</script>
</body>
</html>