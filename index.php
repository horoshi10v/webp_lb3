<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lb3</title>
    <style>
        .content{
            color: white;
            background: #4c5ac9;
            display: inline-block;
            border: 1px solid purple;
        }
        form {
            margin: 20px;
        }
    </style>
</head>
<body>
    <h1>Хорошилов Валентин</h1>
    <h2>Варіант №3</h2>
    <div class="content">
    <form action="get1.php" method="get">
        <label for="wardName">Select nurse:</label>
        <select name="nurseName" id="nurseName">
            <?php
            include('connect.php');
            $sqlSelect = "SELECT name FROM nurse";
            $dbh = new PDO($dsn, $user, $pass);
            foreach($dbh->query($sqlSelect) as $row)
            {
                echo "<option value='$row[0]'>$row[0]</option>";
            }
            $dbh = null;
            ?>
        </select>
        <input type="submit" value="get">
    </form>
    <form action="get2.php" method="get">
        <label for="wardName">Select ward:</label>
        <select name="wardName" id="wardName">
            <?php
            include('connect.php');
            $sqlSelect = "SELECT name FROM ward";
            foreach($dbh->query($sqlSelect) as $row)
            {
                echo "<option value='$row[0]'>$row[0]</option>";
            }
            $dbh = null;
            ?>
        </select>
        <input type="submit" value="get">
    </form>
    <form action="get3.php" method="get">
        <label for="shift">Select shift:</label>
        <select name="shift" id="shift">
            <option value="First">First</option>
            <option value="Second">Second</option>
            <option value="Third">Third</option>
        </select>
        <input type="submit" value="get">
    </form>
    </div>
</body>
</html>
