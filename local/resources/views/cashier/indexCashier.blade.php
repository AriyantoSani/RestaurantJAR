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
                            <h3 class="card-title">Belum Bayar</h3>
                        </div>
                        {{-- <div class="card-body table-responsive p-0"> --}}
                        <table id="Datatables" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Table</th>
                                    <th>Total Price</th>
                                    <th>Amount</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($order as $o) {
                                            ?>
                                <tr>
                                    <td>
                                        Table {{$o->no_table}}
                                    </td>
                                    <td>{{$o->total_price}}</td>
                                    <td>
                                        {{$o->amount}}
                                    </td>
                                    <td>
                                        <form method="POST">
                                            {{ csrf_field() }}
                                            <button class="btn btn-default ">Checkout</button>
                                            <input type="hidden" name="order_id" value="{{$o->id}}">
                                            <select name="pembayaran">
                                                <option value="">--Select--</option>
                                                <?php foreach($payment  as $p){ ?>
                                                <option value="{{$p->id}}">{{$p->name}}</option>
                                                <?php }?>
                                            </select>
                                        </form>

                                        <a href="detailCashier/{{$o->id}}">
                                            <button class="btn btn-default ">Detail</button>
                                        </a>
                                    </td>



                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                        {{-- </div> --}}
                    </div>
                    <!-- /.card -->
                    <div class="card">
                        <div class="card-header border-0">
                            <h3 class="card-title">Sudah Bayar</h3>

                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-striped " id="Datatables2">
                                <thead>
                                    <tr>
                                        <th>Time</th>
                                        <th>Table</th>
                                        <th>Amount</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($orderb as $o2) {
                                            ?>
                                    <tr>
                                        <td>
                                            {{ date("l, d-m-Y h:i:sa", strtotime($o2->date))                                        }}

                                        </td>
                                        <td>{{$o2->no_table}}</td>
                                        <td>
                                            {{$o2->amount}}
                                        </td>

                                        <td>
                                            <a href="printCashier/{{$o2->id}}">
                                                <button class="btn  btn-warning">Print</button>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
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
    $('#Datatables').DataTable();
} );

$(document).ready( function () {
    $('#Datatables2').DataTable();
} );
</script>
@endsection
