@extends('layouts.adminLayout.admin_desing')
@section('content')
    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="{{ url('/home') }}" title="ir a Inicio" class="tip-bottom"><i class="icon-home"></i> Inicio</a> <a href="{{ url('/home/student_data') }}" title="ir a datos de estudiantes" class="tip-bottom"><i class="icon icon-group"></i>Datos de Estudiantes</a>  </div>
            <h1>Ingresar datos de estudiantes</h1>
        </div>
        <div class="container-fluid"><hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-hand-up"></i> </span>
                            <h5>Ingresar datos manualmente</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <form class="form-horizontal" method="post" action="#" name="basic_validate" id="basic_validate" novalidate="novalidate">
                                <div class="control-group">
                                    <label class="control-label">Documento de Identidad</label>
                                    <div class="controls">
                                        <input type="number" name="documento" id="documento" required="required">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Nombres</label>
                                    <div class="controls">
                                        <input type="text" name="nombres" id="nombres" required="required">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Apellidos</label>
                                    <div class="controls">
                                        <input type="text" name="apellidos" id="apellidos" required="required">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Sexo</label>
                                    <div class="controls">
                                        <select type="text" name="sexo" id="sexo" required="required">
                                            <option value=""></option>
                                            <option value="Masculino">Masculino</option>
                                            <option value="Femenino">Femenino</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Teléfono</label>
                                    <div class="controls">
                                        <input type="number" name="telefono" id="telefono" >
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Celular</label>
                                    <div class="controls">
                                        <input type="number" name="telefono" id="telefono" required="required">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Correo</label>
                                    <div class="controls">
                                        <input type="email" name="email" id="email" required="required">
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Código Universitario</label>
                                    <div class="controls">
                                        <input type="number" name="codigo" id="codigo" required="required">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Programa</label>
                                    <div class="controls">
                                        <select type="text" name="programa" id="programa" required="required">
                                            <option value=""></option>
                                            <option value="1">Ingeniería de Sistemas</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Semestre Actual</label>
                                    <div class="controls">
                                        <select type="number" name="semestre" id="semestre" required="required">
                                            <option value=""></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>


                                        </select>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-success"> Guardar </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-file"></i> </span>
                            <h5>Cargar archivo CSV</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <form class="form-horizontal" method="post" action="#" name="number_validate" id="number_validate" novalidate="novalidate">
                                <div class="control-group">
                                    <label class="control-label">Archivo</label>
                                    <div class="controls">
                                        <input type="file" name="archivo_csv" id="archivo_csv" />
                                    </div>
                                </div>

                                <div class="form-actions">
                                    <button type="submit" class="btn btn-success"> Cargar </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection