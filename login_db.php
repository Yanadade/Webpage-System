<?php
   
    session_start();
    include('server.php');

    $errors = array();
    
 
    if (isset($_POST['login_user'])) {

        $u_username = mysqli_real_escape_string($conn, $_POST['username']);
        $u_password = mysqli_real_escape_string($conn, $_POST['password']);
        
 
        if (empty($u_username)) {
            array_push($errors, "Username is required");
        }

        if (empty($u_password)) {
            array_push($errors, "Password is required");
        }
        
  
        if (count($errors) == 0) {
            $u_password = md5($password); 
            $query = "SELECT * FROM user WHERE username = '$u_username' AND password = '$u_password' ";
            $result = mysqli_query($conn, $query);


            if (mysqli_num_rows($result) == 1) {
                
                $_SESSION['username'] = $u_username;   
                $_SESSION['success'] = "Your are now logged in"; 
              
                    header("location: agency_com_form.php");
                
            } else {
              
                array_push($errors, "Wrong Username or Password");
                $_SESSION['error'] = "Wrong Username or Password!";
                header("location: login.php");
            }
        } else {
          
            array_push($errors, "Username & Password is required");
            $_SESSION['error'] = "Username & Password is required";
            header("location: login.php");
        }
    }

?>

