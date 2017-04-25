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
          <span>Items</span>
       </strong>
         <a href='<?php echo e(url("sidebarmenu/additemform")); ?>' class="btn btn-info pull-right">Add New Item</a>
      </div>
     <div class="panel-body">
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th class="text-center" style="width: 5%;">#</th>
            <th class="text-center" style="width: 20%;">Item name </th>
            <th class="text-center" style="width: 20%;">Description</th>
            <th class="text-center" style="width: 5%;">User Id</th>
            <th class="text-center" style="width: 20%;">User Name</th>
            <th class="text-center" style="width: 5%;">Category Name</th>
            <th class="text-center" style="width: 10%;">U.O.M.</th>
            <th class="text-center" style="width: 10%;">Supplier</th>
            <th class="text-center" style="width: 5%;">Actions</th>

          </tr>
        </thead>

        <tbody>
      
        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
          <tr>
             <td class="text-center"><?php echo e($item->id); ?></td>
             <td class="text-center"><?php echo e($item->item_name); ?></td>
             <td class="text-center"><?php echo e($item->description); ?></td>
             <td class="text-center"><?php echo e($item->user_id); ?></td>
             <td class="text-center"><?php echo e($item->user_name); ?></td>
             <td class="text-center"><?php echo e($item->category_name); ?></td>
             <td class="text-center"><?php echo e($item->UOM_name); ?></td>
             <td class="text-center">
               <?php $__currentLoopData = $item->suppliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $supplier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php echo e($supplier->supplier_name); ?> 
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             </td>
             <td class="text-center">
               <div class="btn-group">
                  <a href='<?php echo e(url("sidebarmenu/$item->id/editItem")); ?>' class="btn btn-xs btn-warning" data-toggle="tooltip" title="Edit">
                    <i class="glyphicon glyphicon-pencil"></i>
                 </a>
                  <a href='<?php echo e(url("sidebarmenu/$item->id/deleteItem")); ?>' class="btn btn-xs btn-danger" data-toggle="tooltip" title="Remove">
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