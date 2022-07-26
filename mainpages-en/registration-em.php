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
                    <a href="dashboard-em.php">
                        <span class="material-icons-round">dashboard</span>
                        <h3>Dashboard</h3>
                    </a>
                    <a href="registration-em.php" class="active">
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
            <div class="timedata">
                <form action="../phpscript/timedatascript.php" method="post">
                    <label for="project_name">Project Name</label>
                    <input type="text" name="project_name" id="project_name" placeholder="Project Name..." required>

                    <label for="date">Date</label>
                    <input type="date" name="date" id="date" required>

                    <label for="amount_hours">Amout hours</label>
                    <input type="number" name="amount_hours" id="amount_hours" step=".1" required>

                    <input type="submit" class="time-submit" value="Submit">
                </form>
            </div>
        </main>
    </div>
</body>
</html>