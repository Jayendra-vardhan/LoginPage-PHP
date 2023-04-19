<!DOCTYPE html>
<html>

<head>
  <title>Login Page</title>
  <link rel="stylesheet" href="LoginStyle.css">
</head>

<body>
  
  <form action="LoginPage_connect.php" style="background-color:#FFFFFF" method="POST" id="login-form">
    <h1>UniForum</h1>
    
    <label for="Uername">Username</label>
    <input type="varchar" id="username" name="Username" placeholder="Username" required>
    <label for="Password">Password</label>
    <input type="password" id="password" name="Password" placeholder="Password" required>
    <button type="submit" class="btn btn-primary">submit</button>
    <h3></h3>
    <a href="">Forget Password?</a>
    <div class="error">Incorrect username or password.</div>
  </form>
</body>

</html>