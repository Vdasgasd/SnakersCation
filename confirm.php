<?php 
require 'function.php' ;

if (isset($_POST["submit"])){
    $score= $_COOKIE['score_tinggi'];

    if(player($_POST,$score)>0){
        echo "<script>
        alert('data berhasil ditambahkan');
        document.location.href = 'index.php';
        </script>
        ";
    }else {
        echo "<script>
        alert('data gagal ditambahkan');
        document.location.href = 'index.php';
        </script>";
        echo "<br>";
        echo mysqli_error($conn);
}


}

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

<div class="mainmenu_container">
<div class="mainmenu_subcontainer">
    <form action="" method="post">
		<label for="username">Username: </label>
		<input type="text" name="username" id="username" placeholder="Username">
	
    <p>masukan nama anda untuk masuk ke learderboard</p>
	
	<div>
    <button type="submit" name="submit">kirim</button>
      </form>

	  </div>
  </div>
  </div>


</body>
<script src="game.js" defer></script>
</html>