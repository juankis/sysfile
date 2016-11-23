<?php $__env->startSection('titlePage', 'Departamentos'); ?>
<?php $__env->startSection('content'); ?>
<!-- page content -->

<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2><?php echo e(isset($department) ? "Editar" : "Crear"); ?> Departamentos</h2>
          <?php echo $__env->make('includes.headerContainer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <?php if( isset($department) ): ?> 
          <?php echo Form::open(['route' => ['sysfile.departments.update', $department], 'id'=>'formCategory', 'method' => 'PUT', 'class' => 'form-horizontal', 'role' => 'form', 'files' => true ]); ?>

        <?php else: ?>
        <?php echo Form::open(['route' => 'sysfile.departments.store', 'id'=>'formCategory', 'method' => 'POST', 'class' => 'form-horizontal', 'role' => 'form', 'files' => true ]); ?>

          
        <?php endif; ?>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nombre <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="name" name="name" value="<?php echo e(isset($department) ? $department->name : null); ?>" class="form-control col-md-7 col-xs-12" data-validate-length-range="3,255" data-validate-words="1" placeholder="Minimo 3 caracteres ..." required="required" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Clientes </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <?php echo Form::select('customer_id', $customers,  isset($department) ? $department->customer_id : null, ['id'=>'clientes', 'data-type'=>'text', 'class'=>'select2_single form-control', 'tabindex'=>'-1', 'data-placeholder'=>'Seleccionar Cliente', 'required']); ?> 
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
<!-- Select2 -->
<script src="<?php echo e(asset('vendors/select2/dist/js/select2.full.min.js')); ?>"></script>
<?php echo $__env->make('includes.scriptForms', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<!-- Select2 -->
    <link href="<?php echo e(asset('vendors/select2/dist/css/select2.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminLayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>