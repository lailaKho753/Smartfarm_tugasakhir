@extends('layouts.master')

@section('content')
<div class="div main">
    <div class="div main-content">
        <div class="container-fluid">
            <div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Overview</h3>
						</div>
						<div class="panel-body">
                        <table class="table table-hover">
										<thead>
											<tr>
												<th>#</th>
												<th>First Name</th>
												<th>Last Name</th>
												<th>Username</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>Steve</td>
												<td>Jobs</td>
												<td>@steve</td>
											</tr>
											<tr>
												<td>2</td>
												<td>Simon</td>
												<td>Philips</td>
												<td>@simon</td>
											</tr>
											<tr>
												<td>3</td>
												<td>Jane</td>
												<td>Doe</td>
												<td>@jane</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>


                           
							
							</div>
						</div>
					</div>
                </div>
            </div>
        </div>


						
@stop 

@section('footer')
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script>
        Highcharts.chart('chartSuhu', {

            title: {
                text: 'Grafik Perubahan Suhu'
            },

            subtitle: {
                text: 'Source: thesolarfoundation.com'
            },

            yAxis: {
                title: {
                    text: 'Suhu (derajat celcius)'
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },

            plotOptions: {
                series: {
                    label: {
                        connectorAllowed: false
                    },
                    pointStart: 2016
                }
            },

            series: [{
                name: 'Suhu 1',
                data: [23, 23, 24, 25, 25, 26]
            }, {
                name: 'Suhu 2',
                data: [24, 24, 25, 24, 23, 20]
            }, {
                name: 'Suhu 3',
                data: [28, 28, 28, 28, 25, 25]
            }, {
                name: 'Suhu 4',
                data: [23, 23, 23, 23, 20, 20]
            }, {
                name: 'Suhu 5',
                data: [22, 22, 20, 20, 22, 22]
            }],

            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }

            });
    </script>
@stop