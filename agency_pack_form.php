<?php

include('server.php');
include('agency_pack_db.php');

?>

    <!-- Package form -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agency Page2</title>

        <!-- css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>

        <!-- Header -->
    <div class="homeheader">
        <h1>AbJobs</h1>
        <a href="agency_com_form.php" class="btn">Back</a>
        <a href="agency_jpost_form.php" class="btn">Next</a>
        <a href="logout.php" class="btn">Log out</a>
        <a href="salary_guide.php" class="btn">Salary Guide</a>
    </div>
    
        <!-- Package form -->
    <form action="" method="post">
        <hr>
        <div class="btn btn-secondary" align="center" style="font-size:20px";>Step 2: Package</div><br><br>

    <!-- Package Details -->
        
        <label for="Package name">Package name  </label><input type="text" name="pack_name"  required placeholder="Package 1,2,3"><br><br>
        <label for="Cost">Cost(THB)  </label><input type="number" name="cost"required><br><br>
        <label for="Total Job Posting">Total Job Posting  </label><input type="text" name="total_jpost"  required placeholder="Number"><br><br>
        <label for="Used Job Posting">Used Job Posting  </label><input type="text" name="use_jpost"  required placeholder="Number"><br><br>
        
        <label for="Start date">Start date  </label>
        <input type="date" name="exp" required placeholder="start"><br><br>

        <label for="Expired date">Expired date </label>
        <input type="date" name="exp" required placeholder="expired"><br><br>
       

        <input type="submit" name="submit" value="Submit" class="btn"></input>
        <a style="color: #000000" href="#"></a></button>    
    </form>
</body>
</html>
        