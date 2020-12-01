<div class="row justify-content-center">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <i class="fas fa-edit text-info"></i>
        <span class="text-success">
          <strong> <?php echo e(ucfirst(trans('aiomlm.'.$prefix.'.title', ['status'=>isset($status)?$status:'']))); ?></strong>
        </span>
        <?php if(isset($marquee)): ?>
          <span class="text-danger"> <marquee><?php echo e(ucfirst(trans($marquee))); ?></marquee> </span>
        <?php endif; ?>
      </div>
      <div class="card-body">
        <div class="form-group">
          <div class="row justify-content-around">
              <?php $__currentLoopData = $inputs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $input): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <?php if(isset($input['can'])): ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check($input['can'])): ?>
                      <div wire:key="input-field-<?php echo e($key); ?>" class="col-md-6 mb-2">
                        <i class="fas fa-hand-point-right text-success"></i>
                        <label class="text-info">
                          <?php echo e(ucfirst(trans('aiomlm.'.$prefix.'.'.$key))); ?>

                        </label>
                        <?php if(isset($input['defer'])): ?>
                          <?php echo $__env->make('components.input-defer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php else: ?>
                          <?php echo $__env->make('components.input', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php endif; ?>
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
                    <?php endif; ?>
                 <?php else: ?>
                   <div wire:key="input-field-<?php echo e($key); ?>" class="col-md-6 mb-2">
                     <i class="fas fa-hand-point-right text-success"></i>
                     <label class="text-info">
                       <?php echo e(ucfirst(trans('aiomlm.'.$prefix.'.'.$key))); ?>

                     </label>
                     <?php if(isset($input['defer'])): ?>
                       <?php echo $__env->make('components.input-defer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                     <?php else: ?>
                       <?php echo $__env->make('components.input', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                     <?php endif; ?>
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
                 <?php endif; ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              <?php if(isset($extraInputs)): ?>
                <div wire:key="input-field-<?php echo e($key); ?>" class="col-md-10 mt-2 mb-2 row justify-content-center">
                  <i class="fas fa-hand-point-right text-success"></i>
                  <label class="text-info">
                    <?php echo e(ucfirst(trans('aiomlm.'.$prefix.'.fields'))); ?>

                  </label>
                  <button wire:click.prevent="showExtraFields" type="button" class="btn btn-sm btn-danger"><?php echo e(ucfirst(trans('aiomlm.buttons.click'))); ?></button>
                </div>
                <?php if($showFields): ?>
                  <?php $__currentLoopData = $extraInputs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $input): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div wire:key="input-field-<?php echo e($key); ?>" class="col-md-6 mb-2">
                      <i class="fas fa-hand-point-right text-success"></i>
                      <label class="text-info">
                        <?php echo e(ucfirst(trans('aiomlm.'.$prefix.'.'.$key))); ?>

                      </label>
                      <?php if(isset($input['defer'])): ?>
                        <?php echo $__env->make('components.input-defer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                      <?php else: ?>
                        <?php echo $__env->make('components.input', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                      <?php endif; ?>
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
          <div class="row justify-content-around">
            <?php $__currentLoopData = $buttons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $button): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <button  wire:key="input-field-<?php echo e($key); ?>" id="<?php echo e($key); ?>" wire:loading.attr="disabled" wire:click.prevent="<?php echo e($button['method']); ?>" type="button"
              class="mt-2 btn btn-<?php echo e($button['class']); ?>" name="button">
                <?php echo e(ucfirst(trans('aiomlm.buttons.'.$key))); ?>

              </button>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php /**PATH /var/www/web/wireadmin/resources/views/components/form.blade.php ENDPATH**/ ?>