
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      include("referencia.php");
    ?>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
          google.charts.load('current', {'packages':['corechart']});
          google.charts.setOnLoadCallback(drawChart);
          google.charts.setOnLoadCallback(drawChartCO);
          google.charts.setOnLoadCallback(drawChartCDN);
          google.charts.setOnLoadCallback(drawChartNI);
          google.charts.setOnLoadCallback(drawChartE);
          function drawChart() {
            var data = google.visualization.arrayToDataTable([
              ['Task', 'Hours per Day'],
              ['',    7]
            ]);
            var options = {
              legend: 'none',
              pieSliceText: 'none',
              colors: ['green']
            };
            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data, options);
          }

          function drawChartCO() {
            var data = google.visualization.arrayToDataTable([
              ['Task', 'Hours per Day'],
              ['Continuidad Operacional',    15]
            ]);
            var options = {
              legend: 'none',
              pieSliceText: 'none',
              colors: ['yellow']
            };
            var chart = new google.visualization.PieChart(document.getElementById('piechartCO'));
            chart.draw(data, options);
          }
          function drawChartCDN() {
            var data = google.visualization.arrayToDataTable([
              ['Task', 'Hours per Day'],
              ['CDN',    15]
            ]);
            var options = {
              legend: 'none',
              pieSliceText: 'none',
              colors: ['green']
            };
            var chart = new google.visualization.PieChart(document.getElementById('piechartCDN'));
            chart.draw(data, options);
          }
          function drawChartNI() {
            var data = google.visualization.arrayToDataTable([
              ['Task', 'Hours per Day'],
              ['NI',    15]
            ]);
            var options = {
              legend: 'none',
              pieSliceText: 'none',
              colors: ['red']
            };
            var chart = new google.visualization.PieChart(document.getElementById('piechartNI'));
            chart.draw(data, options);
          }
          function drawChartE() {
            var data = google.visualization.arrayToDataTable([
              ['Task', 'Hours per Day'],
              ['E',    15]
            ]);
            var options = {
              legend: 'none',
              pieSliceText: 'none',
              colors: ['green']
            };
            var chart = new google.visualization.PieChart(document.getElementById('piechartE'));
            chart.draw(data, options);
          }

        </script>
  </head>
  <body class="nav-md">
    <div class="container-fluid">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#"><span>DashBoard</span>Bch</a>
    <img src="images/CONNECTIS2.jpg">
  </div>

</div><!-- /.container-fluid -->
    <div class="container body">
      <div class="main_container">
        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->


          <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="x_panel tile fixed_height_320">
                <div class="x_title">
                  <h2>Proyectos</h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div id="piechart" style="width: 100%; height: 100%;"></div>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="x_panel tile fixed_height_320">
                <div class="x_title">
                  <h2>Continuidad Operacional</h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div id="piechartCO" style="width: 100%; height: 100%;"></div>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="x_panel tile fixed_height_320">
                <div class="x_title">
                  <h2>Centro De Negocios</h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div id="piechartCDN" style="width: 100%; height: 100%;"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="x_panel tile fixed_height_320">
                <div class="x_title">
                  <h2>Nueva Internet</h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div id="piechartNI" style="width: 100%; height: 100%;"></div>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="x_panel tile fixed_height_320">
                <div class="x_title">
                  <h2>Emblemáticos</h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div id="piechartE" style="width: 100%; height: 100%;"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
        <?php
          include("footer.php");
        ?>
      </div>
    </div>
    <?php
      include("referenciaFooter.php");
    ?>
  </body>
</html>
