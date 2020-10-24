<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="mx-auto">
		<form action="index.php" method="GET">
			<div class="mt-3">
				<span class="font-weight-bold">Title: </span>
				<input type="" name="title">
			</div>
			<div class="mt-3">
				<span class="font-weight-bold">Post text: </span>
				<textarea name="text"></textarea>
			</div>
			<div class="mt-3">
				<span class="font-weight-bold">Admin: </span>
				<input type="" name="user">
			</div>
			<div class="mt-3">
				<span class="font-weight-bold">Images: </span>
				<input type="" name="img">
			</div>
			<button class="btn btn-success mt-5">Create post: </button>
		</form>
	</div>
	
</body>
</html>