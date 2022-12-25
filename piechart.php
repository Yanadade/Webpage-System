<?php
      include('server.php');
      include('barchart.php');
      
      
      
      $query = "SELECT job_title, salary FROM jobposting GROUP BY job_indus";  
      $result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="en-US">
<body>

<h1></h1>

<div id="piechart"></div>

    <!-- css file link  -->
    <link rel="stylesheet" href="style.css">


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
    ['job_title', 'salary'],
    <?php
    while($row = mysqli_fetch_array($result))  
    {  
    echo "['".$row["job_title"]."', ".$row["salary"]."],";  
    }  
    ?>  
  ]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Thailand Salary Guide 2023', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
    </script>
    <!-- </div>
        <a href="salary_guide.php" class="btn btn-secondary">Back</a> 
        <a href="login_admin.php" class="btn btn-primary btn-block">Logout</a>   
      </div>  -->
</body>
</html>
