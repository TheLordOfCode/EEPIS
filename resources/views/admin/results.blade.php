@extends('layouts.adminLayout.admin_desing')
@section('content')

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <!--GRAFICO 1-->
    <script type="text/javascript">
        google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Estudiantes', 'Cantidad de estudiantes por nivel de ingenieria'],
                ['Nivel Excelente',     5],
                ['Nivel Bueno',      9],
                ['Nivel Regular',  10],
                ['Nivel Malo', 9],
                ['Nivel Deficiente', 2],

            ]);

            var options = {
                title: 'Nivel Promedio de Estudiantes de Ingenieria de Sistemas',
                pieHole: 0.4,
                width: '100%',
                height: '100%',
            };

            var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
            chart.draw(data, options);
        }
    </script>
    <!--FIN DEL GRAFICO 1-->
    <!--GRAFICO 2-->
    <script type="text/javascript">
        google.charts.load("current", {packages:['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ["Variable", "Valor fuzzy", { role: "style" } ],
                ["Logica matematica", 0.6, "#08c"],
                ["Motivación", 0.7, "#9FF781"],
                ["Comunicación", 0.9, "#FE2E2E"],

            ]);

            var view = new google.visualization.DataView(data);
            view.setColumns([0, 1,
                { calc: "stringify",
                    sourceColumn: 1,
                    type: "string",
                    role: "annotation" },
                2]);

            var options = {
                // title: "Valor promedio general en variables",
                width: '100%',
                height: '100%',
                //chartArea: {width: '100%', height: '100%'},
                bar: {groupWidth: "95%"},

                legend: { position: "none" },
            };
            var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
            chart.draw(view, options);
        }

    </script>
    <!--FIN DEL GRAFICO 2-->
    <!--GRAFICO 3-->
    <script type="text/javascript">
        google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ["Variable", "Valor fuzzy", { role: "style" } ],
                ["Matematica", 0.6, "#08c"],
                ["Motivación", 0.7, "#9FF781"],
                ["Comunicación", 0.9, "#FE2E2E"],


            ]);

            var options = {
                legend: 'none',
                pieSliceText: 'label',
                //title: 'Swiss Language Use (100 degree rotation)',
                pieStartAngle: 100,
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data, options);
        }
    </script>
    <!--FIN DEL GRAFICO 3-->
    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="{{ url('/home') }}" title="ir a Inicio" class="tip-bottom"><i class="icon-home"></i> Inicio</a> <a href="{{ url('/home/results') }}" title="ir a Resultados" class="tip-bottom"><i class="icon icon-signal"></i> Resultados</a>  </div>
            <h1>Graficos Generales Estudiantes de Ingenieria de Sistemas</h1>
        </div>
        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-signal"></i> </span>
                            <h5>Resultados Coorte 2018-1</h5>
                        </div>
                        <div class="widget-content">
                            <center>
                            <div id="donutchart" style=" height: 500px;"></div>
                            </center>
                            <a href="#"><i class="icon icon-eye-open"></i> ver resultados individuales</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span7">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-signal"></i> </span>
                            <h5>Valor promedio general en variables coorte 2018-1</h5>
                        </div>
                        <div class="widget-content">
                            <center>
                            <div id="columnchart_values" style="height: 300px;" ></div>
                            </center>
                            <a href="#"><i class="icon icon-eye-open"></i> ver resultados individuales</a>
                        </div>
                    </div>
                </div>
                <div class="span5">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-signal"></i> </span>
                            <h5>Porcentaje promedio general coorte 2018-1 </h5>
                        </div>
                        <div class="widget-content">
                            <center>
                                <div id="piechart" style="height: 300px;" ></div>
                            </center>
                            <a href="#"><i class="icon icon-eye-open"></i> ver resultados individuales</a>
                        </div>
                    </div>
                </div>
            </div>


            <!-- graficos datos generales en muestras-->
            <!--
            <div class="widget-box widget-plain">
                <div class="center">
                    <ul class="stat-boxes2">
                        <li>
                            <div class="left peity_bar_neutral"><span><span style="display: none;">2,4,9,7,12,10,12</span>
              <canvas width="50" height="24"></canvas>
              </span>+10%</div>
                            <div class="right"> <strong>15598</strong> Visits </div>
                        </li>
                        <li>
                            <div class="left peity_line_neutral"><span><span style="display: none;">10,15,8,14,13,10,10,15</span>
              <canvas width="50" height="24"></canvas>
              </span>10%</div>
                            <div class="right"> <strong>150</strong> New Users </div>
                        </li>
                        <li>
                            <div class="left peity_bar_bad"><span><span style="display: none;">3,5,6,16,8,10,6</span>
              <canvas width="50" height="24"></canvas>
              </span>-40%</div>
                            <div class="right"> <strong>4560</strong> Orders</div>
                        </li>
                        <li>
                            <div class="left peity_line_good"><span><span style="display: none;">12,6,9,23,14,10,17</span>
              <canvas width="50" height="24"></canvas>
              </span>+60%</div>
                            <div class="right"> <strong>5672</strong> Active Users </div>
                        </li>
                        <li>
                            <div class="left peity_bar_good"><span>12,6,9,23,14,10,13</span>+30%</div>
                            <div class="right"> <strong>2560</strong> Register</div>
                        </li>
                    </ul>
                </div>
            </div>
            -->


        </div>
    </div>

@endsection