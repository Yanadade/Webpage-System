<?php
    
    session_start();
    include('server.php'); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
		<title>Log in Page</title>

		<style>
		body {
		background-image: url('bg.jpg');
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: 100% 100%;
		}
		</style>     
</head>
<body>

<nav1>
		<a href="login_admin.php" class="btn btn-primary btn-block" >Log in to Admin</a>
</nav1>


    <div class="container" style="margin-top: 150px;">
        <div class="row">
			<div class="col-sm-9"></div>
			<div class="col-sm-4">
    <h2>Log in to ABJobs</h2>
    </div>
  

    <form action="login_db.php" method="post">
        
        <?php if (isset($_SESSION['error'])) : ?>
            <div class="error">
                <h3>
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </h3>
            </div>
        <?php endif ?>

        <div class="input-group">
            <label for="username">Username  </label>
            <input type="text" name="username" required><br>
        </div>

        <div class="input-group">
            <label for="password">Password  </label>
            <input type="password" name="password" required>
        </div>

        <div class="input-group">
            <p><button type="submit" class="btn btn-primary btn-block" name="login_user" class="btn">Log in</button></p>
            
        </div>

        <p>Not a registered user yet? <a href="register.php">Create an account</a></p>

    </form>
    
</body>
</html>