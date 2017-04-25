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
          <span>Category</span>
       </strong>
         <a href='{{url("sidebarmenu/addcategoryform")}}' class="btn btn-info pull-right">Add New Category</a>
      </div>
     <div class="panel-body">
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th class="text-center" style="width: 5%;">#</th>
            <th class="text-center" style="width: 20%;">category name </th>
            <th class="text-center" style="width: 5%;">Actions</th>

          </tr>
        </thead>

        <tbody>
      
        @foreach($categories as $key => $category )
        
          <tr>
             <td class="text-center">{{$category->id}}</td>
             <td class="text-center">{{$category->categories_name}}</td>
             
             <td class="text-center">
               <div class="btn-group">
                  <a href='{{url("sidebarmenu/$category->id/editCategories")}}' class="btn btn-xs btn-warning" data-toggle="tooltip" title="Edit">
                    <i class="glyphicon glyphicon-pencil"></i>
                 </a>
                  <a href='{{url("sidebarmenu/$category->id/deleteCategories")}}' class="btn btn-xs btn-danger" data-toggle="tooltip" title="Remove">
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
