<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (empty($_POST['username']) || empty($_POST['password'])) {
    echo "<script>alert('Isi semua data terlebih dahulu.');</script>"; 
  } else {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $validUsername = "naufalwhildan"; 
    $validPassword = "naufal12"; 

    if ($username === $validUsername && $password === $validPassword) {
      $_SESSION['username'] = $username; 
      setcookie('username', $username, time() + (86400 * 30), '/'); 
      echo "<script>alert('Login berhasil!'); window.location.href = 'Dashboard.php';</script>"; 
      exit();
    } else {
      echo "<script>alert('Username atau password salah.'); window.location.href = 'Login.php';</script>"; 
      exit();
    }
  }
}
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="Login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>   
</head>

<body>
<form action="Login.php" method="post">
   <div class="wrapper">
        <h1>Login</h1>
        <div class="input-box">
            <input type="text" name="username" placeholder="Username" required> 
        </div>
        <div class="input-box">
            <input type="password" name="password" placeholder="Password" required> 
            <i class='bx bxs-lock-alt'></i>
        </div>
        <div class="remember-forgot">
            <label>
                <input type="checkbox">Remember me
            </label>
            <a href="#">Forgot password</a>
        </div>
        <button type="submit" class="btn">Login</button>
        <div class="register-link">
            <p>Anda Belum Punya Akun?<a href="Register.php">Register</a></p>
        </div>
   </div>
</form>  
</body>
</html>
