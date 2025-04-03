



<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>html assignment</title>
    <link rel="stylesheet" href="login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    
    <div class="wrapper">
        <div class ="login-header">
        <h1>Login</h1>
        <form method="post" action="db.php" >
        </div>
        <div class="input-box">
            <i class='bx bx-user'></i>
            <input type="text" class="input-field" placeholder="Username" required>
        </div>
        <div class="input-box">
            <i class='bx bx-lock-alt'></i>
            <input type="password" class="input-field" placeholder="Password" required>
        </div>

        <div class="remember-forgot">
            <label><input type="checkbox"> Remember me </label>
            <a href="#">Forgot password</a>       
         </div>

         <div class="input-submit">
         <button type="submit" class="submit-btn" name="login"> Login </button>
         </div>
    </div>
    
</body>
</html>