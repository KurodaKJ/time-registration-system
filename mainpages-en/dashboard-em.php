<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gilde Time registration - Employees</title>
    <?php include '../sitetemplate/head.php' ; ?>
    <link rel="stylesheet" href="../css/ovstyle.css">
</head>
<body>
    <div class="container">
        <div class="side">
            <aside>
                <div class="ov-top">
                    <div class="logo">
                        <a class="gilde" href="#">Gilde<span class="time">Time</span><span class="registration">registration</span></a>
                    </div>
                </div>
                <div class="sidebar">
                    <a href="dashboard-em.php" class="active">
                        <span class="material-icons-round">dashboard</span>
                        <h3>Dashboard</h3>
                    </a>
                    <a href="registration-em.php">
                        <span class="material-icons-round">schedule</span>
                        <h3>Registration</h3>
                    </a>
                    <a href="../phpscript/logoutscript.php">
                        <span class="material-icons-round">logout</span>
                        <h3>Logout</h3>
                    </a>
                </div>  
            </aside>
        </div>    
        <main>
            <div class="welcome">
                <p>Hello!</p>
                <?php
                session_start(); 
                include("../phpscript/connection.php");
                include("../phpscript/function.php");

                echo $_SESSION['id'];
                ?>
            </div>
        </main>
    </div>
</body>
</html>
