<html>
  <head>
    <style type="text/css">
      @import url('https://fonts.googleapis.com/css?family=Roboto:300');
      p{
        font-family: 'Roboto', sans-serif;
        font-size: 16px;
        color: #757575;
      }
      h1{
        font-family: 'Roboto', sans-serif;
        font-size: 24px;
      }
    </style>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar','corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var grafik_data='<?php echo $grafik_data;?>';
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Daerah');
        data.addColumn('number', 'Suara');
        data.addRows(JSON.parse(grafik_data));
        var options = {
        chart: 
        {
        'title':'Jumlah Suara yang Digunakan',
        },
        colors: ['#008080']};
        var chart = new google.charts.Bar(document.getElementById('chart_div'));
        chart.draw(data, options);
      
        var grafik_data2='<?php echo $grafik_data2;?>';
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Daerah');
        data.addColumn('number', 'Suara');
        data.addRows(JSON.parse(grafik_data2));
        var options2 = {
        chart: 
        {
        'title':'Jumlah Suara yang Sah',
        },
        colors: ['#008080']};
        var chart = new google.charts.Bar(document.getElementById('chart_div2'));
        chart.draw(data, options2);

        var grafik_data3='<?php echo $grafik_data3;?>';
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Daerah');
        data.addColumn('number', 'Suara');
        data.addRows(JSON.parse(grafik_data3));
        var options3 = {
        chart: 
        {
        'title':'Perolehan Suara Calon Presiden Nomor Urut 1',
        },
        colors: ['#0089F0']};
        var chart = new google.charts.Bar(document.getElementById('chart_div3'));
        chart.draw(data, options3);
      
        var grafik_data4='<?php echo $grafik_data4;?>';
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Daerah');
        data.addColumn('number', 'Suara');
        data.addRows(JSON.parse(grafik_data4));
        var options4 = {
        chart: 
        {
        'title':'Perolehan Suara Calon Presiden Nomor Urut 2',
        },
        colors: ['#AA0114']};
        var chart = new google.charts.Bar(document.getElementById('chart_div4'));
        chart.draw(data, options4);
      
        var grafik_data5='<?php echo $grafik_data5;?>';
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Nomor');
        data.addColumn('number', 'Jumlah');
        data.addRows(JSON.parse(grafik_data5));
        var options5 = {
          title: 'Persentase Perolehan Suara Pilpres 2014 di Jateng',
          'colors': ['#0089F0','#AA0114']
        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options5);
      }
    </script>
  </head>
<title>Visin95</title>
  <body>
    <h1><center>Visualisasi Data Perolehan Suara Pilpres 2014 di Jawa Tengah</center></h1>
    <table>
    <tr>
      <td>
        <div id="chart_div" style="width:400; height:240;"></div>
        <br>
        <div id="chart_div2" style="width:400; height:240;"></div>
      </td>
      <td>
        <div id="piechart" style="width:600; height:240;"></div>
      </td>
      <td>
       <div id="chart_div3" style="width:400; height:240;"></div>
       <br>
       <div id="chart_div4" style="width:400; height:240;"></div>
      </td>
    </tr>
    </table>
  </body>
</html>
