<?php
$host="localhost"; // server name
$user="root"; // username
$password=""; // password
$database="eclipseGames"; // database name you need to access
$conn=  mysqli_connect($host, $user, $password, $database);// open the connection

if (isset($_POST['btnLogin'])) {
    $sql = "SELECT Username, Password
    FROM users
    WHERE Username = '$_POST[uname]' 
    AND Password = '$_POST[password]';";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
   header("Location: UserHomePage.php");
}
else{
    echo "<script>alert('Invalid Username or Password..!')</script>";
    echo "<script>window.location = 'AccountPage.php'</script>";

}
    

}


mysqli_close($conn); // close the connection to the database. 

?>



    
