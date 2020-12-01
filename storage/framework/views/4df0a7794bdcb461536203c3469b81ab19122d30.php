<?php if(isset($button['status']) && isset($status)): ?>
      <?php if($status===$button['status']): ?>
         <?php if(isset($button['can'])): ?>
             <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check($button['can'])): ?>
               <div class="col-sm-12 col-md-3">
                 <div id="example1_filter" class="dataTables_filter">
                    <button wire:click.prevent="<?php echo e($button['method']); ?>" type="button" class="btn btn-<?php echo e($button['class']); ?> btn-md">
                        <?php if(isset($button['icon'])): ?>
                          <i class="<?php echo e($button['icon']); ?>"></i>
                        <?php else: ?>
                          <?php echo e(ucfirst(trans('aiomlm.buttons.'.$key))); ?>

                        <?php endif; ?>
                    </button>
                 </div>
               </div>
             <?php endif; ?>
         <?php else: ?>
           <div class="col-sm-12 col-md-3">
             <div id="example1_filter" class="dataTables_filter">
                <button wire:click.prevent="<?php echo e($button['method']); ?>" type="button" class="btn btn-<?php echo e($button['class']); ?> btn-md">
                    <?php if(isset($button['icon'])): ?>
                      <i class="<?php echo e($button['icon']); ?>"></i>
                    <?php else: ?>
                      <?php echo e(ucfirst(trans('aiomlm.buttons.'.$key))); ?>

                    <?php endif; ?>
                </button>
             </div>
           </div>
         <?php endif; ?>
      <?php endif; ?>
<?php else: ?>
     <?php if(isset($button['can'])): ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check($button['can'])): ?>
          <div class="col-sm-12 col-md-3">
            <div id="example1_filter" class="dataTables_filter">
               <button wire:click.prevent="<?php echo e($button['method']); ?>" type="button" class="btn btn-<?php echo e($button['class']); ?> btn-md">
                   <?php if(isset($button['icon'])): ?>
                     <i class="<?php echo e($button['icon']); ?>"></i>
                   <?php else: ?>
                     <?php echo e(ucfirst(trans('aiomlm.buttons.'.$key))); ?>

                   <?php endif; ?>
               </button>
            </div>
          </div>
        <?php endif; ?>
     <?php else: ?>
       <div class="col-sm-12 col-md-3">
         <div id="example1_filter" class="dataTables_filter">
            <button wire:click.prevent="<?php echo e($button['method']); ?>" type="button" class="btn btn-<?php echo e($button['class']); ?> btn-md">
                <?php if(isset($button['icon'])): ?>
                  <i class="<?php echo e($button['icon']); ?>"></i>
                <?php else: ?>
                  <?php echo e(ucfirst(trans('aiomlm.buttons.'.$key))); ?>

                <?php endif; ?>
            </button>
         </div>
       </div>
     <?php endif; ?>
<?php endif; ?>
<?php /**PATH /var/www/web/wireadmin/resources/views/components/data-table-header-button.blade.php ENDPATH**/ ?>