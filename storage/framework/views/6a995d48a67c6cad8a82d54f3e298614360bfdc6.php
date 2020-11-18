<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo e(setting('site.name')." - ".ucfirst(\Route::currentRouteName())); ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/master/css/master.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/master/css/util.css')); ?>">

	<link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
	<?php echo \Livewire\Livewire::styles(); ?>

</head>
<body>
	<div class="loginform-container" style="background-image: url('/assets/master/images/bg-01.png');">
		<?php echo e($slot); ?>

		</div>
	<?php echo \Livewire\Livewire::scripts(); ?>

	<script src="<?php echo e(asset('js/app.js')); ?>" charset="utf-8"></script>
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
</body>
</html>
<?php /**PATH /var/www/web/aiomlm/resources/views/layouts/master.blade.php ENDPATH**/ ?>