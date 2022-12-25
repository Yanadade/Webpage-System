<?php  
    session_start();
    include('server.php');

 $query ="SELECT * FROM jobposting ORDER BY job_id DESC";  
 $result = mysqli_query($conn, $query); 
 
 ?>  

 
 <!DOCTYPE html>  
 <html>
     <head>
          <link rel="stylesheet" href="style1.css">
           <title>User Page</title>
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

	<nav1>
          <a href="agency_com_form.php " class="btn" >Back</a>
          <a href="Logout.php " class="btn" >Logout</a>
	</nav1>
           <div class="container">  
                <h3 align="center">Salary Guide Dashboard</h3>  
                <br />  
                <div class="table-responsive">  
                    <table id="jobposting" class="styled-table" align="center">  
                          <thead> 
                            
                               <tr> 
                                    <td>Job Industry</td> 
                                    <td>Job Function</td>  
                                    <td>Job Location</td>  
                                    <td>Salary</td> 
                               </tr>
                                
                          </thead> 

                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo '  
                               <tr>  
                                    <td>'.$row["job_indus"].'</td>  
                                    <td>'.$row["job_function"].'</td>  
                                    <td>'.$row["job_location"].'</td>  
                                    <td>'.$row["salary"].'</td>
                                  
                              </tr> 
                              ';  
                          }  
                          ?> 

                     </table>  
                </div> 

           </div>
           <?php 
           include("piechart.php");
           ?>
      </body>  
 </html>  
 
 



