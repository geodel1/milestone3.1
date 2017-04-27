<?php $__env->startSection('content'); ?>


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
          <span>Edit Supplier</span>
       </strong>
      </div>
      <div class="panel-body">
        <div class="col-md-6">
          <form method="post" action='<?php echo e(url("sidebarmenu/{$stbe->id}/editSupplier")); ?>'>
          <?php echo e(csrf_field()); ?>

            <div class="form-group">
                <label for="supplier_name">Supplier Name</label>
                <input type="text" class="form-control" name="supplier_name" value="<?php echo $stbe->supplier_name; ?> ">
            </div>
            <div class="form-group">
                <label for="supplier_address">Supplier Address</label>
                <input type="text" class="form-control" name="supplier_address" value="<?php echo $stbe->supplier_address; ?> ">
            </div>
            <div class="form-group">
                <label for="supplier_email">Supplier Email</label>
                <input type="email" class="form-control" name ="supplier_email" value="<?php echo $stbe->supplier_email; ?> ">
            </div>
            <div class="form-group">
                <label for="contact_no">Contact No.</label>
                <input type="integer" class="form-control" name ="contact_no" value="<?php echo $stbe->contact_no; ?> ">
            </div>
            <div class="form-group">
                <label for="order_price">Order Price</label>
                <input type="float" class="form-control" name ="order_price" value="<?php echo $stbe->order_price; ?> ">
            </div>
             <div class="form-group">
                <label for="terms">Terms</label>
                <input type="integer" class="form-control" name ="terms" value="<?php echo $stbe->terms; ?> ">
            </div>
            
            <div class="form-group clearfix">
              <button type="submit" class="btn btn-primary">Edit Supplier</button>
            </div>
          </form>
        </div>

      </div>

    </div>
  </div>
</div>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>