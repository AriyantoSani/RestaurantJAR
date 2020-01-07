@extends('layouts.adminlayout')

@section('header')
<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css"
    rel="stylesheet" />
@endsection

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid" width="100%">
            <div class="row" width="100%">
                <div class="col-md-12" width="100%">
                    <div class="panel" width="100%">
                        <div class="panel-heading" width="100%">
                            <h3 class="panel-title">Manage menuMaster</h3>
                        </div>
                        <div class="panel-body">
                            <div class="col-6">
                                <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal"
                                    data-target="#exampleModal2">Add</button>
                            </div>
                            <table class="table table-hover" width="100%">
                                <thead>
                                    <tr>
                                        <th>Menu Name</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                        <th>Link</th>
                                        <th>Description</th>
                                        <th>Food Category</th>
                                        <th>#</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($dataMenu as $dt ):
                                        ?>
                                    <tr>
                                        <th><a href="#" class="ename" data-type="text" data-pk="{{$dt->id}}" data-url="
                                                {{url('api/menuMaster/'.$dt->id.'/editnamamenu')}}
                                            " data-title="Masukan Nilai">{{ $dt->name }}</a></th>
                                        </th>
                                        <th><a href="#" class="eprice" data-type="text" data-pk="{{$dt->id}}" data-url="
                                                {{url('api/menuMaster/'.$dt->id.'/editprice')}}
                                            " data-title="Masukan Nilai">{{ $dt->price }}</a></th>
                                        <th><a href="#" class="estatus" data-type="text" data-pk="{{$dt->id}}" data-url="
                                                {{url('api/menuMaster/'.$dt->id.'/editstatus')}}
                                            " data-title="Masukan Nilai">{{ $dt->status }}</a></th>
                                        <th><a href="#" class="elink" data-type="text" data-pk="{{$dt->id}}" data-url="
                                                {{url('api/menuMaster/'.$dt->id.'/editlink')}}
                                            " data-title="Masukan Nilai">{{ $dt->link }}</a></th>
                                        <th><a href="#" class="edesc" data-type="text" data-pk="{{$dt->id}}" data-url="
                                                {{url('api/menuMaster/'.$dt->id.'/editdescription')}}
                                            " data-title="Masukan Nilai">{{ $dt->description }}</a></th>
                                        <th><a href="#" class="efood" data-type="text" data-pk="{{$dt->id}}" data-url="
                                                {{url('api/menuMaster/'.$dt->id.'/editFoodCat')}}
                                            " data-title="Masukan Nilai">{{ $dt->food_category_id }}</a></th>
                                        <th>

                                            <a href="{{url('menuMaster/'.$dt->id.'/delete')}}"
                                                class="btn btn-danger btn-sm">Delete</a>
                                        </th>
                                    </tr>
                                    <?php  endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title" id="exampleModalLabel">Input Menu </h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{url('menuMaster/insert')}}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="Name">Name</label>
                        <input type="text" class="form-control" id="Name" name="Name" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <label for="Price">Price</label>
                        <input type="number" class="form-control" id="Price" name="Price" placeholder="Price" required>
                    </div>
                    <div class="form-group">
                        <label for="Status">Status</label>
                        <input type="number" class="form-control" id="Status" name="Status" placeholder="Status"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="Link">Link</label>
                        <input type="text" class="form-control" id="Link" name="Link" placeholder="Link">
                    </div>
                    <div class="form-group">
                        <label for="Description">Description</label>
                        <input type="text" class="form-control" id="Description" name="Description"
                            placeholder="Description">
                    </div>
                    <div class="form-group">
                        <label for="Food_Category">Category</label>
                        <select name="Food_Category" class="btn btn-primary">
                            <option value="">-Select Category-</option>
                            <?php
                            foreach ($dataCatFood as $dr ):
                            ?>
                            <option value="{{ $dr->id }}">
                                {{ $dr->name }}
                            </option>
                            <?php
                            endforeach
                            ?>
                        </select>
                    </div>
                    <button type="submit" name="save" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>


@stop

@section('js')
<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js">
</script>
<script>
    $(document).ready(function() {
        $('.ename').editable();
    });
    $(document).ready(function() {
        $('.eprice').editable();
    });
    $(document).ready(function() {
        $('.estatus').editable();
    });
    $(document).ready(function() {
        $('.efood').editable();
    });
    $(document).ready(function() {
        $('.elink').editable();
    });
    $(document).ready(function() {
        $('.edesc').editable();
    });
</script>
@endsection