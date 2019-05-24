<html>
  <head>
    <style type="text/css">
      @import url('https://fonts.googleapis.com/css?family=Roboto:300');
      p{
        font-family: 'Roboto', sans-serif;
        font-size: 16px;
        color: #757575;
      }
    </style>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar','corechart']});
      google.charts.setOnLoadCallback(drawChart);
      google.charts.setOnLoadCallback(drawChart2);
      google.charts.setOnLoadCallback(drawChart3);
      google.charts.setOnLoadCallback(drawChart4);
      google.charts.setOnLoadCallback(drawChart5);
      function drawChart() {
        var grafik_data='<?php echo $grafik_data;?>'
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
      }
      function drawChart2() {
        var grafik_data='<?php echo $grafik_data2;?>'
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Daerah');
        data.addColumn('number', 'Suara');
        data.addRows(JSON.parse(grafik_data));
        var options = {
        chart: 
        {
        'title':'Jumlah Suara yang Sah',
        },
        colors: ['#008080']};
        var chart = new google.charts.Bar(document.getElementById('chart_div2'));
        chart.draw(data, options);
      }
      function drawChart3() {
        var grafik_data='<?php echo $grafik_data3;?>'
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Daerah');
        data.addColumn('number', 'Suara');
        data.addRows(JSON.parse(grafik_data));
        var options = {
        chart: 
        {
        'title':'Perolehan Suara Calon Presiden Nomor Urut 1',
        },
        colors: ['#0089F0']};
        var chart = new google.charts.Bar(document.getElementById('chart_div3'));
        chart.draw(data, options);
      }
      function drawChart4() {
        var grafik_data='<?php echo $grafik_data4;?>'
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Daerah');
        data.addColumn('number', 'Suara');
        data.addRows(JSON.parse(grafik_data));
        var options = {
        chart: 
        {
        'title':'Perolehan Suara Calon Presiden Nomor Urut 2',
        },
        colors: ['#AA0114']};
        var chart = new google.charts.Bar(document.getElementById('chart_div4'));
        chart.draw(data, options);
      }
      function drawChart5() {

        var data = google.visualization.arrayToDataTable([
          ['Nomor', 'Jumlah'],
          ['Nomor urut 1', 6485720],
          ['Nomor urut 2', 12959540],
        ]);

        var options = {
          title: 'Persentase Perolehan Suara Pilpres 2014 di Jateng',
          'colors': ['#0089F0','#AA0114']
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }

    </script>
  </head>
<title>Visualisasi Informasi</title>
  <body>
    <div id="chart_div" style="width:720; height:240; margin-left: 10px; margin-top: 10px;"></div>
    <div id="chart_div2" style="width:720; height:240; margin-left: 10px;"></div>
    <div id="chart_div3" style="width:720; height:240; margin-left: 10px; margin-top: 10px;"></div>
    <div id="chart_div4" style="width:720; height:240; margin-left: 10px; margin-top: 10px;"></div>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>
