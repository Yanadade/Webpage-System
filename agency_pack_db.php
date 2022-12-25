<?php 

include('server.php');

if(isset($_POST['submit'])){

    
    $pack_name =mysqli_real_escape_string($conn, $_POST['pack_name']);
    $cost =mysqli_real_escape_string($conn, $_POST['cost']);
    $total_jpost =mysqli_real_escape_string($conn, $_POST['total_jpost']);
    $use_jpost =mysqli_real_escape_string($conn, $_POST['use_jpost']);
    //$start =mysqli_real_escape_string($conn, $_POST['start']);
    //$exp =mysqli_real_escape_string($conn, $_POST['exp']);
    


    $insert = " INSERT INTO package(pack_name, cost, total_jpost, use_jpost) 
                VALUES('$pack_name','$cost','$total_jpost','$use_jpost')";

    
    $result = mysqli_query($conn, $insert);
  
    
    if($result){
        echo "<script type='text/javascript'>";
        echo "window.location = 'agency_jpost_form.php'; ";
        echo "</script>";
        }
}
?>