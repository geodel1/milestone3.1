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
          <span>Suppliers</span>
       </strong>
         <a href='<?php echo e(url("sidebarmenu/addsupplierform")); ?>' class="btn btn-info pull-right">Add New Supplier</a>
      </div>
     <div class="panel-body">
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th class="text-center" style="width: 5%;">#</th>
            <th class="text-center" style="width: 20%;">Supplier Name </th>
            <th class="text-center" style="width: 30%;">Supplier Address</th>
            <th class="text-center" style="width: 20%;">Supplier Email</th>
            <th class="text-center" style="width: 20%;">Contact No.</th>
            <th class="text-center" style="width: 20%;">Order Price</th>
            <th class="text-center" style="width: 20%;">Terms</th>
            <th class="text-center" style="width: 5%;">Actions</th>
          </tr>
        </thead>

        <tbody>
        
        <?php $__currentLoopData = $suppliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $supplier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
          <tr>
	           <td class="text-center"><?php echo e($supplier->id); ?></td>
	           <td class="text-center"><?php echo e($supplier->supplier_name); ?></td>
	           <td class="text-center"><?php echo e($supplier->supplier_address); ?></td>
	           <td class="text-center"><?php echo e($supplier->supplier_email); ?></td>
	           <td class="text-center"><?php echo e($supplier->contact_no); ?></td>
             <td class="text-center"><?php echo e($supplier->order_price); ?></td>
             <td class="text-center"><?php echo e($supplier->terms); ?></td>

	           
	           <td class="text-center">
	             <div class="btn-group">
	                <a href='<?php echo e(url("sidebarmenu/$supplier->id/editSupplier")); ?>' class="btn btn-xs btn-warning" data-toggle="tooltip" title="Edit">
	                  <i class="glyphicon glyphicon-pencil"></i>
	               </a>
	                <a href='<?php echo e(url("sidebarmenu/$supplier->id/delete")); ?>' class="btn btn-xs btn-danger" data-toggle="tooltip" title="Remove">
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