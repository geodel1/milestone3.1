@extends('layouts.admin_menu')

@section('content')

	
<div class="row">
   <div class="col-md-12">
  
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
        
        
        
          <tr>
	           <td class="text-center"></td>
	           <td class="text-center"></td>
	           <td class="text-center"></td>
	           <td class="text-center"></td>
	           <td class="text-center"></td>
             <td class="text-center"></td>
             <td class="text-center"></td>

	           
	           <td class="text-center">
	             <div class="btn-group">
	                <a href='' class="btn btn-xs btn-warning" data-toggle="tooltip" title="Edit">
	                  <i class="glyphicon glyphicon-pencil"></i>
	               </a>
	                <a href='' class="btn btn-xs btn-danger" data-toggle="tooltip" title="Remove">
	                  <i class="glyphicon glyphicon-remove"></i>
	                </a>
	                </div>
	           </td>
          </tr>
       
       </tbody>
     </table>
     </div>
    </div>
  </div>
</div>    

@endsection

