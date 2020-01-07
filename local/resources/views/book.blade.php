@extends('layouts.guestlayout')
@section('content')

<!--================ Start banner Area =================-->
<section class="banner-area relative">
    <div class="container">
        <div class="row height align-items-center justify-content-center">
            <div class="banner-content col-lg-5">
                <h1>Book A Table</h1>
                <hr>
                <div class="breadcrmb">
                    <p>
                        {{-- <a href="index.html">home</a>
                        <span class="lnr lnr-arrow-right"></span>
                        <a href="elements.html">elements</a> --}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End banner Area =================-->

<!-- Start Sample Area -->
<section class="sample-text-area">
    <div class="container">
        <h3 class="text-heading">Please Pick Your Table</h3>

        <table>
            <tr>
                <?php foreach($table as $t){?>
                <td><a href="table/{{$t->id}}" class="genric-btn <?php if($t->status==1){echo "danger";} else{ echo "info";} ?> e-large">Table {{$t->no_table}}</a>                </td>
            <?php }?>
            </tr>
        </table>
    </div>
</section>
<!-- End Sample Area -->

@endsection
