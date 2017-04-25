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
          <span>Add New Categories</span>
       </strong>
      </div>
      <div class="panel-body">
        <div class="col-md-6">
          <form method="post" action='<?php echo e(url("sidebarmenu/sidebarcategories")); ?>'>
          <?php echo e(csrf_field()); ?>

            <div class="form-group">
                <label for="name">Category Name</label>
                <input type="text" class="form-control" name="categories_name" placeholder="Category Name">
            </div>
      
          
            <div class="form-group clearfix">
              <button type="submit" class="btn btn-primary">Add Category</button>
            </div>
          </form>
        </div>

      </div>

    </div>
  </div>
</div>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>