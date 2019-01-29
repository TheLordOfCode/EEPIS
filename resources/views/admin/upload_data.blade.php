@extends('layouts.adminLayout.admin_desing')
@section('content')
    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="{{ url('/home') }}" title="ir a Inicio" class="tip-bottom"><i class="icon-home"></i> Inicio</a> <a href="{{ url('/home/results') }}" title="ir a Cargar Datos" class="tip-bottom"><i class="icon icon-upload-alt"></i> Cargar Datos</a>  </div>
            <h1>Cargar datos de respuestas en cuestionarios</h1>
        </div>
        <div class="container-fluid"><hr>

            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-file"></i> </span>
                            <h5>Cargar archivo CSV</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <form class="form-horizontal" method="post" action="#" name="number_validate" id="number_validate" novalidate="novalidate">
                                <div class="control-group">
                                    <label class="control-label">Seleccionar prueba</label>
                                    <div class="controls">
                                        <select type="text" name="prueba" id="prueba" required="required">
                                            <option value=""></option>
                                            <option value="1">Prueba de motivación</option>
                                        </select>
                                    </div>
                                </div>
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