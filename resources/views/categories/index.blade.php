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
                                    <h6 class="card-title">Categorias</h6>
                                    <div class="header-elements">
                                        <div class="list-icons">
                                            <a class="list-icons-item" data-action="collapse"></a>
                                            <a class="list-icons-item" data-action="reload"></a>
                                            <a class="list-icons-item" data-action="remove"></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">


                                  {{--  <crud :items="{{$categories}}" crud-name="UnitProducts" >

                                        <template  #form="{ on,actions }" >
                                            <form-unit-product  v-bind="{ on ,actions }"   ></form-unit-product>
                                        </template>

                                    </crud>--}}


                                    <crud :items="{{$categories}}" crud-name="categories"   >

                                        <template  #form="{ on,actions }" >

                                            <form-category  v-bind="{ on ,actions }"   ></form-category>

                                        </template>


                                       {{-- <template  slot-scope="{item,isValidForm}" >

                                            <form-category :item="item" :isValidForm="isValidForm"   ></form-category>

                                        </template>--}}

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
<script>
    import Padre from "../../assets/js/components/padre";
    export default {
        components: {Padre}
    }
</script>
<script>
    import Hijo from "../../assets/js/components/hijo";
    export default {
        components: {Hijo}
    }
</script>