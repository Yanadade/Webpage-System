<?php  

    include('server.php');

 $query ="SELECT job_id, job_title, job_indus, job_function, job_location, 
                 career_level, quali_level, salary, job_type, job_des, lang_skill, hard_skill, soft_skill
             FROM jobposting";  
 $result = mysqli_query($conn, $query); 
 
 ?>  

 
 <!DOCTYPE html>  
 <html>
     <head>
          <link rel="stylesheet" href="style2.css">
           <title>Summary JobPosting</title>
               <!--start data table-->  
          <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
          <script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.12.0.min.js"></script>
          <script type="text/javascript" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
          <script>
          $(document).ready(function() {
               $('#jobposting').DataTable();
                    });
          </script>
               <!-- end data table -->  
     </head>  
     <body>
          <div>
               <h1 align='center'>ABJobs Back Office</h1>
          </div>  

           <div class="container">  
                <h3 align="center">Summary JobPosting</h3>  
                <br />  
                <div class="table-responsive">  
                    <table id="jobposting" class="styled-table" align="center">  
                          <thead> 
                            
                               <tr> 
                                    <td>Job ID</td>
                                    <td>Job Title</td>
                                    <td>Job Industry</td> 
                                    <td>Job Function</td>  
                                    <td>Job Location</td>
                                    <td>Career Level</td>
                                    <td>Qualification Level</td> 
                                    <td>Salary</td>
                                    <td>Job Type</td>
                                    <td>Job Description</td>
                                    <td>language Skill</td>
                                    <td>Hard Skill</td>
                                    <td>Soft Skill</td> 
                               </tr>
                                
                          </thead> 

                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo '  
                               <tr>  
                                    <td>'.$row["job_id"].'</td>  
                                    <td>'.$row["job_title"].'</td>
                                    <td>'.$row["job_indus"].'</td>    
                                    <td>'.$row["job_function"].'</td>  
                                    <td>'.$row["job_location"].'</td>
                                    <td>'.$row["career_level"].'</td> 
                                    <td>'.$row["quali_level"].'</td> 
                                    <td>'.$row["salary"].'</td>
                                    <td>'.$row["job_type"].'</td>
                                    <td>'.$row["job_des"].'</td>
                                    <td>'.$row["lang_skill"].'</td>
                                    <td>'.$row["hard_skill"].'</td>
                                    <td>'.$row["soft_skill"].'</td>       
                              </tr> 
                              ';  
                          }  
                          ?> 

                     </table>  
                </div> 
                <a href="backoffice_pack.php" class="btn">Back</a>
                <a href="login_admin.php" class="btn">Logout</a>
                <a href="salary_guide_admin.php" class="btn">Salary Guide</a>     
           </div>  
      </body>  
 </html>  
 
 



