<?php

include('server.php');
include('agency_jpost_db.php');

?>


    <!-- Company form -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agency Page3</title>

        <!-- css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>

        <!-- Header -->
    <div class="homeheader">
        <h1>AbJobs</h1>
        <a href="agency_pack_form.php" class="btn">Back</a>
        <a href="logout.php" class="btn">Log out</a>
        <a href="salary_guide.php" class="btn">Salary Guide</a>
    </div>
    
    

        <!-- Job Posting form -->
    <form action="" method="post">
        <hr>
        <div class="btn" align="center" style="font-size:20px";>Step 3: Job Posting</div><br><br>
        
        <!-- Job Posting form -->

        <label for="Job Title">Job Title  </label><input type="text" name="job_title" required><br><br>

        <!-- Job Industry Drop Down-->
        <label for="Job Industry">Job Industry  </label>
        <select name= 'job_indus'>
        <option value="Select Only One">Select Only One</option>  
        <option value="Advertising and marketing">Advertising and marketing</option>
        <option value="Aerospace">Aerospace</option>  
        <option value="Agriculture">Agriculture</option>  
        <option value="Computer and technology">Computer and technology</option>  
        <option value="Construction">Construction</option>  
        <option value="Education">Education</option>  
        <option value="Energy">Energy</option>  
        <option value="Entertainment">Entertainment</option>  
        <option value="Fashion">Fashion</option> 
        <option value="Finance and economic">Finance and economic</option>  
        <option value="Food and beverage">Food and beverage</option>  
        <option value="Health care">Health care</option>
        <option value="Hospitality">Hospitality</option>  
        <option value="Manufacturing">Manufacturing</option>  
        <option value="Media and news">Media and news</option>
        <option value="Mining">Mining</option>  
        <option value="Pharmaceutical">Pharmaceutical</option> 
        <option value="Telecommunication">Telecommunication</option>
        <option value="Transportation">Transportation</option>  
        </select><br><br>

        <label for="Job Function">Job Function  </label>
        <select name= 'job_function' required>
        <option value="Select Only One">Select Only One</option> 
        <option value="Accounting">Accounting</option> 
        <option value="Admin & HR">Admin & HR</option> 
        <option value="Banking & Finance">Banking & Finance</option> 
        <option value="Engineering">Engineering</option> 
        <option value="IT">IT</option> 
        <option value="Marketing">Marketing</option> 
        <option value="Sales">Sales</option> 
        <option value="FreshGrad">FreshGrad</option> 
        </select><br><br>

        <label for="Job Location">Job Location  </label>
        <select name= 'job_location' required>
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
        <option value="Overseas">Overseas</option> 
        <option value="Pathumthani">Pathumthani</option> 
        <option value="Phuket">Phuket</option> 
        <option value="Rayong">Rayong</option> 
        <option value="Samutprakarn">Samutprakarn</option> 
        <option value="Samutsakorn">Samutsakorn</option> 
        <option value="Songkhla">Songkhla</option> 
        <option value="Surat Thani">Surat Thani</option> 
        <option value="Ubon Ratchathani">Ubon Ratchathani</option> 
        </select><br><br>

        <label for="Career Level">Career Level  </label>
        <select name= 'career_level' required>
        <option value="Select Only One">Select Only One</option>
        <option value="Entry Level">Entry Level</option> 
        <option value="Officer / Executive">Officer / Executive</option> 
        <option value="Manager">Manager</option> 
        <option value="Senior Executive">Senior Executive</option> 
        <option value="C Level Management">C Level Management</option> 
        </select><br><br>

        <label for="Qualification Level">Qualification Level  </label>
        <select name= 'quali_level' required>
        <option value="Select Only One">Select Only One</option>
        <option value="Doctor">Doctor</option> 
        <option value="Master">Master</option> 
        <option value="Degree">Degree</option> 
        <option value="Diploma">Diploma</option> 
        <option value="Other">Other</option> 
        </select><br><br>

        <label for="Salary">Salary(THB)  </label>
        <select name= 'salary' required>
        <option value="Select Only One">Select Only One</option>
        <option value="10000">10000</option> 
        <option value="30000">30000</option> 
        <option value="50000">50000</option> 
        <option value="70000">70000</option> 
        <option value="100000">100000</option> 
        </select><br><br>

        <label for="Job Type">Job Type  </label>
        <select name= 'job_type' required>
        <option value="Select Only One">Select Only One</option>
        <option value="Full Time">Full Time</option> 
        <option value="Part Time">Part Time</option> 
        <option value="Permanent">Permanent</option> 
        <option value="Temporary">Temporary</option> 
        <option value="Contract">Contract</option> 
        <option value="Internship">Internship</option> 
        <option value="Freelance">Freelance</option> 
        </select><br><br>

        <label for="Job Description">Job Description  </label><input type="text" name="job_des"><br><br>
        <label for="Language skill">Language skill  </label><input type="text" name="lang_skill"><br><br>
        <label for="Hard skill">Hard skill  </label><input type="text" name="hard_skill"><br><br>
        <label for="Soft skill">Soft skill  </label><input type="text" name="soft_skill"><br><br><br>

        <input type="submit" name="submit" value="Submit" class="btn"></input>
        <a style="color: #000000" href="#"></a></button>    
    </form>
</body>
</html>
        