<?php  

    include('server.php');

 $query ="SELECT com_id, com_email, com_name, address1, address2, subdistrict, district, province, telephone, comsize 
          FROM company";  
 $result = mysqli_query($conn, $query); 
 
 ?>  

 
 <!DOCTYPE html>  
 <html>
     <head>
          <link rel="stylesheet" href="style2.css">
           <title>Summary Company Profile</title>
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
                <h3 align="center">Summary Company Profile</h3>  
                <br />  
                <div class="table-responsive">  
                    <table id="jobposting" class="styled-table" align="center">  
                          <thead> 
                            
                               <tr> 
                                    <td>Company ID</td>
                                    <td>Company E-mail</td>
                                    <td>Company Name</td> 
                                    <td>Address 1</td>  
                                    <td>Address 2</td>
                                    <td>Subdistrict</td>
                                    <td>District</td> 
                                    <td>Province</td>
                                    <td>Telephone</td>
                                    <td>Company Size</td>
                                    
                               </tr>
                                
                          </thead> 

                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo '  
                               <tr>  
                                    <td>'.$row["com_id"].'</td>  
                                    <td>'.$row["com_email"].'</td>
                                    <td>'.$row["com_name"].'</td>    
                                    <td>'.$row["address1"].'</td>  
                                    <td>'.$row["address2"].'</td>
                                    <td>'.$row["subdistrict"].'</td> 
                                    <td>'.$row["district"].'</td> 
                                    <td>'.$row["province"].'</td>
                                    <td>'.$row["telephone"].'</td>
                                    <td>'.$row["comsize"].'</td>
                                          
                              </tr> 
                              ';  
                          }  
                          ?> 

                     </table>  
                </div> 
                <a href="backoffice_pack.php" class="btn">Next</a>
                <a href="login_admin.php" class="btn">Logout</a>
                <a href="salary_guide_admin.php" class="btn">Salary Guide</a>
                
           </div> 
         
      </body>  
 </html>  
 
 



