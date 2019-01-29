@extends('layouts.adminLayout.admin_desing')
@section('content')
    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="{{ url('/home') }}" title="ir a Inicio" class="tip-bottom"><i class="icon-home"></i> Inicio</a> <a href="{{ url('/home/quiz') }}" title="ir a Crear Cuestionarios" class="tip-bottom"><i class="icon icon-file"></i>Crear Cuestionarios</a>  </div>
            <h1>Crear Cuestionario</h1>
        </div>
        <div class="container-fluid"><hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-magic"></i> </span>
                            <h5>Crear Cuestionario</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <form class="form-horizontal" method="post" action="#" name="basic_validate" id="basic_validate" novalidate="novalidate">
                                <div class="control-group">
                                    <label class="control-label">Nombre de la prueba</label>
                                    <div class="controls">
                                        <input type="text" name="nombre_prueba" id="nombre_prueba" required="required">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Tipo de prueba</label>
                                    <div class="controls">
                                        <input type="text" name="tipo" id="tipo" required="required">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Variables que Evalua</label>
                                    <div class="controls">
                                        <input type="checkbox" name="motivacion" id="motivacion" > Motivacion <br>
                                        <input type="checkbox" name="motivacion" id="motivacion" > Comunicacion <br>
                                        <input type="checkbox" name="motivacion" id="motivacion" > Logica Matematica <br>


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
                        <div class="widget-title"> <span class="icon"> <i class="icon-plus"></i> </span>
                            <h5>Agregar Item de prueba</h5>
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
                                    <label class="control-label">Enunciado o Pregunta</label>
                                    <div class="controls">
                                        <input type="text" name="enunciado" id="" required="enunciado">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">tipo de opcion de respuesta</label>
                                    <div class="controls">
                                        <select type="text" name="prueba" id="prueba" required="required">
                                            <option value=""></option>
                                            <option value="1">siempre, casi siempre, rara vez, casi nunca, nunca</option>
                                            <option value="2">totalmente deacuerdo, deacuerdo , indeciso, en desacuerdo, totalmente en desacuerdo</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Mejor opcion de respuesta</label>
                                    <div class="controls">
                                        <input type="radio" name="" id="" > Siempre <br>
                                        <input type="radio" name="" id="" > Casi siempre <br>
                                        <input type="radio" name="" id="" > Rara vez <br>
                                        <input type="radio" name="" id="" > Casi nunca <br>
                                        <input type="radio" name="" id="" > Nunca <br>
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
        </div>
    </div>
@endsection