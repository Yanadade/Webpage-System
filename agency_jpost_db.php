<?php 

include('server.php');

if(isset($_POST['submit'])){


    $job_title =mysqli_real_escape_string($conn, $_POST['job_title']);
    $job_indus =mysqli_real_escape_string($conn, $_POST['job_indus']);
    $job_function =mysqli_real_escape_string($conn, $_POST['job_function']);
    $job_location =mysqli_real_escape_string($conn, $_POST['job_location']);
    $career_level =mysqli_real_escape_string($conn, $_POST['career_level']);
    $quali_level =mysqli_real_escape_string($conn, $_POST['quali_level']);
    $salary =mysqli_real_escape_string($conn, $_POST['salary']);
    $job_type =mysqli_real_escape_string($conn, $_POST['job_type']);
    $job_des =mysqli_real_escape_string($conn, $_POST['job_des']);
    $lang_skill =mysqli_real_escape_string($conn, $_POST['lang_skill']);
    $hard_skill =mysqli_real_escape_string($conn, $_POST['hard_skill']);
    $soft_skill =mysqli_real_escape_string($conn, $_POST['soft_skill']);

    $insert = " INSERT INTO jobposting(job_title, job_indus, job_function, job_location, career_level, quali_level,
                                    salary, job_type, job_des, lang_skill, hard_skill, soft_skill) 
                VALUES('$job_title','$job_indus','$job_function','$job_location','$career_level','$quali_level',
                        '$salary','$job_type','$job_des','$lang_skill','$hard_skill', '$soft_skill')";

    
    $result = mysqli_query($conn, $insert);
  
    
}
?>