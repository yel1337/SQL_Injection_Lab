<html>
	<head>
		<title>
			Blind Injection
		</title>
	</head>
	<body>
		<form action="{{ action('App\Http\Controllers\PostController@blind_process') }}" method="post">
			@csrf
			first name: <input type="text" name="first_name">
			<br>
			<br>
			last name: <input type="text" name="last_name">
			<button type="submit">Submit</button>
		</form>
	</body>
</html>
