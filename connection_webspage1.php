<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Display</title>
</head>

<body>
	<table>
		<tr>
			<th> EMPLOYEE-ID </th>
			<th> EMPLOYEE NAME </th>
			<th> SALARY </th>
		</tr>
		<?php
			$host = "localhost";
			$usr = "root";
			$password = "";
			$db = "Sample";

			// make connection to the mysql server
			$conn = mysqli_connect($host, $usr, $password, $db);

			// on connection failure give out the error
			if($conn -> connect_error) {
				die("Database connection failed ".$conn -> connect_error);
			}

			// sql query statement
			$stmt = "SELECT * FROM Employees";

			// fetch records using the query
			$records = $conn -> query($stmt);

			if($records -> num_rows > 0) {
				while ($record = $records -> fetch_array()) {
					echo "<tr><td>".$record["EMPID"]."</td><td>".$record["EMPNAME"]."</td><td>".$record["SALARY"]."</td></tr>";
				}
			}

			// close connection
			$conn -> close();
		?>
	</table>
</body>
</html>
