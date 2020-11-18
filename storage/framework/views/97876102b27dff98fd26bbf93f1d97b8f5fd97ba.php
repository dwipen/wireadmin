<div wire:ignore.self class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <?php if(isset($modalClass)): ?>
      <div class="modal-dialog <?php echo e($modalClass); ?> modal-dialog-scrollable" role="document">
    <?php else: ?>
      <div class="modal-dialog modal-dialog-scrollable" role="document">
    <?php endif; ?>
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-info" id="exampleModalScrollableTitle">
          <?php echo e(ucfirst($prefix)); ?>

        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <div class="row justify-content-around">
              <?php $__currentLoopData = $inputs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $input): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="col-md-6 mb-2">
                    <i class="fas fa-hand-point-right text-success"></i>
                    <label class="text-info">
                      <?php echo e(ucfirst(trans('aiomlm.'.$prefix.'.'.$key))); ?>

                    </label>
                     <?php echo $__env->make('components.input', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                     <?php if($input['type']==='file'): ?>
                       <?php $__errorArgs = [$key];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                         <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                         </span>
                       <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                     <?php else: ?>
                       <?php $__errorArgs = [$prefix.'.'.$key];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                         <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                         </span>
                       <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                     <?php endif; ?>
                  </div>

              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php if(isset($extraInputs)): ?>
                <div class="col-md-10 mt-2 mb-2 row justify-content-center">
                  <i class="fas fa-hand-point-right text-success"></i>
                  <label class="text-info">
                    <?php echo e(ucfirst(trans('aiomlm.'.$prefix.'.fields'))); ?>

                  </label>
                  <button wire:click.prevent="showExtraFields" type="button" class="btn btn-sm btn-danger"><?php echo e(ucfirst(trans('aiomlm.buttons.click'))); ?></button>
                </div>
                <?php if($showFields): ?>
                  <?php $__currentLoopData = $extraInputs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $input): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-6 mb-2">
                      <i class="fas fa-hand-point-right text-success"></i>
                      <label class="text-info">
                        <?php echo e(ucfirst(trans('aiomlm.'.$prefix.'.'.$key))); ?>

                      </label>
                       <?php echo $__env->make('components.input', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                       <?php if($input['type']==='file'): ?>
                         <?php $__errorArgs = [$key];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                           <span class="invalid-feedback" role="alert">
                              <strong><?php echo e($message); ?></strong>
                           </span>
                         <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                       <?php else: ?>
                         <?php $__errorArgs = [$prefix.'.'.$key];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                           <span class="invalid-feedback" role="alert">
                              <strong><?php echo e($message); ?></strong>
                           </span>
                         <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                       <?php endif; ?>
                    </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
              <?php endif; ?>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <div class="col-md-12">
          <div class="row justify-content-around">
            <?php $__currentLoopData = $modalButtons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $button): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <button id="<?php echo e($key); ?>" wire:loading.attr="disabled" wire:click.prevent="<?php echo e($button['method']); ?>" type="button" class="btn btn-<?php echo e($button['class']); ?>" name="button">
                <?php echo e(ucfirst(trans('aiomlm.buttons.'.$key))); ?>

              </button>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php /**PATH /var/www/web/wireadmin/resources/views/components/modal.blade.php ENDPATH**/ ?>