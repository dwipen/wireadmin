<?php $__env->startSection('title', setting('site.name').'-' .ucfirst(Route::currentRouteName())); ?>


<?php $__env->startSection('adminlte_css_pre'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('adminlte_js'); ?>
  <?php $__currentLoopData = ['success', 'error', 'warning', 'info']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if(session()->has($value)): ?>
      <script type="text/javascript">
          Toast.fire({
            title : <?php echo json_encode(session()->get($value), 15, 512) ?>,
            icon : <?php echo json_encode($value, 15, 512) ?>
          });
      </script>
    <?php endif; ?>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
  <?php if(\Auth::user()->hasPermissionTo('manage-administrator') && \Route::currentRouteName()==='dashboard'): ?>
    <?php if($info = (new \App\Repositories\SystemUpdateRepository())->getLatestVersion()): ?>
      <div class="col-md-12 card">
        <div class="row justify-content-center">
          <div class="text-info">
                  <strong>System update available : version : <?php echo e($info['version']); ?></strong>
                  <a href="<?php echo e(route('system.update')); ?>" class="btn btn-success btn-sm">Update now</a>
          </div>
        </div>
      </div>
    <?php endif; ?>
  <?php endif; ?>
  <?php echo e($slot); ?>

<?php $__env->stopSection(); ?>
<?php if(setting('site.footer') ): ?>
  <?php $__env->startSection('footer'); ?>
    <div class="row justify-content-center">
       <span>
         <strong><?php echo e(ucfirst(setting('site.footer'))); ?></strong>
         <span class="text-success">v.<?php echo e(setting('system.version')); ?></span>
       </span>
    </div>
  <?php $__env->stopSection(); ?>
<?php endif; ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/web/aiomlm/resources/views/layouts/app.blade.php ENDPATH**/ ?>