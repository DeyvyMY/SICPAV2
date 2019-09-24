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

                    <item></item>
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
                                    <div class="table-responsive">
                                        <table class="table table-xs">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nombre</th>
                                                <th>Descripcion</th>
                                                <th>Operaciones</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Eugene</td>
                                                <td>Kopyov</td>
                                                <td>@Kopyov</td>
                                            </tr>
                                            @foreach($categories as $category)
                                                <tr>
                                                    <td>{{$category->id}}</td>
                                                    <td>{{$category->name}}</td>
                                                    <td>{{$category->description}}</td>
                                                    <td>
                                                        <div class="list-icons">
                                                            <a href="#" class="list-icons-item text-primary-600"><i class="icon-pencil7"></i></a>
                                                            <a href="#" class="list-icons-item text-danger-600"><i class="icon-trash"></i></a>
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
                    <!-- /main charts -->
                </div>
                <!-- /content area -->
            </div>
            <!-- /main content -->

        </div>
    </div>
@endsection
