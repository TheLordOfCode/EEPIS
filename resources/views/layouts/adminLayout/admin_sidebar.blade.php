<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Inicio</a>
    <ul>
        <li class="active"><a href="{{url('/home')}}"><i class="icon icon-home"></i> <span>Inicio</span></a> </li>

        <li> <a href="{{ url('/home/student_data') }}"><i class="icon icon-group"></i> <span>Datos de Estudiantes</span></a> </li>
        <li> <a href="{{ url('/home/quiz') }}"><i class="icon icon-file"></i> <span>Crear Cuestionario</span></a> </li>
        <li> <a href="{{ url('/home/upload_data') }}"><i class="icon icon-upload-alt"></i> <span>Cargar Datos</span></a> </li>
        <li> <a href="{{ url('/home/results') }}"><i class="icon icon-signal"></i> <span>Resultados</span></a> </li>
    </ul>
</div>
<!--sidebar-menu-->