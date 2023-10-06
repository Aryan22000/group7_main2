<?php

function drawGaugeChart($AVG, $Standard_deviation, $User_Value, $id) {
    $yellowFrom = $AVG - $Standard_deviation;
    $yellowTo = $AVG + $Standard_deviation;
    
    $js_code = '
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
            google.charts.load("current", {"packages":["gauge"]});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                    var data = google.visualization.arrayToDataTable([
                    ["Label", "Value"],
                    [" ", ' . $User_Value . ']
                    ]);

                    var options = {
                    width: 400, height: 120,
                    min: 1, max: 5,
                    yellowFrom: ' . $yellowFrom . ', yellowTo: ' . $yellowTo . ',
                    greenFrom: ' . $yellowTo . ', greenTo: 5,
                    redFrom: 1, redTo: ' . $yellowFrom . ',
                    };

                    var chart = new google.visualization.Gauge(document.getElementById("' . $id . '"));
                    chart.draw(data, options);
            }
            </script>
            <div id="' . $id . '" style="width: 400px; height: 120px;"></div>';

    return $js_code;
}

?>
<!-- echo drawGaugeChart($AVG, $Standard_deviation, $User_Value, 'gauge_div_id');  -->
<!-- <?php
echo drawGaugeChart(3.5, 0.5, 2, 'gauge_div_id'); 
?> -->