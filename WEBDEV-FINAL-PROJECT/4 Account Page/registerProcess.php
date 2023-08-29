<?php
$host="localhost"; // server name
$user="root"; // username
$password=""; // password
$database="eclipseGames"; // database name you need to access
$conn=  mysqli_connect($host, $user, $password, $database);// open the connection




if (isset($_POST['btnRegister'])) {
    $username = $_POST['uname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql_u = "SELECT * FROM users WHERE username='$username'";
    $sql_e = "SELECT * FROM users WHERE email='$email'";
    $res_u = mysqli_query($conn, $sql_u);
  	$res_e = mysqli_query($conn, $sql_e);


      if (empty($username) OR empty($email) OR empty($password)){
        echo "<script>alert('All fields are required..!')</script>";
        echo "<script>window.location = 'AccountPage.php'</script>";	
    }
    if (strlen($password) < 8){
        echo "<script>alert('Password must be at least 8 characters long..!')</script>";
        echo "<script>window.location = 'AccountPage.php'</script>";
    }
    

if (mysqli_num_rows($res_u) > 0) {
    echo "<script>alert('Username already used..!')</script>";
    echo "<script>window.location = 'AccountPage.php'</script>";	
  }else if(mysqli_num_rows($res_e) > 0){
    echo "<script>alert('Email already has Account..!')</script>";
    echo "<script>window.location = 'AccountPage.php'</script>";
  }else{
    $sql = "INSERT INTO users (Username, Password, Email)
    VALUES ('$_POST[uname]', '$_POST[password]', '$_POST[email]');";
  
  if (mysqli_query($conn, $sql)) {
    echo "<script>alert('User registered Successfully..!')</script>";
    echo "<script>window.location = 'AccountPage.php'</script>";

    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}	


    
}

mysqli_close($conn); // close the connection to the database. 


?> 
