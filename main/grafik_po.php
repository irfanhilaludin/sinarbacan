       
 <script type="text/javascript" src="js/jquery.min.js"></script>
 <script type="text/javascript">
            $(document).ready(function() {
                var options = {
                    chart: {
                        renderTo: 'container',
                        type: 'column'
                    },
					rangeSelector: {
            selected: 1
        },
                    title: {
                        text: 'Klasemen Perolehan PO',
                        x: -20 //center
                    },
                    subtitle: {
                        text: 'PT Sinar Bacan Khatulistiwa',
                        x: -20
                    },
                    xAxis: {
                        categories: [] ,
						gridLineWidth: 1
						
                    },
                    yAxis: {
                        title: {
                            text: 'Jumlah' ,
							gridLineWidth: 1
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
                        x: -20,
                        y: 100,
                        floating: false,
                        borderWidth: 1,
                       
                        shadow: true
                    },
                    series: []
                };
                $.getJSON("data/klasemen.php", function(json) {
                    options.xAxis.categories = json[0]['data']; //xAxis: {categories: []}
					
                    options.series[0] = json[1];
					
					
					

                    chart = new Highcharts.Chart(options);
                });
            });
        </script>
		
<script type="text/javascript">
            $(document).ready(function() {
                var options = {
                    chart: {
                        renderTo: 'container1',
                        type: 'column'
                    },
                    title: {
                        text: 'Klasemen Perolehan Volume PO',
                        x: -20 //center
                    },
                    subtitle: {
                        text: 'PT Sinar Bacan Khatulistiwa',
                        x: -20
                    },
                    xAxis: {
                        categories: [],
						gridLineWidth: 1
                    },
                    yAxis: {
                        title: {
                            text: 'Jumlah',
							gridLineWidth: 1
                        },
                        plotLines: [{
                                value: 0,
                                width: 1,
                                color: '#808080'
                            }]
                    },
                    tooltip: {
                        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                        pointFormat: '<span style="color:{point.color}"><b> Total {point.y}</b><br/>'
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
                        x: -20,
                        y: 100,
                        floating: false,
                        borderWidth: 1,
                       
                        shadow: true
                    },
                    series: []
                };
                $.getJSON("data/klasemen_vol.php", function(json) {
                    options.xAxis.categories = json[0]['data']; //xAxis: {categories: []}
					
                    options.series[0] = json[1];
					
					

                    chart = new Highcharts.Chart(options);
                });
            });
        </script>		
		
 <script type="text/javascript">
            $(document).ready(function() {
                var options = {
                    chart: {
                        renderTo: 'container2',
                        type: 'line'
                    },
                    title: {
                        text: 'Report Volume PO Harian',
                        x: -20//center
						
                    },
                    subtitle: {
                        text: 'PT Sinar Bacan Khatulistiwa',
                        x: -20
                    },
                    xAxis: {
                        categories: [] ,
						gridLineWidth: 1,
						gridLineColor: '#197F07'
						
                    },
                    yAxis: {
                        title: {
                            text: 'Jumlah' ,
							gridLineWidth: 1
							
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
                        x: -20,
                        y: 100,
                        floating: false,
                        borderWidth: 1,
                       
                        shadow: true
                    },
                    series: []
                };
                $.getJSON("data/klasemen_tgl.php", function(json) {
                    options.xAxis.categories = json[0]['data']; //xAxis: {categories: []}
					
					options.series[0] = json[1];
  			

					
					

                    chart = new Highcharts.Chart(options);
                });
            });
        </script>

<div class="grid_10">

<div class="box round second grid">

<h2>

Report Volume PO Harian</h2>
<div class="block">

<div id="container2"></div>
</div>
</div>

		

<div class="grid_12">

<div class="box round second grid">

<h2>

Report Volume PO Marketing</h2>
<div class="block">

<div id="container1"></div>
</div>
</div>
</div>
		
<div class="grid_12">

<div class="box round second grid">

<h2>

Report Penawaran dan PO Marketing</h2>
<div class="block">

<div id="container"></div>
</div>
</div>
</div>
</div>

<script src="js/highcharts.js"></script>
<script src="js/exporting.js"></script>
 