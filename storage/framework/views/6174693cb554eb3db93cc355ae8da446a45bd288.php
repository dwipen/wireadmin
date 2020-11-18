<div class="row">

  <?php $__currentLoopData = $boxes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $box): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box">
        <span class="info-box-icon bg-<?php echo e($box['class']); ?> elevation-1">
          <?php if(isset($box['icon'])): ?>
            <i class="<?php echo e($box['icon']); ?>"></i>
          <?php endif; ?>
        </span>

        <div class="info-box-content">
          <span class="info-box-text"><?php echo e(ucfirst(trans('aiomlm.'.$prefix.'.'.$key))); ?></span>
          <span class="info-box-number">
            <?php echo e($data[$key]); ?>

            <?php if(isset($box['small'])): ?>
              <small>
                <?php if($box['small']==='currency'): ?>
                  <?php echo e(setting('site.currency')); ?>

                <?php endif; ?>
              </small>
            <?php endif; ?>
          </span>
        </div>
      </div>
    </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>
<?php /**PATH /var/www/web/wireadmin/resources/views/dashboard/small-boxes.blade.php ENDPATH**/ ?>