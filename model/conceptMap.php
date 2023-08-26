<html>  
  <head>
	<title> Concept Map </title>
   <script type='text/javascript' src='https://www.google.com/jsapi'></script>  
   <script type='text/javascript'>  
    google.load('visualization', '1', {packages:['orgchart']});  
    google.setOnLoadCallback(drawChart);  
    function drawChart() {  
     var data = new google.visualization.DataTable();  
     data.addColumn('string', 'Node');  
     data.addColumn('string', 'Parent');  
     data.addRows([  
      ['', ''],  
      ['NUMBER SYSTEM', 'MATHS'],  
      ['GEOMETRY', 'MATHS'],  
	  ['MEASUREMENTS', 'MATHS'],  
      ['DATA HANDLING', 'MATHS'], 
	  ['PATTERNS', 'MATHS'], 
     ]);  
     var chart = new google.visualization.OrgChart(document.getElementById('chart_div'));  
     chart.draw(data);  
    }  
   </script>  
  </head>  
  <body>  
   <div id='chart_div'></div>  
  </body>  
 </html>  