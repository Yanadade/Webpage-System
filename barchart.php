<?php
    include('server.php');

    $query = "SELECT job_indus, salary FROM jobposting GROUP BY job_indus";  
    $result = mysqli_query($conn, $query); 

    
?>
 
<!DOCTYPE html>
<html lang="en-US">
<body>

<h1></h1>

<div id="barchart"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<div id="chart_div"></div>

<script type="text/javascript">

// Load google charts
google.charts.load('current', {
  packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawAxisTickColors);

function drawAxisTickColors() {
  var data = google.visualization.arrayToDataTable([
    ['job_indus', 'salary'],
    <?php
    while($row = mysqli_fetch_array($result))  
    {  
    echo "['".$row["job_indus"]."', ".$row["salary"]."],";  
    }  
    ?>  
  ]);

  var options = {
    title: 'Thailand Salary Guide 2023',
    chartArea: {
      width: '50%', 
    },
    hAxis: {
      title: 'Salary',
      minValue: 0,
      textStyle: {
        bold: true,
        fontSize: 12,
        color: '#4d4d4d'
      },
      titleTextStyle: {
        bold: true,
        fontSize: 18,
        color: '#4d4d4d'
      }
    },
    vAxis: {
      title: 'Job Industry',
      textStyle: {
        fontSize: 14,
        bold: true,
        color: '#848484'
      },
      titleTextStyle: {
        fontSize: 14,
        bold: true,
        color: '#848484'
      }
    }
  };
  var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
  chart.draw(data, options);
}

</script>
</html>