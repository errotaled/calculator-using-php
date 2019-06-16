<html>
	<head>
		<title>Calculator</title>
	</head>
	<body>
		<form action="#" method="post" enctype="multipart/form-data">
			<input type="text" name="first" ><br>
			<input type="text" name="second" ><br>
			<button type="submit" name="sum">+</button>
			<button type="submit" name="diff">-</button>
			<button type="submit" name="prod">*</button>
			<button type="submit" name="quo">/</button>
		</form>







	</body>
</html>

<?php 
		$s; $d; $q; $p;
		$num1;
		$num2; 

		if(isset($_POST['first'])){
			$num1 = $_POST['first'];
			//echo $num1;
		} else {
			$num1 = 0;
		}

		if(isset($_POST['second'])){
			$num2 = $_POST['second'];
		}

		if(isset($_POST['sum'])){
			$s = $num1 + $num2;
			echo $s;
		}

		if(isset($_POST['diff'])){
			$d = $num1 - $num2;
			echo $d;
		}

		if(isset($_POST['prod'])){
			$p = $num1 * $num2;
			echo $p;

		}

		if(isset($_POST['quo'])){
			$q = $num1 / $num2;
			echo $q;
		}

?>



