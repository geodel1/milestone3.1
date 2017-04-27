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
          <span>Edit Item Account</span>
       </strong>
      </div>
      <div class="panel-body">
        <div class="col-md-6">
          <form method="post" action='<?php echo e(url("sidebarmenu/{$itbe->id}/edit")); ?>'>
          <?php echo e(csrf_field()); ?>

            <div class="form-group">
                <label for="item_name">Item Name</label>
                <input type="text" class="form-control" name="item_name" value="<?php echo $itbe->item_name; ?> ">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" name="description" value="<?php echo $itbe->description; ?> ">
            </div>
            <div class="form-group">
                <label for="user_id">User ID</label>
                <input type="text" class="form-control" name ="user_id" value="<?php echo $itbe->user_id; ?> ">
            </div>
            <div class="form-group">
                <label for="user_name">User Name</label>
                <input type="text" class="form-control" name ="user_name" value="<?php echo $itbe->user_name; ?> ">
            </div>
            <div class="form-group">
                <label for="category_name">Category Name</label>
                <input type="text" class="form-control" name ="category_name" value="<?php echo $itbe->category_name; ?> ">
            </div>
             <div class="form-group">
                <label for="UOM_name">UOM Name</label>
                <input type="text" class="form-control" name ="UOM_name" value="<?php echo $itbe->UOM_name; ?> ">
            </div>



            <div class="form-group clearfix">
              <button type="submit" class="btn btn-primary">Edit Item</button>
            </div>
          </form>
        </div>

      </div>

    </div>
  </div>
</div>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>