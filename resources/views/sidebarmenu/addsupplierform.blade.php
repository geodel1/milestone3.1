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
          <span>Add New Supplier</span>
       </strong>
      </div>
      <div class="panel-body">
        <div class="col-md-6">
          <form method="post" action='{{url("sidebarmenu/sidebarsuppliers")}}'>
          {{csrf_field()}}
            <div class="form-group">
                <label for="name">Supplier Name</label>
                <input type="text" class="form-control" name="supplier_name" placeholder="Supplier Name">
            </div>
            <div class="form-group">
                <label for="supplier_address">Supplier Address</label>
                <input type="text" class="form-control" name="supplier_address" placeholder="Supplier Address">
            </div>
           
            
            <div class="form-group">
              <label for="supplier_email">Supplier Email</label>
                <input type="email" class="form-control" name ="supplier_email"  placeholder="Supplier Email">      
            </div>
            <div class="form-group">
              <label for="contact">Contact No. </label>
                <input type="text" class="form-control" name ="contact_no"  placeholder="Contact No.">      
            </div>
            <div class="form-group">
              <label for="order price">Order Price </label>
                <input type="float"  class="form-control" name ="order_price"  placeholder="Order Price">      
            </div>
            <div class="form-group">
              <label for="terms">Terms </label>
                <input type="number" class="form-control" name ="terms"  placeholder="Terms">      
            </div>
            <div class="form-group clearfix">
              <button type="submit" class="btn btn-primary">Add Supplier</button>
            </div>
          </form>
        </div>

      </div>

    </div>
  </div>
</div>
  @endsection