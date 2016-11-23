<?php $__env->startSection('titlePage', 'Clientes'); ?>
<?php $__env->startSection('content'); ?>
<!-- page content -->

<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Clientes</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Ajustes 1</a>
              </li>
              <li><a href="#">Ajustes 2</a>
              </li>
            </ul>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>ID Cliente</th>
              <th>Nombre</th>
              <th>Telefono</th>
              <th>Email</th>
              <th>Estado</th>
              <th>Creado en</th>
              <th>Actualizado en</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach($customers as $customer): ?>
          <tr>
            <td><?php echo e($customer->id); ?></td>
            <td><?php echo e($customer->name); ?></td>
            <td><?php echo e($customer->phone); ?></td>
            <td><?php echo e($customer->email); ?></td>
            <td><?php echo e($customer->state); ?></td>
            <td><?php echo e($customer->created_at); ?></td>
            <td><?php echo e($customer->updated_at); ?></td>
            <td>
              <div class="text-center dropdown" id="user-header">
                  <button type="button" class="btn btn-sm btn-primary" aria-expanded="false"href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                      <i class="glyphicon glyphicon-th-list">&nbsp;</i><span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu">
                    
                    <li>
                      <a href="<?php echo e(route('sysfile.customers.edit', $customer->id)); ?>"><i class="glyphicon glyphicon-edit"></i><span>Editar</span></a>
                    </li>
                    <li>
                      <a href="<?php echo e(route('sysfile.customers.destroy', $customer->id)); ?>"><i  class="glyphicon glyphicon-remove"></i><span>Borrar</span></a>
                    </li>
                  </ul>
              </div>
            </td>
          </tr>
          <?php endforeach; ?>
            
          </tbody>
        </table>

      </div>
    </div>
  </div>
</div>

<!-- /page content -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<!-- validator -->
<!-- Datatables -->
<script src="<?php echo e(asset('vendors/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/datatables.net-buttons/js/dataTables.buttons.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/datatables.net-buttons/js/buttons.flash.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/datatables.net-buttons/js/buttons.html5.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/datatables.net-buttons/js/buttons.print.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/datatables.net-responsive/js/dataTables.responsive.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/datatables.net-scroller/js/datatables.scroller.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/jszip/dist/jszip.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/pdfmake/build/pdfmake.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/pdfmake/build/vfs_fonts.js')); ?>"></script>
<script>
  $(document).ready(function() {
    $('#datatable-responsive').DataTable();
  
  });
</script>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<!-- Datatables -->
    <link href="<?php echo e(asset('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminLayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>