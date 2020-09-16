<!DOCTYPE html>
<html>
<head>
	<title>Ajax Form</title>
	<script type="text/javascript" src="jquery-3.5.1.min.js"></script>
</head>
<body>

	<form>
		Name: <input type="text" name="name" class="name"><br><br>
		Email: <input type="text" name="email" class="email"><br><br>
		Gender: <input type="text" name="gender" class="gender"><br><br>
		<a href="#" class="submit">Submit</a>

	</form>
	
	<script type="text/javascript">
		$(function(){
			$('.submit').click(function(){
				let name = $('.name').val();
				let email = $('.email').val();
				let gender = $('.gender').val();
				$.ajax({
					url: 'submit_ajax.php',
					data: 'name='+name+'&gender='+gender+'&email='+email,
					type: 'post',
					success: function(res)
					{
						alert('Form Submitted successfully');
					}
				});
			})
		})
	</script>
</body>
</html>