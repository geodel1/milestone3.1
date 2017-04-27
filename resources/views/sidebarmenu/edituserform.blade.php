@extends('layouts.admin_menu')

@section('content')


<div class="row">
   <div class="col-md-12">
       @if(Session::has('message'))
     <p class="alert alert-success text-center">{{Session::get('message')}}</p>
      @endif
   </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Edit User Account</span>
       </strong>
      </div>
      <div class="panel-body">
        <div class="col-md-6">
          <form method="post" action='{{url("sidebarmenu/{$utbe->id}/editUser")}}'>
          {{csrf_field()}}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" value="<?php echo $utbe->name; ?> ">
            </div>
            <div class="form-group">
                <label for="username">Email</label>
                <input type="text" class="form-control" name="email" value="<?php echo $utbe->email; ?> " >
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name ="password"  value="<?php echo $utbe->password; ?> ">
            </div>
            <div class="form-group">
              <label for="level">User Role</label>
                <select class="form-control" name="role"  value="<?php echo $utbe->role; ?> ">
                  
                   <option>regular</option>
                   <option>admin</option>

                
                </select>
            </div>
            <div class="form-group clearfix">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
          </form>
        </div>

      </div>

    </div>
  </div>
</div>
  @endsection