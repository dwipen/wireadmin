<?php if($input['type'] ==="select"): ?>
  <select wire:model="<?php echo e($prefix); ?>.<?php echo e($key); ?>" class="form-control <?php $__errorArgs = [$prefix.'.'.$key];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="<?php echo e($key); ?>">
    <?php $__currentLoopData = $input['options']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <option value="<?php echo e($option); ?>"><?php echo e($option); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </select>
<?php elseif($input['type'] === "select-tag"): ?>
  <select multiple data-role="tagsinput" wire:model="<?php echo e($prefix); ?>.<?php echo e($key); ?>" class="form-control <?php $__errorArgs = [$prefix.'.'.$key];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="<?php echo e($key); ?>">
    <?php $__currentLoopData = $input['options']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <option value="<?php echo e($option); ?>"><?php echo e($option); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </select>
<?php elseif($input['type'] === "checkbox"): ?>
  <input wire:model="<?php echo e($prefix); ?>.<?php echo e($key); ?>" type="<?php echo e($input['type']); ?>" name="<?php echo e($key); ?>" class="<?php $__errorArgs = [$prefix.'.'.$key];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
<?php elseif($input['type'] === "file"): ?>
  <input wire:model="<?php echo e($key); ?>" type="<?php echo e($input['type']); ?>" name="<?php echo e($key); ?>" class="form-control <?php $__errorArgs = [$key];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
<?php elseif($input['type'] ==="disabled"): ?>
  <input disabled wire:model="<?php echo e($prefix); ?>.<?php echo e($key); ?>" type="<?php echo e($input['type']); ?>" name="<?php echo e($key); ?>" class="form-control <?php $__errorArgs = [$prefix.'.'.$key];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
<?php else: ?>
  <input wire:model.debounce.1000ms="<?php echo e($prefix); ?>.<?php echo e($key); ?>" type="<?php echo e($input['type']); ?>" name="<?php echo e($key); ?>" class="form-control <?php $__errorArgs = [$prefix.'.'.$key];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
<?php endif; ?>
<?php /**PATH /var/www/web/wireadmin/resources/views/components/input.blade.php ENDPATH**/ ?>