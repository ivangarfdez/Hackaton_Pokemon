<?php

session_start();
	define('DB_SERVER','54.70.107.235');
	define('DB_DATABASE','DAWPOKEMONGO');
	define('DB_USERNAME','root');
	define('DB_PASSWORD','');
    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

if($_SERVER["REQUEST_METHOD"] == "POST") {
// username and password sent from Form
    $mycorreo=mysqli_real_escape_string($db,$_POST['correo']);
    $mypassword=mysqli_real_escape_string($db,$_POST['pass']);
    $sql="SELECT id,nombre FROM Usuario WHERE email='$mycorreo' and password='$mypassword'";
    $result=mysqli_query($db,$sql);
    $rows=mysqli_fetch_assoc($result);
    echo("<br/>");
    $nombre=$rows['nombre'];
    echo $nombre;
    $count=mysqli_num_rows($result);


// If result matched $myusername and $mypassword, table row must be 1 row
    if($count>0) {

        $_SESSION['login_user'] = $nombre;
        header('Location: ../index.php');

    }
    else{
        echo "Your Login Name or Password is invalid";
    }
}else{
    echo "error";
}

?>