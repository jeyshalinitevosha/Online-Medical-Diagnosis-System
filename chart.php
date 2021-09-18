<?php include "connect.php" ?>
<?php 
$sql = "SELECT illness, COUNT(*) FROM data WHERE illness = 'fever' ";
$result =  mysqli_query($con, $sql);
        while ($row = mysqli_fetch_assoc($result)) 
        {
        	$fever = $row['COUNT(*)'];
        }

$sql = "SELECT illness, COUNT(*) FROM data WHERE illness = 'diarrhoea'";
$result = mysqli_query ($con, $sql);
		while ($row = mysqli_fetch_assoc($result))
		{
			$diarrhoea = $row['COUNT(*)'];
		}        

$sql = "SELECT illness, COUNT(*) FROM data WHERE illness = 'healthy'";
$result = mysqli_query ($con, $sql);
		while ($row = mysqli_fetch_assoc($result))
		{
			$healthy = $row['COUNT(*)'];
		}

$sql = "SELECT illness, COUNT(*) FROM data WHERE illness = 'flu'";
$result = mysqli_query ($con, $sql);
		while ($row = mysqli_fetch_assoc($result))
		{
			$flu= $row['COUNT(*)'];
		}

$sql = "SELECT illness, COUNT(*) FROM data WHERE illness = 'gastritis'";
$result = mysqli_query ($con, $sql);
    while ($row = mysqli_fetch_assoc($result))
    {
      $gastritis= $row['COUNT(*)'];
    }

$sql = "SELECT illness, COUNT(*) FROM data WHERE illness = 'uti'";
$result = mysqli_query ($con, $sql);
    while ($row = mysqli_fetch_assoc($result))
    {
      $uti= $row['COUNT(*)'];
    }    
     ?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart); 

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Illness', 'Number of Users'],
          ['Fever', <?php echo $fever ?>],
          ['Diarrhoea', <?php echo $diarrhoea ?>],
          ['Healthy',  <?php echo $healthy ?>],
          ['Flu',  <?php echo $flu ?>],
          ['Gastritis',  <?php echo $gastritis ?>],
          ['UTI',  <?php echo $uti ?>],
        ]);

        var options = 
        {
          title: ''
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
    <style>
       body {
      background-image: url(https://www.tsico.com/wp-content/uploads/2018/08/healthcare-background.jpg);
      font-family: Times New Roman;
    }

    h1{
      color: white;
      text-align: center;
      font-size: 60px;
  } 

  h2{
    color: white;
    text-align: center;
    font-size: 35px;
  }
    .wrapper{
    text-align: center;
  }

  #piechart{
    width: 100%;
    height: 80%;
    margin:auto;
  }
  .button1{
  background-color: black;
  border-radius: 20px;
  width: 5%;
  border: none;
  color: white;
  padding: 20px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
  margin: 10px 5px;
  cursor: pointer;
  float: left;
  }

   </style>
  </head>
  <body>
    <h1>ONLINE MEDICAL DIAGNOSIS SYSTEM</h1>
    
    <h2>DIAGNOSIS REPORT</h2>
    <div id="piechart"></div>
  </body>
  <div class="button">
   <a href="adminmain.php" class="button button1">Back</a>
    </div>
</html>
