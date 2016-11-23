<?php $__env->startSection('titlePage', 'Depositos'); ?>
<?php $__env->startSection('content'); ?>
<!-- page content -->

<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2><?php echo e(isset($deposit) ? "Editar" : "Crear"); ?> Deposito</h2>
          <?php echo $__env->make('includes.headerContainer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <?php if( isset($deposit) ): ?> 
          <?php echo Form::open(['route' => ['sysfile.deposits.update', $deposit], 'id'=>'formCategory', 'method' => 'PUT', 'class' => 'form-horizontal', 'role' => 'form', 'files' => true ]); ?>

        <?php else: ?>
        <?php echo Form::open(['route' => 'sysfile.deposits.store', 'id'=>'formCategory', 'method' => 'POST', 'class' => 'form-horizontal', 'role' => 'form', 'files' => true ]); ?>

          
        <?php endif; ?>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nombre <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="name" name="name" value="<?php echo e(isset($deposit) ? $deposit->name : null); ?>" class="form-control col-md-7 col-xs-12" data-validate-length-range="3,255" placeholder="Nombre Completo" required="required" type="text">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Direccion <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="address" name="address" value="<?php echo e(isset($deposit) ? $deposit->address : null); ?>" class="form-control col-md-7 col-xs-12" data-validate-length-range="3,255" placeholder="Direccion" required="required" type="text">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Observaciones <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="observation" name="observation" value="<?php echo e(isset($deposit) ? $deposit->observation : null); ?>" class="form-control col-md-7 col-xs-12" data-validate-length-range="3,255" placeholder="Observacion" required="required" type="text">
            </div>
          </div>      
          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
              <button type="submit" class="btn btn-primary">Cancel</button>
              <button id="send" type="submit" class="btn btn-success">Submit</button>
            </div>
          </div>
        <?php echo Form::close(); ?>

      </div>
    </div>
  </div>
</div>

<!-- /page content -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<!-- validator -->
<script src="<?php echo e(asset('vendors/validator/validator.js')); ?>"></script>
<?php echo $__env->make('includes.scriptValidation', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminLayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>