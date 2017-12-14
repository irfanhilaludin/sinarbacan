       
 <script type="text/javascript" src="js/jquery.min.js"></script>
 <script type="text/javascript">
            $(document).ready(function() {
                var options = {
                    chart: {
                        renderTo: 'container',
                        type: 'column'
                    },
                    title: {
                        text: 'Report Penawaran dan PO Marketing',
                        x: -20 //center
                    },
                    subtitle: {
                        text: 'PT Sinar Bacan Khatulistiwa',
                        x: -20
                    },
                    xAxis: {
                        categories: []
                    },
                    yAxis: {
                        title: {
                            text: 'Jumlah Perusahaan'
                        },
                        plotLines: [{
                                value: 0,
                                width: 1,
                                color: '#808080'
                            }]
                    },
                    tooltip: {
                        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                        pointFormat: '<span style="color:{point.color}"><b> total {point.y}</b><br/>'
                    },
                    plotOptions: {
                        series: {
                            borderWidth: 0,
                            dataLabels: {
                                enabled: true,
                                format: '{point.y+}'
                            }
                        }
                    },
                    legend: {
                        layout: 'vertical',
                        align: 'right',
                        verticalAlign: 'top',
                        x: -40,
                        y: 100,
                        floating: false,
                        borderWidth: 1,
                       
                        shadow: true
                    },
                    series: []
                };
                $.getJSON("data/penawaran.php", function(json) {
                    options.xAxis.categories = json[0]['data']; //xAxis: {categories: []}
                    options.series[0] = json[1];
					options.series[1] = json[2];
					 options.series[2] = json[3];
					options.series[3] = json[4];
					  
                    chart = new Highcharts.Chart(options);
                });
            });
        </script>
<div class="grid_10">

<div class="box round second grid">

<h2>

Report Penawaran dan PO Marketing</h2>
<div class="block">

<script src="js/highcharts.js"></script>
<script src="js/exporting.js"></script>
 
<div id="container"></div>
</div>
</div>
</div>
