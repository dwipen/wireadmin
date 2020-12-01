<div class="container">
   <?php if($info): ?>
      <div class="card">
        <div class="card-header">
          System updater
        </div>
        <div class="card-body">
           <div class="col-md-12">
                 <strong class="text-success">Latest Version : <?php echo e($info['version']); ?> (<span class="text-secondary">current Version : <?php echo e(setting('system.version', 0)); ?></span>) </strong>

                 <p class="text-info"><?php echo $info['description']; ?></p>
           </div>
        </div>
        <div class="card-footer">
           <button id="showLoading" wire:click.prevent="update" type="button" class="btn btn-success" name="button">Update</button>
        </div>
      </div>
   <?php else: ?>
     <div class="text-success">
       <strong>No new updates detected</strong>
     </div>
   <?php endif; ?>
</div>
<?php /**PATH /var/www/web/wireadmin/resources/views/system-update.blade.php ENDPATH**/ ?>