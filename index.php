<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
	<style type="text/css">

		body {
			background-color: black;
		};

	</style>
<body>
	<div> <!-- 1. Все массивы создаем здесь-->
		<?php 
			$database = [
				[
					"title" => "Tokyo Ghoul",
					"text" => "С обычным студентом Кэном Канэки случается беда, парень попадает в больницу. Но на этом неприятности не заканчиваются...",
					"img" => "img/12.jpg",
					"users" => "Miku"
				],
				[
					"title" => "Kaguya-sama: Love is War",
					"text" => "Высокое происхождение, привлекательная внешность, учёба в академии для будущей элиты страны… У Миюки и Кагуи было всё. Когда их избрали главой и заместителем главы ученического совета, только ленивый не говорил, что молодые люди будут чудесной парой...",
					"img" => "img/lw.jpg",
					"users" => "KAGUYA"
				],
				[
					"title" => "Shingeki no kyojin",
					"text" => "С давних времён человечество ведёт свою борьбу с титанами. Титаны — это огромные существа, ростом с многоэтажный дом, которые не обладают большим интеллектом, но сила их просто ужасна. Они едят людей и получают от этого удовольствие. После продолжительной борьбы остатки человечества создали стену, окружившую мир людей, через которую не пройдут даже титаны...",
					"img" => "img/at.jpg",
					"users" => "Akkerman"
				],
				[
					"title" => "Death note",
					"text" => "Жить человеку или не жить определяют боги смерти, рано или поздно внося его имя в особую тетрадь. Одна из таких тетрадей попадает в мир людей на территорию современной Японии...",
					"img" => "img/dn.jpg",
					"users" => "Death"
				],
				[
					"title" => "Black butler",
					"text" => "Викторианская Англия - центр загадок 19 века: тут вам и ангелы, и демоны, и Джек Потрошитель - словом, не заскучаешь. Однако за всеми тайнами кроется истина, постичь которую дано не каждому. Исключением является юный граф по прозвищу «Цепной Пёс Королевы» Сиэль Фантомхайв...",
					"img" => "img/bb.jpg",
					"users" => "Kawaii"
				],
				[
					"title" => $_GET["title"],
					"text" => $_GET["text"],
					"img" => $_GET["img"],
					"users" => $_GET["users"]
				]

			]
		 ?>
	</div>
	<?php
	 	$connect = mysqli_connect("127.0.0.1", "root", "", "MY_DATABASE");

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

	 	$result3 = $zapros->fetch_assoc();
	 	$result4 = $zapros->fetch_assoc();
	 	$result5 = $zapros->fetch_assoc();


	 	echo $result3["title"];
	 	echo $result3["img"];
	 	echo $result3["users"];
	 	echo $result3["text"];

	 	echo $result4["title"];
	 	echo $result4["img"];
	 	echo $result4["users"];
	 	echo $result4["text"];

	 	echo $result5["title"];
	 	echo $result5["img"];
	 	echo $result5["users"];
	 	echo $result5["text"];

	?>
	<div class="col-7 mx-auto" style="margin-top: 50px; background-color: white;">
		<h1 class="text-center">ANIME</h1>
		<div style="background-color: yellow;">
			<h1>
				<?php
					if ($_GET["login"]=="Iuliana" || $_GET["key"]==7879) {
						echo "<h1>Welcome!". $_GET["login"] . "</h1>";}
						else{
							echo "who are you?????";
						}
				?>
			</h1>
		</div>
		
		<div class="col-12" style=""> <!-- 2. выводите все элементы в этом диве -->
			 <?php 
				
				for ($i=0; $i < count($database); $i++) { 
					echo "<h1 style='background-color:red'>". $database[$i]["title"]. "</h1>";
					echo "<p>". $database[$i]["text"]. "</p>";
						echo "<form action='statya2.php' method='GET'>";
					 	echo "<button>Show</button>";
					 	echo "</form>";
					echo "<img class='w-100' src='". $database[$i]["img"]."'>";
				 	echo "<p>"."Автор: " . $database[$i]["users"]. "</p>";
				 
				}
			 ?>

		</div>
	</div>
</body>
</html>