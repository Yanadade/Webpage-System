<?php 
    session_start();
    include('server.php');
   

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }

    if (isset($_GET['logout'])) {
        header('location: login.php');
    }
        
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Home Page</title>
    <style>
		body {
		background-image: url('bg6.jpg');
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: 100% 100%;
		}
		</style>     

        <!--<link rel="stylesheet" href="style.css">-->
</head>
<body>

    <!--  Home Header -->

    <div class="homeheader">

        <h2>ABJobs</h2>
		<a href="agency_com_form.php" class="btn">Post Job</a>
        <a href="logout.php" class="btn">Log out</a>
        <a href="salary_guide.php" class="btn">Salary Guide</a>
    </div>

    <!--  Home content -->
    <div class="homecontent">

           <!-- notification message-->
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="success">
                <h3>
                    <?php 
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
              
    </div>
</body>
</html>
