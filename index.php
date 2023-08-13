<?php 
require 'function.php';
if (isset($_POST["submit"])){
    if(player($_POST,$score)>0){
        echo "<script>
        alert('data berhasil ditambahkan');
        document.location.href = 'game.php';
        </script>
        ";
    } else{
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
<h1>
    Snake Games
</h1>	

<div>
<a href="game.php"><button >Play Game</button></a>
<a href="leadboard.php"><button >LeaderBoard</button></a>
</div>
</div>
</div>



</body>
</html>