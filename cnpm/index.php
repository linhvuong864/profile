<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible"
        content="IE=edge">
        <meta name="viewport"
        content="width=device-width, initial-scale=1.0">
        <title>PERFUME LOGIN SITE</title>
        <link rel="stylesheet" href="index.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>
</html>
<body>
    <header class="header">
        <nav class="navbar">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Service</a>
            <a href="#">Contact</a>
        </nav>

        <form action="#" class="search-bar">
            <input type="text" placeholder="Search...">
            <button type="submit"><i class='bx bx-search-alt'></i></button> 
        </form>
    </header>
<div class="background"></div>
    <div class="container">
        <div class="content">
            <h2>PERFUME</h2>

            <div class="text-sci">
                <h2>Welcome!<br><span>To Our Website.</span></h2>
            
        </div>

        <div class="logreg-box">
            <div class="form-box login">
                <form action="login.php" method="POST">
                    <h2>Sign In</h2>

                    <div class="input-box">
                        <span class="icon"><i class='bx bx-envelope'></i></span>
                        <input type="email" required class="form-control" id="" name="user_email">
                        <label>Email</label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock'></i></span>
                        <input type="password" required class="form-control" id="" name="user_password">
                          <label>Password</label>
                    </div>
                    <div class="remember-forgot">
                        <label><input
                        type="checkbox"> Remember me</label>
                        <a href="#">Forgot password</a>
                    </div>

                    <button type="submit" name="submit"
                    class="btn">Sign In</button>

                    <div class="login-register">
                        <p>Don't have an account? <a href="#"
                        class="register-link">Sign Up</a></p>
                    </div>
                </form>
            </div>

            <div class="form-box register">
                <form action="register.php" method="POST">
                    <h2>Sign Up</h2>

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-user'></i></span>
                        <input type="text" required class="form-control" id="" name="user_name">
                        <label>Name</label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class='bx bx-envelope'></i></span>
                        <input type="email" required class="form-control" id="" name="user_email">
                        <label>Email</label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock'></i></span>
                        <input type="password" required class="form-control" id="" name="user_password">
                          <label>Password</label>
                    </div>
                    <div class="remember-forgot">
                        <label><input
                        type="checkbox"> I agree to the terms & conditions</label>
                        <a href="#"></a>
                    </div>

                    <button type="submit" name="submit"
                    class="btn">Sign Up</button>

                    <div class="login-register">
                        <p>Already have an account? <a href="#"
                        class="login-link">Sign In</a></p>
                    </div>
                </form>
            </div>
        </div>
        </div>

    <script src="script.js"></script>
</body>