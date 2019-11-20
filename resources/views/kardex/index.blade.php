@extends('layouts.template')

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
                                <h6 class="card-title">KARDEX</h6>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                        <a class="list-icons-item" data-action="reload"></a>
                                        <a class="list-icons-item" data-action="remove"></a>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">

                                <table id="tblCabecera">
                                    <tr style="font-family: consolas;">
                                        <th colspan="14" height="25" valign="middle">FORMATO 13.1: "REGISTRO DE INVENTARIO PERMANENTE VALORIZADO - DETALLE DEL INVENTARIO VALORIZADO"</th>
                                    </tr>
                                    <tr><td colspan="14"></td></tr>
                                    <tr style="font-family: consolas;">
                                        <td colspan="4"><b>PERÍODO</b></td>
                                        <td colspan="10">NOVIEMBRE-2019</td>
                                    </tr>
                                    <tr style="font-family: consolas;">
                                        <td colspan="4"><b>RUC:</b></td>
                                        <td colspan="10">20447609674</td>
                                    </tr>
                                    <tr style="font-family: consolas;">
                                        <td colspan="4"><b>APELLIDOS Y NOMBRES, DENOMINACIÓN O RAZÓN SOCIAL: </b></td>
                                        <td colspan="10">AGRO IMPORT EIRL</td>
                                    </tr>
                                    <tr style="font-family: consolas;">
                                        <td colspan="4"><b>ESTABLECIMIENTO (1):</b></td>
                                        <td colspan="10">(PRINCIPAL)COOP . DANIEL ALCIDES CARRION JL.B Y R AQP</td>
                                    </tr>
                                    <tr style="font-family: consolas;">
                                        <td colspan="4"><b>CÓDIGO DE LA EXISTENCIA:</b></td>
                                        <td colspan="10">123456789</td>
                                    </tr>
                                    <tr style="font-family: consolas;">
                                        <td colspan="4"><b>TIPO (TABLA 5):</b></td>
                                        <td colspan="10">(01) MERCADERIA</td>
                                    </tr>
                                    <tr style="font-family: consolas;">
                                        <td colspan="4"><b>DESCRIPCIÓN:</b></td>
                                        <td colspan="10">UREA PERLADA</td>
                                    </tr>
                                    <tr style="font-family: consolas;">
                                        
                                        <td colspan="10" >(01) KILOGRAMOS</td>
                                    
                                    </tr>
                                    <tr style="font-family: consolas;">
                                        <td colspan="4"><b>MÉTODO DE VALUACIÓN:</b></td>
                                        <td colspan="10">METODO PROMEDIO PONDERADO</td>
                                    </tr>
                                </table>

                                <table id="tblDetalle">
                                    <tr style="font-family: consolas;">
                                        <td colspan="4" height="25" valign="middle" align="center"><b>DOCUMENTO DE TRASLADO, COMPROBANTE DE PAGO</b></td>
                                        <td height="25" valign="middle" align="center"  style="background: #e4f500;"><b>TIPO DE</b></td>
                                        <td colspan="3" height="25" valign="middle" align="center"><b>ENTRADAS</b></td>
                                        <td colspan="3" height="25" valign="middle" align="center"><b>SALIDAS</b></td>
                                        <td colspan="3" height="25" valign="middle" align="center"><b>SALDO FINAL</b></td>
                                    </tr>
                                    <tr style="font-family: consolas;">
                                        <td colspan="4" height="25" valign="middle" align="center"><b>DOCUMENTO INTERNO O SIMILAR</b></td>
                                        <td height="25" valign="middle" align="center"  style="background: #e4f500; "><b>OPERACION</b></td>
                                        <td width="20" rowspan="2" height="25" valign="middle" align="center"  style="background: #4BB543; color: #FDFEFE;"><b>CANTIDAD</b></td>
                                        <td width="20" rowspan="2" height="25" valign="middle" align="center"  style="background: #4BB543; color: #FDFEFE;"><b>COSTO UNITARIO</b></td>
                                        <td width="20" rowspan="2" height="25" valign="middle" align="center"  style="background: #4BB543; color: #FDFEFE;"><b>COSTO TOTAL</b></td>
                                        <td width="20" rowspan="2" height="25" valign="middle" align="center"  style="background: #ff0000; color: #FDFEFE;"><b>CANTIDAD</b></td>
                                        <td width="20" rowspan="2" height="25" valign="middle" align="center"  style="background: #ff0000; color: #FDFEFE;"><b>COSTO UNITARIO</b></td>
                                        <td width="20" rowspan="2" height="25" valign="middle" align="center"  style="background: #ff0000; color: #FDFEFE;"><b>COSTO TOTAL</b></td>
                                        <td width="20" rowspan="2" height="25" valign="middle" align="center"  style="background: #e4f500;"><b>CANTIDAD</b></td>
                                        <td width="20" rowspan="2" height="25" valign="middle" align="center"  style="background: #e4f500;"><b>COSTO UNITARIO</b></td>
                                        <td width="20" rowspan="2" height="25" valign="middle" align="center"  style="background: #e4f500;"><b>COSTO TOTAL</b></td>
                                    </tr>

                                    <tr style="font-family: consolas;">
                                        <td width="20" height="25" valign="middle" align="center" style="background: #1B4F72; color: #FDFEFE;"><b>FECHA</b></td>
                                        <td width="20" height="25" valign="middle" align="center" style="background: #1B4F72; color: #FDFEFE;"><b>TIPO TABLA (10)</b></td>
                                        <td width="20" height="25" valign="middle" align="center" style="background: #1B4F72; color: #FDFEFE;"><b>SERIE</b></td>
                                        <td width="20" height="25" valign="middle" align="center" style="background: #1B4F72; color: #FDFEFE;"><b>NÚMERO</b></td>
                                        <td width="30" height="25" valign="middle" align="center"  style="background: #e4f500; "><b>TABLA (12)</b></td>
                                    </tr>
                                    <tr style="font-family: consolas;">
                                        <td width="20" height="20" valign="middle" align="center"></td>
                                        <td width="20" height="20" valign="middle" align="center"></td>
                                        <td width="20" height="20" valign="middle" align="center"></td>
                                        <td width="20" height="20" valign="middle" align="center"></td>
                                        <td width="30" height="20" valign="middle" align="center" style="background: #FFFF99;">SALDO INCIAL</td>
                                        <td width="20" height="20" valign="middle" align="center"></td>
                                        <td width="20" height="20" valign="middle" align="center"></td>
                                        <td width="20" height="20" valign="middle" align="center"></td>
                                        <td width="20" height="20" valign="middle" align="center"></td>
                                        <td width="20" height="20" valign="middle" align="center"></td>
                                        <td width="20" height="20" valign="middle" align="center"></td>
                                        <td width="20" height="20" valign="middle" align="right" style="background: #FFFF99;">0</td>
                                        <td width="20" height="20" valign="middle" align="right" style="background: #FFFF99;">0</td>
                                        <td width="20" height="20" valign="middle" align="right" style="background: #FFFF99;">0</td>
                                    </tr>

                                    <tr style="font-family: consolas;">
                                        <td width="20" height="20" valign="middle" align="center"></td>
                                        <td width="20" height="20" valign="middle" align="center"></td>
                                        <td width="20" height="20" valign="middle" align="center"></td>
                                        <td width="20" height="20" valign="middle" align="center"></td>
                                        <td width="30" height="20" valign="middle" align="center" style="background: #e4f500;"><b>TOTALES</b></td>
                                        <td width="20" height="20" valign="middle" align="right" style="background: #e4f500;"><b>0</b></td>
                                        <td width="20" height="20" valign="middle" align="center"></td>
                                        <td width="20" height="20" valign="middle" align="right" style="background: #e4f500;"><b>0</b></td>
                                        <td width="20" height="20" valign="middle" align="right" style="background: #e4f500;"><b>0</b></td>
                                        <td width="20" height="20" valign="middle" align="center"></td>
                                        <td width="20" height="20" valign="middle" align="right" style="background: #e4f500;"><b>0</b></td>
                                        <td width="20" height="20" valign="middle" align="center"></td>
                                        <td width="20" height="20" valign="middle" align="center"></td>
                                        <td width="20" height="20" valign="middle" align="center"></td>
                                    </tr>
                                </table>
                                
                                <table id="tblExistencia">
                                    <tr style="font-family: consolas;">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td width="20" height="20" valign="middle" align="center" style="background: #1B4F72;color: #FDFEFE;">EXISTENCIA INICIAL</td>
                                        <td width="20" height="20" valign="middle" align="center" style="background: #F8D8DD;">0</td>
                                    </tr>
                                    <tr style="font-family: consolas;">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td width="20" height="20" valign="middle" align="center" style="background: #1B4F72;color: #FDFEFE;">(+) COMPRAS</td>
                                        <td width="20" height="20" valign="middle" align="center" style="background: #F8D8DD;">0</td>
                                    </tr>
                                    <tr style="font-family: consolas;">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td width="20" height="20" valign="middle" align="center" style="background: #1B4F72;color: #FDFEFE;">(-) EXISTENCIA FINAL</td>
                                        <td width="20" height="20" valign="middle" align="center" style="background: #F8D8DD;">0</td>
                                    </tr>
                                    <tr style="font-family: consolas;">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td width="20" height="20" valign="middle" align="center" style="background: #1B4F72;color: #FDFEFE;">(-) COSTOS DE VENTAS</td>
                                        <td width="20" height="20" valign="middle" align="center" style="background: #ffc000;">0</td>
                                    </tr>
                                </table>

                            </div>

                            <div class="card-footer">
                                <a class="btn bg-success-800 legitRipple" href="/kardex/export" role="button">Exportar EXCEL</a>
                            </div>
                        </div>
                        <!-- /traffic sources -->
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
