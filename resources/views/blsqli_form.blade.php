<html>
	<head>
		<title>
			Err SQL
		</title>
	</head>
	<body>
		<form action="{{ url('/process_err_based') }}" method="POST">
			@csrf
			search: <input type="text" name="search_bar">
			<input type="submit" value="Submit">
		</form>
	</body>
</html>
