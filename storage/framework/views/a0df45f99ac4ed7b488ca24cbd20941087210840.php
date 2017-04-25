<?php $__env->startSection('content'); ?>

	
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
          <span>Users</span>
       </strong>
         <a href='<?php echo e(url("sidebarmenu/adduserform")); ?>' class="btn btn-info pull-right">Add New User</a>
      </div>
     <div class="panel-body">
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th class="text-center" style="width: 5%;">#</th>
            <th class="text-center" style="width: 20%;">Name </th>
            <th class="text-center" style="width: 30%;">Email</th>
            <th class="text-center" style="width: 20%;">User Role</th>
            <th class="text-center" style="width: 20%;">Last Login</th>
            <th class="text-center" style="width: 5%;">Actions</th>
          </tr>
        </thead>

        <tbody>
        <?php $__currentLoopData = $allusers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
        
          <tr>
	           <td class="text-center"><?php echo e($user->id); ?></td>
	           <td class="text-center"><?php echo e($user->name); ?></td>
	           <td class="text-center"><?php echo e($user->email); ?></td>
	           <td class="text-center"><?php echo e($user->role); ?></td>
	           <td class="text-center"><?php echo e($user->updated_at); ?></td>

	           
	           <td class="text-center">
	             <div class="btn-group">
	                <a href='<?php echo e(url("sidebarmenu/$user->id/editUser")); ?>' class="btn btn-xs btn-warning" data-toggle="tooltip" title="Edit">
	                  <i class="glyphicon glyphicon-pencil"></i>
	               </a>
	                <a href='<?php echo e(url("sidebarmenu/$user->id/delete")); ?>' class="btn btn-xs btn-danger" data-toggle="tooltip" title="Remove">
	                  <i class="glyphicon glyphicon-remove"></i>
	                </a>
	                </div>
	           </td>
          </tr>
       	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       </tbody>
     </table>
     </div>
    </div>
  </div>
</div>    

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin_menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>