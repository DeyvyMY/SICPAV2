@extends('layouts.template')
@section('javascript')
<script src="../../../../global_assets/js/demo_pages/charts/d3/bars/bars_basic_vertical.js"></script>
<script src="../../../../global_assets/js/demo_pages/charts/d3/bars/bars_advanced_stacked_multiple.js"></script>
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
                                <h6 class="card-title">Mostrando Dashboards</b></h6>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                        <a class="list-icons-item" data-action="reload"></a>
                                        <a class="list-icons-item" data-action="remove"></a>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="card">
                                            <div class="card-header header-elements-inline">
                                                <h5 class="card-title">Vertical bar chart</h5>
                                                <div class="header-elements">
                                                    <div class="list-icons">
                                                        <a class="list-icons-item" data-action="collapse"></a>
                                                        <a class="list-icons-item" data-action="reload"></a>
                                                        <a class="list-icons-item" data-action="remove"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">

                                                <div class="chart-container">
                                                    <div class="chart" id="d3-bar-vertical"><svg><g transform="translate(40,5)" width="334"></g></svg></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="card">
                                            <div class="card-header header-elements-inline">
                                                <h5 class="card-title">Stacked to multiples</h5>
                                                <div class="header-elements">
                                                    <div class="list-icons">
                                                        <a class="list-icons-item" data-action="collapse"></a>
                                                        <a class="list-icons-item" data-action="reload"></a>
                                                        <a class="list-icons-item" data-action="remove"></a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-body">


                                                <p class="mb-3">
                                                    </p><div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <div class="uniform-choice"><span class="checked"><input type="radio" name="stacked-multiple" class="stacked-multiple" value="multiples" checked="" data-fouc=""></span></div>
                                                            Multiples
                                                        </label>
                                                    </div>

                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <div class="uniform-choice"><span><input type="radio" name="stacked-multiple" class="stacked-multiple" value="stacked" data-fouc=""></span></div>
                                                            Stacked
                                                        </label>
                                                    </div>
                                                <p></p>

                                                <div class="chart-container">
                                                    <div class="chart" id="d3-bar-stacked-multiples"><svg><g transform="translate(60,5)" width="334"></g></svg></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /traffic sources -->
                    </div>

                </div>
                <!-- /main charts -->
                <div class="row">
                    <div class="col-xl-12">
                        <iframe width="1200" height="900" src="https://datastudio.google.com/embed/reporting/ed2b4aa7-d8c1-422d-b15f-05dce94da187/page/6zXD" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>

            </div>
            <!-- /content area -->
        </div>
        <!-- /main content -->

    </div>
</div>
@endsection
