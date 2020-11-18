<?php if(isset($button['confirm'])): ?>
      <?php if($confirm[$key]===$value->id): ?>
         <?php echo e(ucfirst(trans('aiomlm.buttons.sure'))); ?>

      <?php else: ?>
          <?php if(isset($button['icon'])): ?>
            <i class="<?php echo e($button['icon']); ?>"></i>
          <?php else: ?>
            <?php echo e(ucfirst(trans('aiomlm.buttons.'.$key))); ?>

          <?php endif; ?>
      <?php endif; ?>
<?php else: ?>
      <?php if(isset($button['icon'])): ?>
        <i class="<?php echo e($button['icon']); ?>"></i>
      <?php else: ?>
        <?php echo e(ucfirst(trans('aiomlm.buttons.'.$key))); ?>

      <?php endif; ?>
<?php endif; ?>
<?php /**PATH /var/www/web/wireadmin/resources/views/components/button-label.blade.php ENDPATH**/ ?>