<html>
<head>
	<title>%TITLE%</title>
</head>
<body>
<div><h2>Contact Form</h2></div>
<div style="color: #FF0000; font-size: 15px;"><strong>%ERRORS%</strong></div>
<form action="../index.php" method="post">
	<strong>%ERRORS_FIO%</strong>
	<input type="text" name="fio" value="%FIO%" placeholder="First-name Last-name">
	<br>
	<strong>%ERRORS_EMAIL%</strong>
	<input type="email" name="email" value="%EMAIL%" placeholder="Email@gmail.com">
	<br>
	<strong>%ERRORS_SELECT%</strong>
	<select name="select">
		<option value="0" disabled selected>pleace select</option>
		<option value="%OPTION1%">%OPTION1%</option>
		<option value="%OPTION2%">%OPTION2%</option>
	</select>
	<br>
	<strong>%ERRORS_TEXT%</strong>
	<textarea name="text" cols="30" rows="10">%TEXT%</textarea>
	<br>
	<input type="submit" value="Submit">
</form>
</body>
</html>
