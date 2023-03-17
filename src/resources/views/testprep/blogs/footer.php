  <footer class="main-footer">

    <div class="pull-right hidden-xs">

      <b>Version</b> 1.1.0

    </div>

    <strong>Copyright &copy; <?php echo date('Y').' - '.date('Y',strtotime('+1 year')); ?> <a href="#">Edmissions.com</a>.</strong> All rights reserved.

  </footer>



  <div class="control-sidebar-bg"></div>



</div><!-- jQuery 3 -->

<!--<script src="bower_components/jquery/dist/jquery.min.js"></script>-->

<!-- Bootstrap 3.3.7 -->





<!-- Sparkline -->

<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>

<!-- jvectormap  -->

<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>

<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

<!-- SlimScroll -->

<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>

<!-- ChartJS -->

<script src="bower_components/chart.js/Chart.js"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->

<script src="dist/js/pages/dashboard2.js"></script>

<!-- AdminLTE for demo purposes -->

<script src="dist/js/demo.js"></script>

<script type="text/javascript">

		$('#validate-me-plz').validate();

		$('.validate-me-plz').validate();

	</script>


<?php mysqli_close($cn); ?>


</body>

</html>