<?php

function drawGaugeChart($value) {
    $js_code = '
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            // Load the Visualization API and the corechart package.
            google.charts.load("current", {"packages":["gauge"]});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                // Create our data table.
                var data = google.visualization.arrayToDataTable([
                    ["Label", "Value"],
                    ["Memory", ' . $value . ']
                ]);

                // Options for the chart
                var options = {
                    width: 400, height: 120,
                    min: 1, max: 5,
                    minorTicks: 100000
                };

                // Draw the chart
                var chart = new google.visualization.Gauge(document.getElementById("chart_div"));
                chart.draw(data, options);
            }
        </script>
        <div id="chart_div" style="width: 400px; height: 120px;"></div>';

    return $js_code;
}

// Use the function
echo drawGaugeChart(2.5);

?>
