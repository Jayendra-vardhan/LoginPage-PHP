<?php

if (empty($_POST['Username'])) {
    $msg = '<font color ="red"><b> Field for Username is empty!</b></font>';
    include("LoginPage.php");
    exit;
} 

else if (empty($_POST['Password'])) {
    $msg = '<font color ="red"><b> Field for Password is empty!</b></font>';
    include("LoginPage.php");
    exit;
}
else{
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'credentials');

$mysqli = @mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
if (mysqli_connect_errno()) {
    echo "Database Connection Failed! " . mysqli_connect_errno();
    exit();
}

$query = "SELECT password FROM user_details where Username='" . $_POST['Username'] . "'";
$pass = $mysqli->query($query);

echo "<h1>".$pass."</h1>";
echo '".$_POST['Password']."';
if ($pass == $_POST['Password']) {
    echo ("login successful");
}
else{
    echo ("Login Failed!, login again");
}
}
?>