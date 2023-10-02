<?php

function drawGaugeChart($value, $id) {
        $js_code = '
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script type="text/javascript">
                google.charts.load("current", {"packages":["gauge"]});
                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                        ["Label", "Value"],
                        ["", ' . $value . ']
                        ]);

                        var options = {
                        width: 400, height: 120,
                        min: 1, max: 5,
                        };

                        var chart = new google.visualization.Gauge(document.getElementById("' . $id . '"));
                        chart.draw(data, options);
                }
                </script>
                <div id="' . $id . '" style="width: 400px; height: 120px;"></div>';

        return $js_code;
}

// Use the function
//echo drawGaugeChart(2.5, "chart_div1");
//echo drawGaugeChart(3.5, "chart_div2");
?>

