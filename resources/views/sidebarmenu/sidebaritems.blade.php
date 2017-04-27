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
          <span>Items</span>
       </strong>
         <a href='{{url("sidebarmenu/additemform")}}' class="btn btn-info pull-right">Add New Item</a>
      </div>
     <div class="panel-body">
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th class="text-center" style="width: 5%;">#</th>
            <th class="text-center" style="width: 20%;">Item name </th>
            <th class="text-center" style="width: 20%;">Description</th>
            <th class="text-center" style="width: 5%;">User Id</th>
            <th class="text-center" style="width: 20%;">User Name</th>
            <th class="text-center" style="width: 5%;">Category Name</th>
            <th class="text-center" style="width: 10%;">U.O.M.</th>
            <th class="text-center" style="width: 10%;">Supplier</th>
            <th class="text-center" style="width: 5%;">Actions</th>

          </tr>
        </thead>

        <tbody>
      
        @foreach($items as $key => $item )
        
          <tr>
             <td class="text-center">{{$item->id}}</td>
             <td class="text-center">{{$item->item_name}}</td>
             <td class="text-center">{{$item->description}}</td>
             <td class="text-center">{{$item->user_id}}</td>
             <td class="text-center">{{$item->user_name}}</td>
             <td class="text-center">{{$item->category_name}}</td>
             <td class="text-center">{{$item->UOM_name}}</td>
             <td class="text-center">
               @foreach($item->suppliers as $supplier)
                  {{$supplier->supplier_name}} 
               @endforeach
             </td>
             <td class="text-center">
               <div class="btn-group">
                  <a href='{{url("sidebarmenu/$item->id/editItem")}}' class="btn btn-xs btn-warning" data-toggle="tooltip" title="Edit">
                    <i class="glyphicon glyphicon-pencil"></i>
                 </a>
                  <a href='{{url("sidebarmenu/$item->id/deleteItem")}}' class="btn btn-xs btn-danger" data-toggle="tooltip" title="Remove">
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
