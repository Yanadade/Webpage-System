<?php

session_start();
include('server.php');
include('agency_com_db.php');

?>


    <!-- Company form -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agency Page1</title>

        <!-- css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>



        <!-- Header -->
    <div class="homeheader">
        <h1>AbJobs</h1>
    </div>
        <!--  WElcome Agency name -->
        <?php if (isset($_SESSION['username'])) : ?>
            <h2 align= "center">Welcome  <?php echo $_SESSION['username']; ?></h2>
        <?php endif ?> 
    <div class="homeheader">
        <a href="agency_pack_form.php" class="btn">Next</a>
        <a href="logout.php" class="btn">Log out</a> 
        <a href="salary_guide.php" class="btn">Salary Guide</a>    
    </div>
    
    

        <!-- Company Profile form -->
    <form action="agency_com_db.php" method="post">
        <hr>
        <div class="btn btn-secondary" align="center" style="font-size:20px";> Step 1: Company Profile</div><br><br>

    <!-- Company Details -->
        <label for="Company E-mail">Company E-mail  </label><input type="text" name="com_email" required><br><br>

        <label for="Company Name">Company Name  </label><input type="text" name="com_name" required><br><br>


        <label for="Address 1">Address 1  </label><input type="text" name="address1" required><br><br>

        <label for="Address 2">Address 2  </label><input type="text" name="address2" required><br><br>

        <label for="Sub District">Sub District  </label><input type="text" name="subdistrict" required><br><br>

        <label for="District">District  </label><input type="text" name="district" required><br><br>

        <label for="Province">Province  </label>
        <select name= 'province'>
        <option value="Select Only One">Select Only One</option>
        <option value="Ayutthaya">Ayutthaya</option> 
        <option value="Bangkok">Bangkok</option> 
        <option value="Chiangmai">Chiangmai</option> 
        <option value="Chiangrai">Chiangrai</option> 
        <option value="Chonburi">Chonburi</option> 
        <option value="Chumphon">Chumphon</option> 
        <option value="Khon Kaen">Khon Kaen</option> 
        <option value="Krabi">Krabi</option> 
        <option value="Nakhon Ratchasima">Nakhon Ratchasima</option> 
        <option value="Nonthaburi">Nonthaburi</option> 
        <option value="Other">Other</option> 
        <option value="Pathumthani">Pathumthani</option> 
        <option value="Phuket">Phuket</option> 
        <option value="Rayong">Rayong</option> 
        <option value="Samutprakarn">Samutprakarn</option> 
        <option value="Samutsakorn">Samutsakorn</option> 
        <option value="Songkhla">Songkhla</option> 
        <option value="Surat Thani">Surat Thani</option> 
        <option value="Ubon Ratchathani">Ubon Ratchathani</option> 
        </select><br><br>

        <label for="Telephone">Telephone  </label><input type="text" name="telephone" required><br><br>

        <label for="Company Size">Company Size (employees)  </label>
        <select name= 'comsize'>
        <option value="Select Only One">Select Only One</option>  
        <option value="10">10 </option>  
        <option value="50">50 </option>  
        <option value="200">200 </option>  
        <option value="500">500 </option>  
        <option value="1000">1000 </option>  
        <option value="5000">5000 </option>  
        <option value="10000">10000 </option>    
        </select><br><br><br>


        <input type="submit" name="submit" value="Submit" class="btn"></input>
        <a style="color: #000000" href="#"></a></button>    
    </form>
</body>
</html>
        