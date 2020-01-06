@extends('layouts.menulayout')
@section('content')

<section class="ftco-section ftco-cart">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <div class="cart-list">
                    <table class="table">
                        <thead class="thead-primary">
                            <tr class="text-center">
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                                <th>Product name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $total = 0 ;foreach ($order as $d) {
   ?>
                            <tr class="text-center">
                                <td class="product-remove"></td>

                                <td class="image-prod">
                                    <div class="img"
                                        style="background-image:url({{$d->link}});">
                                    </div>
                                </td>

                                <td class="product-name">
                                <h3>{{$d->name}}</h3>
                                <p>{{$d->description}}</p>
                                </td>

                                <td class="price">${{$d->price}}</td>

                                <td class="quantity">

                                <p>{{$d->quantity}}</p>
                                </td>

                            <td class="total">${{$d->quantity * $d->price}}</td>
                            <?php $total +=  $d->quantity * $d->price ?>
                            </tr><!-- END TR-->
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
                <div class="cart-total mb-3">
                    <h3>Cart Totals</h3>
                    <p class="d-flex total-price">
                        <span>Total</span>
                    <span>${{$total}}</span>
                    </p>
                </div>
            {{-- <p><a href="checkout/{{$id}}/{{$order_id}}" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p> --}}
            </div>
        </div>
    </div>
</section>

@endsection
