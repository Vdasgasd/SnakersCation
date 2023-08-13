<?php 
require 'function.php';

$player = query("SELECT * FROM leaderboard ORDER BY hScore DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
<div class="table_board">

    <h1>LeaderBoard</h1>
    <table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>Username</th>
        <th>Score</th>
    </tr>
    

    <?php $i = 1; ?>
    <?php foreach ($player as $row) {?>
    <tr>
        <td><?= $i; ?></td>
        <td><?= $row["username"]; ?> </td>
        <td><?= $row["hScore"]; ?> </td>
    </tr>
    <?php $i++; ?>
    <?php } ?>
    </table>
	<br>
  <a href="index.php">  <button>Main Menu</button></a>
    </div>
  </div>
</body>
</html>