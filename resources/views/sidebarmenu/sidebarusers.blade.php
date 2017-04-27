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
      <div class="panel-heading clearfix">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Users</span>
       </strong>
         <a href='{{url("sidebarmenu/adduserform")}}' class="btn btn-info pull-right">Add New User</a>
      </div>
     <div class="panel-body">
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th class="text-center" style="width: 5%;">#</th>
            <th class="text-center" style="width: 20%;">Name </th>
            <th class="text-center" style="width: 30%;">Email</th>
            <th class="text-center" style="width: 20%;">User Role</th>
            <th class="text-center" style="width: 20%;">Last Login</th>
            <th class="text-center" style="width: 5%;">Actions</th>
          </tr>
        </thead>

        <tbody>
        @foreach($allusers as $key => $user)
        
        
          <tr>
	           <td class="text-center">{{$user->id}}</td>
	           <td class="text-center">{{$user->name}}</td>
	           <td class="text-center">{{$user->email}}</td>
	           <td class="text-center">{{$user->role}}</td>
	           <td class="text-center">{{$user->updated_at}}</td>

	           
	           <td class="text-center">
	             <div class="btn-group">
	                <a href='{{url("sidebarmenu/$user->id/editUser")}}' class="btn btn-xs btn-warning" data-toggle="tooltip" title="Edit">
	                  <i class="glyphicon glyphicon-pencil"></i>
	               </a>
	                <a href='{{url("sidebarmenu/$user->id/deleteUser")}}' class="btn btn-xs btn-danger" data-toggle="tooltip" title="Remove">
	                  <i class="glyphicon glyphicon-remove"></i>
	                </a>
	                </div>
	           </td>
          </tr>
       	@endforeach
       </tbody>
     </table>
     </div>
    </div>
  </div>
</div>    

@endsection

