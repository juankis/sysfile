<?php $__env->startSection('titlePage', 'Addresses'); ?>
<?php $__env->startSection('content'); ?>
<!-- page content -->

<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2><?php echo e(isset($address) ? "Editar" : "Crear"); ?> Address</h2>
          <?php echo $__env->make('includes.headerContainer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <?php if( isset($address) ): ?> 
          <?php echo Form::open(['route' => ['sysfile.addresses.update', $address], 'id'=>'formCategory', 'method' => 'PUT', 'class' => 'form-horizontal', 'role' => 'form', 'files' => true ]); ?>

        <?php else: ?>
        <?php echo Form::open(['route' => 'sysfile.addresses.store', 'id'=>'formCategory', 'method' => 'POST', 'class' => 'form-horizontal', 'role' => 'form', 'files' => true ]); ?>

          
        <?php endif; ?>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Direccion <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="address" name="address" value="<?php echo e(isset($address) ? $address->address : null); ?>" class="form-control col-md-7 col-xs-12" data-validate-length-range="3,255" data-validate-words="" placeholder="Direccion" required="required" type="text">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Telefono 
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="number" id="phone" name="phone" value="<?php echo e(isset($address) ? $address->phone : null); ?>" data-validate-minmax="4,10" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Localidad <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="location" name="location" value="<?php echo e(isset($address) ? $address->location : null); ?>" class="form-control col-md-7 col-xs-12" data-validate-length-range="3,50" data-validate-words="1" placeholder="Ingrese Localidad" required="required" type="text">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Codigo Postal <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="postal_code" name="postal_code" value="<?php echo e(isset($address) ? $address->postal_code : null); ?>" class="form-control col-md-7 col-xs-12" data-validate-length-range="3,10" data-validate-words="1" placeholder="Codigo Postal" required="required" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Clientes </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <?php echo Form::select('customer_id', $customers, isset($address) ? $address->customer_id : null, ['id'=>'clientes', 'data-type'=>'text', 'class'=>'select2_single form-control', 'tabindex'=>'-1', 'data-placeholder'=>'Seleccionar Cliente', 'required']); ?> 
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