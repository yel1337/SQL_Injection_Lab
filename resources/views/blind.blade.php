<html>
	<head>
		<title>
			Blind Injection
		</title>
	</head>
	<body>
		<form action="{{ url('/blind_process') }}" method="post">
			@csrf
			first name: <input type="text" name="first_name">

			<button type="submit">Submit</button>
		</form>
		<form action="{{ url('/blind_process') }}" method="post">
			@csrf
			last name: <input type="text" name="last_name">
			<button type="submit">Submit</button>
		</form>
	</body>
</html>
