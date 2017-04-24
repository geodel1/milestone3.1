@extends('layouts.admin_menu')

@section('content')


<div class="row">
   <div class="col-md-12">
     
   </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Add New Items</span>
       </strong>
      </div>
      <div class="panel-body">
        <div class="col-md-6">
          <form method="post" action='{{url("sidebarmenu/sidebaritems")}}'>
          {{csrf_field()}}
            <div class="form-group">
                <label for="name">Item Name</label>
                <input type="text" class="form-control" name="item_name" placeholder="Item Name">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" name="description" placeholder="Description">
            </div>
           
            
            <div class="form-group">
              <label for="category_name">Category Name</label>
                <input type="text" class="form-control" name ="category_name"  placeholder="category">      
            </div>
            <div class="form-group">
              <label for="UOM">Unit of Measure </label>
                <input type="text" class="form-control" name ="UOM_name"  placeholder="Unit of measure">      
            </div>
            <div class="form-group">
              <label for="supplier">Supplier </label>
                <input type="" class="form-control" name ="supplier_name"  placeholder="Supplier">      
            </div>
            <div class="form-group clearfix">
              <button type="submit" class="btn btn-primary">Add Item</button>
            </div>
          </form>
        </div>

      </div>

    </div>
  </div>
</div>
  @endsection