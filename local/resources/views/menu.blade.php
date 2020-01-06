@extends('layouts.menulayout')

@section('content')

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 mb-5 text-center">
                <ul class="product-category">

                    <li><a href="{{asset('table/'.$id)}}"
                            class="{{request()->is('table/'.$id) ? 'active' : ''}}">All</a></li>
                    <?php foreach ($category as $cat) {
                     ?>
                    <li><a href="{{ asset('table/'.$id.'/filter/'.$cat->id)}}"
                            class="{{request()->is('table/'.$id.'/filter/'.$cat->id) ? 'active' : ''}}">{{$cat->name}}</a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <div class="row">
            <?php foreach ($food as $f) {
              ?>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="product">
                    <a href="#" class="img-prod"><img class="img-fluid" src="{{$f->link}}" alt="Colorlib Template">
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a href="#">{{$f->name}}</a></h3>
                        <div class="d-flex">
                            <div class="pricing">
                                <p class="price"><span class="price-sale">${{$f->price}}</span></p>
                            </div>
                        </div>
                        <div class="bottom-area d-flex px-3">
                            <div class="m-auto d-flex">
                                <a href="#"
                                    class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                    <span><i class="ion-ios-menu"></i></span>
                                </a>
                                <a href="{{asset('table/'.$id.'/buy/'.$f->id)}} "
                                    class="buy-now d-flex justify-content-center align-items-center mx-1">
                                    <span><i class="ion-ios-cart"></i></span>
                                </a>
                                <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                    <span><i class="ion-ios-heart"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        } ?>
        </div>
        <div class="row mt-5">
            <div class="col text-center">
                <div class="block-27">
                    <ul>
                        <li><a href="#">&lt;</a></li>
                        <li class="active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&gt;</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <?php if ($status == 1) {
        ?>
        <a href="updateOrder/{{$id}}">
            <button class="btn btn-primary">Update</button>
        </a>
        <a href="{{asset('/orderlist/'.$id)}}"> <button type="button" class="btn btn-primary">Order List</button></a>
        <?php
    } else{ ?>
        <form method="POST">
            {{ csrf_field() }}
            <button type="submit" class="btn btn-primary">Order</button>
        </form>
        <?php } ?>

    </div>
</section>

@endsection
