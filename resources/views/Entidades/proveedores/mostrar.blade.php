@extends('layouts.template')
@section('javascript')

@endsection
@section('content')
<div class="container">
    <div class="page-header">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">

            </div>

        </div>
    </div>
    <div class="page-content pt-0">

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Content area -->
            <div class="content">

                <!-- Main charts -->
                <div class="row">
                    <div class="col-xl-12">

                        <!-- Traffic sources -->
                        <div class="card">
                            <div class="card-header header-elements-inline bg-success-800">
                                <h6 class="card-title">Proveedores</h6>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                        <a class="list-icons-item" data-action="reload"></a>
                                        <a class="list-icons-item" data-action="remove"></a>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <button type="button" class="btn bg-success-800 legitRipple" data-toggle="modal" data-target="#modal_theme_success">Agregar <i class="icon-play3 ml-2"></i></button>
                                <div class="table-responsive">
                                        <table class="table table-xs">
                                            <thead>
                                            <tr>
                                                <th>RUC</th>
                                                <th>RAZON SOCIAL</th>
                                                <th>Correo</th>
                                                <th>Dirección</th>
                                                <th>Ciudad</th>
                                                <th>Teléfono</th>
                                                <th>Contacto</th>
                                                <th>Teléfono Contacto</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($entidades as $entidad)
                                                <tr>
                                                    <td>{{$entidad->ent_ruc}}</td>
                                                    <td>{{$entidad->ent_rz}}</td>
                                                    <td>{{$entidad->ent_correo}}</td>
                                                    <td>{{$entidad->ent_dir}}</td>
                                                    <td>{{$entidad->ent_ciu}}</td>
                                                    <td>{{$entidad->ent_telf}}</td>
                                                    <td>{{$entidad->ent_cont}}</td>
                                                    <td>{{$entidad->ent_ctel}}</td>
                                                    <td>
                                                        <div class="list-icons">
                                                            <a href="#" class="list-icons-item text-primary-600"><i class="icon-pencil7"></i></a>
                                                            <a href="/proveedores/delete?ent_id={{$entidad->ent_id}}" class="list-icons-item text-danger-600"><i class="icon-trash"></i></a>
                                                            <a href="#" class="list-icons-item text-teal-600"><i class="icon-cog6"></i></a>
                                                        </div>
                                                    </td>

                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                </div>
                            </div>
                        </div>
                        <!-- /traffic sources -->
                    </div>
                </div>
                <div id="modal_theme_success" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header bg-success-800">
                                <h6 class="modal-title">AGREGAR PROVEEDOR </h6>
                                <button type="button" class="close" data-dismiss="modal">×</button>
                            </div>
                            <form action="/proveedores/create" method="GET">
                                <div class="modal-body">

                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <label>RUC</label>
                                                    <input type="text" name="ent_ruc" class="form-control" placeholder="Ingrese RUC">
                                                </div>
                                                <div class="col-xl-6">
                                                    <label>Razon Social</label>
                                                    <input type="text" name="ent_rz" class="form-control" placeholder="Ingrese Razon Social">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <label>Correo Electrónico</label>
                                                    <input type="email" name="ent_correo" class="form-control" id="email" placeholder="Ingrese E-mail">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <label>Dirección</label>
                                                    <input type="text" name="ent_dir" class="form-control" placeholder="Ingrese Dirección">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <label>Ciudad</label>
                                                    <input type="text" name="ent_ciu" class="form-control"  placeholder="Ingrese Ciudad">
                                                </div>
                                                <div class="col-xl-6">
                                                    <label>Teléfono</label>
                                                    <input type="text" name="ent_tel" class="form-control" placeholder="INgrese Teléfono">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <label>Nombre de Contacto</label>
                                                    <input type="text" name="ent_cont" class="form-control" placeholder="Ingrese Nombre de contacto">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <label>Teléfono de Contacto</label>
                                                    <input type="text" name="ent_ctel" class="form-control" placeholder="Ingrese Teléfono de contacto">
                                                </div>
                                            </div>
                                        </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-link legitRipple" data-dismiss="modal">Cancelar<div class="legitRipple-ripple" style="left: 44.4468%; top: 71.0526%; transform: translate3d(-50%, -50%, 0px); width: 225.28%; opacity: 0;"></div><div class="legitRipple-ripple" style="left: 52.6327%; top: 39.4737%; transform: translate3d(-50%, -50%, 0px); width: 225.28%; opacity: 0;"></div><div class="legitRipple-ripple" style="left: 71.7331%; top: 52.6316%; transform: translate3d(-50%, -50%, 0px); width: 225.28%; opacity: 0;"></div><div class="legitRipple-ripple" style="left: 78.5547%; top: 21.0526%; transform: translate3d(-50%, -50%, 0px); width: 225.28%; opacity: 0;"></div><div class="legitRipple-ripple" style="left: 50.5862%; top: 68.4211%; transform: translate3d(-50%, -50%, 0px); width: 225.28%; opacity: 0;"></div><div class="legitRipple-ripple" style="left: 57.4078%; top: 28.9474%; transform: translate3d(-50%, -50%, 0px); width: 225.28%; opacity: 0;"></div><div class="legitRipple-ripple" style="left: 38.3074%; top: 52.6316%; transform: translate3d(-50%, -50%, 0px); width: 225.28%; opacity: 0;"></div></button>
                                    <button type="submit" class="btn bg-success legitRipple">Guardar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /main charts -->
            </div>
            <!-- /content area -->
        </div>
        <!-- /main content -->

    </div>
</div>
@endsection
