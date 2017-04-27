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
          <span>Add New User</span>
       </strong>
      </div>
      <div class="panel-body">
        <div class="col-md-6">
          <form method="post" action='<?php echo e(url("sidebarmenu/users")); ?>'>
          <?php echo e(csrf_field()); ?>

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" placeholder="UserName">
            </div>
            <div class="form-group">
                <label for="username">Email</label>
                <input type="text" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name ="password"  placeholder="Password">
            </div>
            <div class="form-group">
              <label for="level">User Role</label>
                <select class="form-control" name="role">
                  
                   <option>regular</option>
                   <option>admin</option>

                
                </select>
            </div>
            <div class="form-group clearfix">
              <button type="submit" class="btn btn-primary">Add User</button>
            </div>
          </form>
        </div>

      </div>

    </div>
  </div>
</div>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>