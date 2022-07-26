<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gilde Time registration - Login</title>
    <?php include '../sitetemplate/head.php' ; ?>
    <link rel="stylesheet" href="../css/loginstyle.css">
</head>
<body>
    <main>
        <section class="login-section">
            <div class="login-box">
                <h1>Log In</h1>
                <div class="login-as-what">
                    <a href="#">as Admin</a>
                    <span>|</span>
                    <a href="login.php">as User</a>
                </div>
                <form method="post" action="../phpscript/loginscript-admin.php">
                    <div class="txt_field">
                        <input type="email" name="email" id="email" required>
                        <span></span>
                        <label>Email</label>
                    </div>
                    <div class="txt_field">
                        <input type="password" name="password" id="password" required>
                        <span></span>
                        <label>Password</label>
                    </div>
                    <input type="submit" value="Login">
                    <div class="backhp">
                        <a href="index.php">back to homepage</a>
                    </div>
                </form>
            </div>
        </section>
    </main>
</body>
</html>