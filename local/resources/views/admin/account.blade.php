@extends('layouts.adminlayout')

@section('header')
<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>    
@endsection

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Manage Account</h3>
                        </div>
                        <div class="panel-body">
                            <div class="col-6">
                                <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal"
                                    data-target="#exampleModal">Add</button>
                            </div>
                            <table class="table table-hover" id="Datatables">
                                <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Role</th>
                                        <th>#</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($dataUser as $dt ):
                                        ?>
                                    <tr>
                                        <th><a href="#" class="enamadepan" data-type="text" data-pk="{{$dt->id}}" data-url="
                                                {{url('api/account/'.$dt->id.'/editnamadepan')}}
                                            " data-title="Masukan Nilai">{{ $dt->first_name }}</a></th>
                                        </th>
                                        <th><a href="#" class="enamadepan" data-type="text" data-pk="{{$dt->id}}" data-url="
                                                {{url('api/account/'.$dt->id.'/editnamabelakang')}}
                                            " data-title="Masukan Nilai">{{ $dt->last_name }}</a></th>
                                        <th><a href="#" class="enamadepan" data-type="text" data-pk="{{$dt->id}}" data-url="
                                                {{url('api/account/'.$dt->id.'/editusername')}}
                                            " data-title="Masukan Nilai">{{ $dt->username }}</a></th>
                                        <th><a href="#" class="enamadepan" data-type="text" data-pk="{{$dt->id}}" data-url="
                                                {{url('api/account/'.$dt->id.'/editpassword')}}
                                            " data-title="Masukan Nilai">{{ $dt->password }}</a></th>
                                        <th><a href="#" class="enamadepan" data-type="text" data-pk="{{$dt->id}}" data-url="
                                                {{url('api/account/'.$dt->id.'/editemail')}}
                                            " data-title="Masukan Nilai">{{ $dt->email }}</a></th>
                                        <th><a href="#" class="enamadepan" data-type="text" data-pk="{{$dt->id}}" data-url="
                                                {{url('api/account/'.$dt->id.'/editphone')}}
                                            " data-title="Masukan Nilai">{{ $dt->phone_number }}</a></th>
                                    <th><a href="#" class="erole" data-type="text" data-pk="{{$dt->id}}" value="{{ $dt->role_id }}"  data-url=" {{url('api/account/'.$dt->id.'/editrole')}}" data-title="Masukan Nilai">{{ $dt->name }}</a></th>
                                        <th>
                                            <a href="#" data-href="{{url('account/'.$dt->id.'/delete')}}" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#confirm-delete">Delete</a>
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

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title" id="exampleModalLabel">Input Account</h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{url('account/insert')}}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="FirstName">First Name</label>
                        <input type="text" class="form-control" id="FirstName" name="FirstName" placeholder="FirstName" required>
                    </div>
                    <div class="form-group">
                        <label for="LastName">Last Name</label>
                        <input type="text" class="form-control" id="LastName" name="LastName" placeholder="LastName" required>
                    </div>
                    <div class="form-group">
                        <label for="Username">Username</label>
                        <input type="text" class="form-control" id="Username" name="Username" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <label for="Password">Password</label>
                        <input type="password" class="form-control" id="Password" name="Password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="email" class="form-control" id="Email" name="Email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="Phone">Phone</label>
                        <input type="number" class="form-control" id="Phone" name="Phone" placeholder="Phone">
                    </div>
                    <div class="form-group">
                        <label for="Role">Role</label>
                        <select name="Role" class="btn btn-primary">
                                <option value="">-Select Role-</option>
                                <?php
                                     foreach ($dataRole as $dr ):
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
<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    Confirmation
                </div>
                <div class="modal-body">
                    Are you sure want to delete this account?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger btn-ok">Delete</a>
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')
<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>  
<script>
    $(document).ready(function() {
        $('.enamadepan').editable();
    });
    $(document).ready(function() {
        $('.enamabelakang').editable();
    });
    $(document).ready(function() {
        $('.eusername').editable();
    });
    $(document).ready(function() {
        $('.epassword').editable();
    });
    $(document).ready(function() {
        $('.eemail').editable();
    });
    $(document).ready(function() {
        $('.ephone').editable();
    });
    $(document).ready(function() {
        $('.erole').editable();
    });
    $('#confirm-delete').on('show.bs.modal', function(e) {
    $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
});
</script>
<script>
   $(document).ready( function () {
    $('#Datatables').DataTable();
} );
</script>
@endsection



