<?php if(isset($button['can'])): ?>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check($button['can'])): ?>
        <?php if(isset($button['status'])): ?>
             <?php if($value->status === $button['status']): ?>
                 <button wire:click.prevent="<?php echo e($button['method']); ?>(<?php echo e($value->id); ?>)" type="button" class="btn btn-sm btn-<?php echo e($button['class']); ?>">
                      <?php echo $__env->make('components.button-label', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                 </button>
             <?php endif; ?>
        <?php else: ?>
            <button wire:click.prevent="<?php echo e($button['method']); ?>(<?php echo e($value->id); ?>)" type="button" class="btn btn-sm btn-<?php echo e($button['class']); ?>">
                 <?php echo $__env->make('components.button-label', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </button>
        <?php endif; ?>
    <?php endif; ?>
<?php else: ?>
  <?php if(isset($button['status'])): ?>
       <?php if($value->status === $button['status']): ?>
           <button wire:click.prevent="<?php echo e($button['method']); ?>(<?php echo e($value->id); ?>)" type="button" class="btn btn-sm btn-<?php echo e($button['class']); ?>">
                <?php echo $__env->make('components.button-label', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
           </button>
       <?php endif; ?>
  <?php else: ?>
      <button wire:click.prevent="<?php echo e($button['method']); ?>(<?php echo e($value->id); ?>)" type="button" class="btn btn-sm btn-<?php echo e($button['class']); ?>">
           <?php echo $__env->make('components.button-label', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </button>
  <?php endif; ?>
<?php endif; ?>
<?php /**PATH /var/www/web/wireadmin/resources/views/components/data-table-button.blade.php ENDPATH**/ ?>