<?php $__env->startSection('content'); ?>


<div class="row">
   <div class="col-md-12">
      <?php if(Session::has('message')): ?>
     <p class="alert alert-success text-center"><?php echo e(Session::get('message')); ?></p>
      <?php endif; ?>
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
          <form method="post" action='<?php echo e(url("sidebarmenu/sidebaritems")); ?>'>
          <?php echo e(csrf_field()); ?>

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
                <select class="form-control" name ="supplier_name">
                <?php $__currentLoopData = $suppliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $supplier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($supplier->id); ?>"><?php echo e($supplier->supplier_name); ?></option>


                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                </select>    
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
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>