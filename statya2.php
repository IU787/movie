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
		$connect2 = mysqli_connect("127.0.0.1", "root", "", "more");

	 	if ($connect2==false) {
	 		echo "Подключение отсутствует";}
	 	else {
	 		echo "Подключились к БД";
	 	}

	 	$text_zaprosa2 =  "SELECT * FROM blogs";
	 	$zapros2 = mysqli_query($connect2, $text_zaprosa2);

	 	if ($zapros2==false) {
	 		echo "запрос не рsаботает";}
	 	else {
	 		echo "запрос работает";
	 	}

	 	$result2 = $zapros2->fetch_assoc();
	 	
			echo "<h1 style='background-color:red'>". $result2["title"] . "</h1>";
			echo "<p>" . $result2["text"] . "</p>";
			echo "<img class='w-100' src='". $result2["img"] . "'>";
			echo "<p>" . "Автор: " . $result2["users"] . "</p>";
		?>
	</div>
</body>
</html>