  </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- include summernote script/js -->

	<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

	<script src="js/scripts.js"></script>
	<!-- google api below -->
<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Materials',     <?php echo Data::count_sectors(3); ?>],
          ['Industrials',      <?php echo Data::count_sectors(6); ?>],
          ['Real Estate',  <?php echo Data::count_sectors(2); ?>],
          ['Energy', <?php echo Data::count_sectors(10); ?>],
          ['Communication Services', <?php echo Data::count_sectors(4); ?>],
          ['Healthcare', <?php echo Data::count_sectors(1); ?>],
          ['Information Technology', <?php echo Data::count_sectors(9); ?>],
          ['Consumer Staples', <?php echo Data::count_sectors(7); ?>],
          ['Financials', <?php echo Data::count_sectors(8); ?>],
          ['Utilities', <?php echo Data::count_sectors(11); ?>],
          ['Consumer Discretionary', <?php echo Data::count_sectors(5); ?>]
        ]);

        var options = {
          pieSliceText: 'label',
          title: 'Pie Chart Showing Each Sector Percentage Rate Of Interaction ',
          backgroundColor: 'transparent',
          'legend': 'right'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
</body>

</html>
