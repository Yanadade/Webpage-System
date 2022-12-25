<?php 

include('server.php');

if(isset($_POST['submit'])){


    $com_email =mysqli_real_escape_string($conn, $_POST['com_email']);
    $com_name =mysqli_real_escape_string($conn, $_POST['com_name']);
    $address1 =mysqli_real_escape_string($conn, $_POST['address1']);
    $address2 =mysqli_real_escape_string($conn, $_POST['address2']);
    $subdistrict =mysqli_real_escape_string($conn, $_POST['subdistrict']);
    $district =mysqli_real_escape_string($conn, $_POST['district']);
    $province =mysqli_real_escape_string($conn, $_POST['province']);
    $telephone =mysqli_real_escape_string($conn, $_POST['telephone']);
    $comsize =mysqli_real_escape_string($conn, $_POST['comsize']);


    $insert = " INSERT INTO company(com_email, com_name, address1, address2,
                                    subdistrict, district, province, telephone, comsize) 
                VALUES('$com_email','$com_name','$address1','$address2',
                        '$subdistrict','$district','$province','$telephone','$comsize')";

    
    $result = mysqli_query($conn, $insert);
  
       
        
      
    
        if($result){
            echo "<script type='text/javascript'>";
            echo "window.location = 'agency_pack_form.php'; ";
            echo "</script>";
            }
            
}
?>