<?php $__env->startSection('titlePage', 'Home'); ?>
<?php $__env->startSection('content'); ?>
<!-- page content -->

<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>En construccion</h2>
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
          En construccion ...
      </div>
    </div>
  </div>
</div>

<!-- /page content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminLayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>