@extends('layouts.adminlayout')

@section('header')
<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css"
    rel="stylesheet" />
@endsection

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">

        </div>
        <div class="x_content">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Transaction</h3>
                        </div>
                        <div class="panel-body">
                            {{-- <form method="POST" action="{{url('transaction')}}">
                                {{csrf_field()}}
                                <label for="heard">Detail Waktu Pemesanan :</label>
                                <input type="date" name="waktu" class="btn btn-primary btn-sm float-right" id="waktu">
                                <input type="submit" name="Submit" class="btn btn-round btn-primary" value="GO"
                                    id="btngo" disabled="">

                            </form> --}}
                            <table class="table table-hover" id="Datatables">
                                <thead>
                                    <tr>
                                        <th>Order Date</th>
                                        <th>Total Price</th>
                                        <th>status</th>
                                        <th>ammount</th>
                                        <th>table name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($dataOrder as $do ):
                                                ?>
                                    <tr>
                                        <th>{{$do->order_date}}</th>
                                        <th>{{$do->total_price}}</th>
                                        <th>
                                            <?php 
                                                            if($do->status == 0){
                                                                echo 'Done';
                                                            }else{
                                                                echo 'On Going';
                                                            }    
                                                        ?>

                                        </th>
                                        <th>{{$do->amount}}</th>
                                        <th>{{$do->no_table}}</th>
                                    </tr>
                                    <?php  endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="x_content">

                <form method="POST" action="{{url('transaction')}}">
        {{csrf_field()}}


        <label for="heard">Awal :</label>
        <input type="date" name="tglawal" class="btn btn-primary btn-sm float-right" id="tglawal">
        <label for="heard">Akhir :</label>
        <input type="date" name="tglawal" class="btn btn-primary btn-sm float-right" id="tglakhir" disabled="">
        <input type="submit" name="Submit" class="btn btn-round btn-primary" value="GO" id="btngo" disabled="">

        </form>

        <div align="right">
            <br>
            <div class="x_content">
                <div id="container"></div>
            </div>
        </div>

    </div> --}}
</div>
</div>


@stop

@section('js')
<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js">
</script>
{{-- <script src="https://code.highcharts.com/highcharts.js"></script>
<script>
        Highcharts.chart('container', {
        title: {
            text: 'Logarithmic axis demo'
        },

        xAxis: {
            tickInterval: 1,
            type: 'logarithmic'
        },

        yAxis: {
            type: 'logarithmic',
            minorTickInterval: 0.1
        },

        tooltip: {
            headerFormat: '<b>{series.name}</b><br />',
            pointFormat: 'x = {point.x}, y = {point.y}'
        },

        series: [{
            data: {!!json_encode($datagraph)!!},
            pointStart: 1
        }]
        });
</script>
<script>
        $(document).ready(function(){
          $('#tglawal').change(function(){
            console.log($(this).val());
            $("#tglakhir").prop('disabled', false);
          })
  
        })
        $(document).ready(function(){
          $('#tglakhir').change(function(){
            console.log($(this).val());
            $("#btngo").prop('disabled', false);
          })
  
        })
      </script> --}}
<script>
    $(document).ready(function(){
        $('#waktu').change(function(){
        console.log($(this).val());
        $("#btngo").prop('disabled', false);
        })

    })
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
@endsection