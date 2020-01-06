@extends('layouts.userlayout')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="content">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-12">

                                            <div class="card">

                                                <div class="card-body table-responsive p-0">
                                                    <table class="table table-striped table-valign-middle">
                                                        <thead>
                                                            <tr>
                                                                <th>Table</th>
                                                                <th>Food Name</th>
                                                                <th>Price</th>
                                                                <th>Quantity</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php foreach ($order as $o) {
                                            ?>
                                                            <tr>
                                                                <td>
                                                                    Table {{$o->no_table}}
                                                                </td>
                                                                <td>
                                                                   {{$o->name}}
                                                                </td>
                                                                <td>{{$o->quantity * $o->price}}</td>
                                                                <td>
                                                                    {{$o->quantity}}
                                                                </td>

                                                            </tr>
                                                            <?php }?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <!-- /.card -->
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </div>
                            <div class="col-12">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Foods Gallery
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div>
                                            <div class="filter-container p-0 row">

                                                <?php foreach ($food as $f) {
  ?>

                                                <div class="filtr-item col-sm-2" data-sort="white sample"
                                                    <?php if($f->status == 0){echo "style='background:red;'";}  ?>>
                                                    <a data-toggle="modal" data-target="#Modal{{$f->id}}"
                                                        data-target="Modal{{$f->id}}">
                                                        <img src="{{$f->link}}" class="img-fluid mb-2"
                                                            alt="white sample" />
                                                    </a>
                                                </div>
                                                <!-- Modal -->
                                                <div class="modal fade" id="Modal{{$f->id}}" role="dialog">
                                                    <div class="modal-dialog">

                                                        <!-- Modal content-->
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal">&times;</button>

                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Are You Wanna Change This Item Status?</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default"
                                                                    data-dismiss="modal">Close</button>
                                                                <a href="changeStock/{{$f->id}}">
                                                                    <button type="button"
                                                                        class="btn btn-default">Yes</button></a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <?php }?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div><!-- /.container-fluid -->
                </section>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

@endsection
