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
          <span>Suppliers</span>
       </strong>
         <a href='{{url("sidebarmenu/addsupplierform")}}' class="btn btn-info pull-right">Add New Supplier</a>
      </div>
     <div class="panel-body">
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th class="text-center" style="width: 5%;">#</th>
            <th class="text-center" style="width: 20%;">Supplier Name </th>
            <th class="text-center" style="width: 30%;">Supplier Address</th>
            <th class="text-center" style="width: 20%;">Supplier Email</th>
            <th class="text-center" style="width: 20%;">Contact No.</th>
            <th class="text-center" style="width: 20%;">Order Price</th>
            <th class="text-center" style="width: 20%;">Terms</th>
            <th class="text-center" style="width: 5%;">Actions</th>
          </tr>
        </thead>

        <tbody>
        
        @foreach($suppliers as $key => $supplier)
        
          <tr>
	           <td class="text-center">{{$supplier->id}}</td>
	           <td class="text-center">{{$supplier->supplier_name}}</td>
	           <td class="text-center">{{$supplier->supplier_address}}</td>
	           <td class="text-center">{{$supplier->supplier_email}}</td>
	           <td class="text-center">{{$supplier->contact_no}}</td>
             <td class="text-center">{{$supplier->order_price}}</td>
             <td class="text-center">{{$supplier->terms}}</td>

	           
	           <td class="text-center">
	             <div class="btn-group">
	                <a href='{{url("sidebarmenu/$supplier->id/editSupplier")}}' class="btn btn-xs btn-warning" data-toggle="tooltip" title="Edit">
	                  <i class="glyphicon glyphicon-pencil"></i>
	               </a>
	                <a href='{{url("sidebarmenu/$supplier->id/deleteSupplier")}}' class="btn btn-xs btn-danger" data-toggle="tooltip" title="Remove">
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

