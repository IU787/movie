<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="col-7 mx-auto" style="margin-top: 50px; background-color: white;">
		<?php
		$connect = mysqli_connect("127.0.0.1", "root", "", "more");

	 	if ($connect==false) {
	 		echo "Подключение отсутствует";}
	 	else {
	 		echo "Подключились к БД";
	 	}

	 	$text_zaprosa =  "SELECT * FROM blogs";
	 	$zapros = mysqli_query($connect, $text_zaprosa);

	 	if ($zapros==false) {
	 		echo "запрос не работает";}
	 	else {
	 		echo "запрос работает";
	 	}

	 	$result = $zapros->fetch_assoc();
	 	
			echo "<h1 style='background-color:red'>". $result["title"] . "</h1>";
			echo "<p>". $result["text"] . "</p>";
			echo "<img class='w-100' src='". $result["img"] ."'>";
			echo "<p>"."Автор: " . $result["users"] . "</p>";
		?>
	</div>
</body>
</html>