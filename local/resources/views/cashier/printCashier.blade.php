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

                    <div class="card">
                        <div class="card-header border-0">
                            <h3 class="card-title">Print Makanan</h3>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-striped table-valign-middle" id="Datatables">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Status</th>
                                        <th>A</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($order as $o) {
                                            ?>
                                    <tr>
                                        <td>
                                            {{$o->name}}
                                        </td>
                                        <td>{{$o->price}}</td>
                                        <td>{{$o->quantity}}</td>
                                        <td>
                                            <?php if($o->status == 0) {
                                                echo "Belum Diantar";
                                            }
                                            else if($o->status == 1){
                                                echo "Sudah Diantar";
                                            }?>
                                        </td>
                                        <td>
                                            {{-- <button onclick="myFunction()">Print this page</button> --}}
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

@section('js')
<script>
    $(document).ready( function () {
    $('#Datatables').DataTable({
        dom: 'Bfrtip',
        // buttons: [
        //  'pdf',   'print'
        // ]
        buttons: [
             'print'
        ]
    });
} );

</script>
{{-- <script src="
https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js
"></script>
<script src="
https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
<script src="
https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js
"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js
"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js
"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js
"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js
"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js
"></script> --}}
@endsection
