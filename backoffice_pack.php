<?php  

    include('server.php');

 $query ="SELECT pack_id, pack_name, cost, total_jpost, use_jpost, start
             FROM package";  
 $result = mysqli_query($conn, $query); 
 
 ?>  

 
 <!DOCTYPE html>  
 <html>
     <head>
          <link rel="stylesheet" href="style2.css">
           <title>Summary Package</title>
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
                <h3 align="center">Summary Package</h3>  
                <br />  
                <div class="table-responsive">  
                    <table id="jobposting" class="styled-table" align="center">  
                          <thead> 
                            
                               <tr> 
                                    <td>Package ID</td>
                                    <td>Package Name</td>
                                    <td>Cost</td> 
                                    <td>Total JobPosting</td>  
                                    <td>Use JobPosting</td>
                                    <td>Start</td>
                                    
                                     
                               </tr>
                                
                          </thead> 

                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo '  
                               <tr>  
                                    <td>'.$row["pack_id"].'</td>  
                                    <td>'.$row["pack_name"].'</td>
                                    <td>'.$row["cost"].'</td>    
                                    <td>'.$row["total_jpost"].'</td>  
                                    <td>'.$row["use_jpost"].'</td>
                                    <td>'.$row["start"].'</td> 
                                    
                                        
                              </tr> 
                              ';  
                          }  
                          ?> 

                     </table>  
                </div>
                <a href="backoffice_com.php" class="btn">Back</a>
                <a href="backoffice_jpost.php" class="btn">Next</a>
                <a href="login_admin.php" class="btn">Logout</a>
                <a href="salary_guide_admin.php" class="btn">Salary Guide</a>  
           </div>  
      </body>  
 </html>  
 
 



