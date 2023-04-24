<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Table Booking Form</title>
	<style>
		form {
			margin: 20px;
			padding: 20px;
			border: 1px solid #ccc;
			border-radius: 5px;
		}

		label {
			display: block;
			margin-bottom: 10px;
		}

		input[type="text"], select {
			padding: 5px;
			font-size: 16px;
			border-radius: 5px;
			border: 1px solid #ccc;
			width: 100%;
			box-sizing: border-box;
			margin-bottom: 20px;
		}

		input[type="submit"] {
			background-color: #4CAF50;
			color: white;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			font-size: 16px;
		}

		input[type="submit"]:hover {
			background-color: #45a049;
		}
	</style>
</head>
<body>
	<form action="form-submit.php" method="POST">
		<h2>Table Booking Form</h2>
		<label for="date">Date:</label>
		<input type="text" id="date" name="date" placeholder="Enter date of booking" required>

		<label for="time">Time:</label>
		<input type="text" id="time" name="time" placeholder="Enter time of booking" required>

		<label for="guests">Number of guests:</label>
		<select id="guests" name="guests" required>
			<option value="">Select number of guests</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
		</select>

		<label for="name">Name:</label>
		<input type="text" id="name" name="name" placeholder="Enter your name" required>

		<label for="email">Email:</label>
		<input type="text" id="email" name="email" placeholder="Enter your email" required>

		<label for="phone">Phone:</label>
		<input type="text" id="phone" name="phone" placeholder="Enter your phone number" required>

		<input type="submit" value="Submit">
	</form>
</body>
</html>
