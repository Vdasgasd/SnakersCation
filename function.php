<?php 


$conn = mysqli_connect("localhost","root","","leaderboard_snake");



function query($query){
global $conn;
    $result = mysqli_query($conn , $query);
    $rows =[];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }
return $rows;
}



function player($post,$score){
global $conn;
    $username = htmlspecialchars($post["username"]);
   
    if ($username == ''){
         echo "<script>
        alert('data gagal ditambahkan silakan masukan nama');
        document.location.href = 'confirm.php';
        </script>";
        echo "<br>";;
    }else{$query = "INSERT INTO leaderboard VALUES 
     ('','$username','$score')";
	}
	
mysqli_query($conn,$query);
return mysqli_affected_rows($conn);



}
?>