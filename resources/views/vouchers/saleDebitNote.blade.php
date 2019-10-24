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
                                    <h6 class="card-title">Ventas: Notas de Débito</h6>
                                    <div class="header-elements">
                                        <div class="list-icons">
                                            <a class="list-icons-item" data-action="collapse"></a>
                                            <a class="list-icons-item" data-action="reload"></a>
                                            <a class="list-icons-item" data-action="remove"></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">


                                    <crud :items="{{$vouchers}}" crud-name="vouchers">

                                        <template #form="{ on,actions }">

                                            <form-voucher-buy
                                                    v-bind="{ on ,actions }"
                                                    :vendors="{{$vendors}}"
                                                    :types="{{$types}}"
                                                    :entities="{{$entities}}"

                                            ></form-voucher-buy>
                                        </template>

                                    </crud>


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