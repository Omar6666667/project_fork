<?php

$status = "Pr";

include("includes/header.php");
include("includes/sidebar.php");

?>



<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Pr</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Pr</h1>
        </div>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">

            <?php

            if (!isset($_GET['action'])) {
                include("design/pr/all_pr.php");
            } elseif ($_GET['action'] === 'add') {
                include("design/pr/add_pr.php");
            } elseif ($_GET['action'] === 'edit') {
                include("design/pr/edit_pr.php");
            }


            ?>
        </div>
    </div><!--/.row-->







</div> <!--/.main-->

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/chart.min.js"></script>
<script src="js/chart-data.js"></script>
<script src="js/easypiechart.js"></script>
<script src="js/easypiechart-data.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/custom.js"></script>
<script>
    window.onload = function() {
        var chart1 = document.getElementById("line-chart").getContext("2d");
        window.myLine = new Chart(chart1).Line(lineChartData, {
            responsive: true,
            scaleLineColor: "rgba(0,0,0,.2)",
            scaleGridLineColor: "rgba(0,0,0,.05)",
            scaleFontColor: "#c5c7cc"
        });
    };
</script>

</body>

</html>