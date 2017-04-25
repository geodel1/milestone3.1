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
          <span>Category</span>
       </strong>
         <a href='<?php echo e(url("sidebarmenu/addcategoryform")); ?>' class="btn btn-info pull-right">Add New Category</a>
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
      
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
          <tr>
             <td class="text-center"><?php echo e($category->id); ?></td>
             <td class="text-center"><?php echo e($category->category_name); ?></td>
             
             <td class="text-center">
               <div class="btn-group">
                  <a href='<?php echo e(url("sidebarmenu/$category->id/editCategories")); ?>' class="btn btn-xs btn-warning" data-toggle="tooltip" title="Edit">
                    <i class="glyphicon glyphicon-pencil"></i>
                 </a>
                  <a href='<?php echo e(url("sidebarmenu/$category->id/deleteCategories")); ?>' class="btn btn-xs btn-danger" data-toggle="tooltip" title="Remove">
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