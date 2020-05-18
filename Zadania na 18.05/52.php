<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
        <title>52</title>
	</head>
	<body>
        <form action="53.php" method="get">
            <select id="ids" name="ids">
                <?php
                $conn = new PDO('mysql:host=localhost;dbname=uczelnia', 'root');
                $sql = "SELECT * FROM studenci";
                foreach ($conn->query($sql) as $row) {
                    echo "<option value=".$row['id'].">".$row['imie']." ".$row['nazwisko']."</option>";
                }
                ?>
            </select>
            <input type="submit" value="usuń">
        </form>
	</body>
</html>
