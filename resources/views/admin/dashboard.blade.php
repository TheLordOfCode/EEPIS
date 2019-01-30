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
<!--main-container-part-->
<div id="content">
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"> <a href="{{url('/home')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Inicio</a></div>
    </div>
    <!--End-breadcrumbs-->

    <!--Action boxes-->
    <div class="container-fluid">
        <div class="quick-actions_homepage">
            <ul class="quick-actions">
                <li class="bg_lb span2"> <a href="{{url('/home')}}"> <i class="icon-home"></i> Inicio </a> </li>
                <li class="bg_lo "> <a href="{{ url('/home/student_data') }}"> <i class="icon-group"></i> Datos de Estudiantes</a> </li>
                <li class="bg_ls"> <a href="{{ url('/home/quiz') }}"> <i class="icon-file"></i> Crear Cuestionario</a> </li>
                <li class="bg_ly span2"> <a href="{{ url('/home/upload_data') }}"> <i class="icon-upload-alt"></i> Cargar Datos</a> </li>
                <li class="bg_lg span2"> <a href="{{ url('/home/results') }}"> <i class="icon-signal"></i> Resultados</a> </li>

            <!--
                <li class="bg_lg span3"> <a href="charts.html"> <i class="icon-signal"></i> Charts</a> </li>
                <li class="bg_ly"> <a href="widgets.html"> <i class="icon-inbox"></i><span class="label label-success">101</span> Widgets </a> </li>
                <li class="bg_lo"> <a href="tables.html"> <i class="icon-th"></i> Tables</a> </li>
                <li class="bg_ls"> <a href="grid.html"> <i class="icon-fullscreen"></i> Full width</a> </li>
                <li class="bg_lo span3"> <a href="form-common.html"> <i class="icon-th-list"></i> Forms</a> </li>
                <li class="bg_ls"> <a href="buttons.html"> <i class="icon-tint"></i> Buttons</a> </li>
                <li class="bg_lb"> <a href="interface.html"> <i class="icon-pencil"></i>Elements</a> </li>
                <li class="bg_lg"> <a href="calendar.html"> <i class="icon-calendar"></i> Calendar</a> </li>
                <li class="bg_lr"> <a href="error404.html"> <i class="icon-info-sign"></i> Error</a> </li>
            -->
            </ul>
        </div>
        <!--End-Action boxes-->

        <!--Chart-box-->
        <div class="row-fluid">
            <div class="widget-box">
                <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
                    <h5>Resultados Coorte 2018-1 Ingenieria de Sistemas</h5>
                </div>
                <div class="widget-content" >
                    <div class="row-fluid">
                        <div class="span9">
                            <div id="donutchart" style=" height: 300px;"></div>

                        </div>
                        <div class="span3">
                            <ul class="site-stats">
                                <li class="bg_lh"><i class="icon-user"></i> <strong>25</strong> <small>Estudiantes Evaluados</small></li>
                                <li class="bg_lh"><i class="icon-plus"></i> <strong>10</strong> <small>Cuestionarios Creados </small></li>
                                <li class="bg_lh"><i class="icon-warning-sign"></i> <strong>6</strong> <small>Estudiantes en posible riesgo</small></li>
                                <li class="bg_lh"><i class="icon-bar-chart"></i> <strong>9</strong> <small>Variables Evaluadas</small></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End-Chart-box-->
        <hr/>
        <div class="row-fluid">

        </div>
    </div>
</div>

<!--end-main-container-part-->
    @endsection