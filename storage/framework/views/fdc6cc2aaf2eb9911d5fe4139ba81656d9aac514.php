<div class="card">
     <div class="card-header">
        <div class="row justify-content-around">
            <h3 class="card-title text-danger row justify-content-center">
              <i class="fas fa-box text-success"></i>
              <span class="ml-2"><?php echo e(ucfirst(trans('aiomlm.'.$prefix.'.title', ['status'=>isset($status)?$status:'']))); ?></span>
             </h3>
             <?php if(isset($cardButtons)): ?>
               <?php $__currentLoopData = $cardButtons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $button): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <?php echo $__env->make('components.data-table-header-button', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             <?php endif; ?>
         </div>
      </div>
      <div class="card-body">
        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
          <div class="row mb-2">
            <div class="col-sm-12 col-md-2">
              <div class="dataTables_length" id="example1_length">
                <label><span class="text-info">(total : <?php echo e($data->total()); ?>)</span>
                  <select wire:model="paginate" name="example1_length" aria-controls="example1"
                  class="custom-select custom-select-sm form-control form-control-sm">
                    <option value="2">2 (<?php echo e(ucfirst(trans('aiomlm.table.entries'))); ?>)</option>
                    <option value="10">10 (<?php echo e(ucfirst(trans('aiomlm.table.entries'))); ?>)</option>
                    <option value="25">25 (<?php echo e(ucfirst(trans('aiomlm.table.entries'))); ?>)</option>
                    <option value="50">50 (<?php echo e(ucfirst(trans('aiomlm.table.entries'))); ?>)</option>
                    <option value="100">100 (<?php echo e(ucfirst(trans('aiomlm.table.entries'))); ?>)</option>
                  </select>
              </div>
            </div>

            <?php if(isset($selectStatus)): ?>
              <div class="col-sm-12 col-md-2">
                <div class="dataTables_length" id="example1_length">
                  <label><span class="text-info"><?php echo e(ucfirst(trans('aiomlm.user.status'))); ?></span>
                    <select wire:model="status" name="example1_length" aria-controls="example1"
                    class="custom-select custom-select-sm form-control form-control-sm">
                    <?php $__currentLoopData = $selectStatus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e($item); ?>"><?php echo e(ucfirst($item)); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
              </div>
            <?php endif; ?>

            <div class="col-sm-12 col-md-4">
              <div id="example1_filter" class="dataTables_filter">
                <label><?php echo e(ucfirst(trans('aiomlm.table.search'))); ?>

                  <input wire:model.debounce.500ms="search" type="search" class="form-control form-control-sm" placeholder="search"
                  aria-controls="example1">
                </label>
              </div>
          </div>
          <?php if(isset($headerButtons)): ?>
            <?php $__currentLoopData = $headerButtons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $button): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo $__env->make('components.data-table-header-button', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php endif; ?>

      </div>
        <div class="row table-responsive p-0">
          <div class="col-sm-12">

            <table class="table table-hover table-bordered text-nowrap">
              <thead>
                <tr class="text-info">
                  <?php if(isset($checkbox)): ?>
                    <?php if($checkbox): ?>
                      <th>
                        
                        <button wire:loading.attr="disabled" wire:click.prevent="deleteSelected" type="button" name="button" class="btn btn-sm btn-danger">
                          <?php echo e($deleteAll? ucfirst(trans('aiomlm.buttons.sure')): ucfirst(trans('aiomlm.buttons.delete-selected'))); ?>

                        </button>
                      </th>
                    <?php endif; ?>
                  <?php endif; ?>
                  <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <th><?php echo e(ucfirst(trans('aiomlm.'.$prefix.'.'.$value))); ?></th>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php
                  $showAction = false;
                  ?>
                  <?php if(isset($actions)): ?>
                    <?php $__currentLoopData = $actions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $action): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       <?php if(isset($action['can'])): ?>
                           <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check($action['can'])): ?>
                             <?php
                               $showAction = true;
                             ?>
                           <?php endif; ?>
                       <?php elseif(empty($action['can'])): ?>
                         <?php
                           $showAction = true;
                         ?>
                       <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php if($showAction): ?>
                      <th><?php echo e(ucfirst(trans('aiomlm.table.actions'))); ?></th>
                    <?php endif; ?>
                  <?php endif; ?>
                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <?php if(isset($checkbox)): ?>
                      <?php if($checkbox): ?>
                          <td>
                            <input wire:model="selected.<?php echo e($value->id); ?>" class="checkbox" type="checkbox" name="checkbox">
                          </td>
                      <?php endif; ?>
                    <?php endif; ?>
                    <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(strpos($row, '.')): ?>
                          <?php
                            $collection = \Str::of($row)->explode('.');
                          ?>
                          <?php if(count($collection) == 2): ?>
                            <td><?php echo e($value[$collection[0]][$collection[1]]); ?></td>
                          <?php elseif(count($collection) == 3): ?>
                            <td><?php echo e($value[$collection[0]][$collection[1]][$collection[2]]); ?></td>
                          <?php endif; ?>
                    <?php elseif(strpos($row, ',')): ?>
                          <?php
                            $collection = \Str::of($row)->explode(',');
                            $count =0;
                            for ($i=0; $i < count($collection) ; $i++) {
                               $count = $count + $value[$collection[$i]];
                            }
                          ?>
                      <td><?php echo e($count); ?></td>
                    <?php elseif(trim($row==="amount" || $row==="price")): ?>
                        <td><?php echo e(setting('site.currency')); ?> <?php echo e(trim($value[$row])); ?></td>
                    <?php elseif(trim($row) ==="created_at" || trim($row) == "updated_at"): ?>
                      <td><?php echo e($value[$row]->diffForHumans()); ?></td>
                    <?php elseif(trim($row) ==="status"): ?>
                       <td class="text-<?php echo e($value[$row]=='pending'?'warning':($value[$row]=='completed'?'success':'info')); ?> }}"><?php echo e($value[$row]); ?></td>
                    <?php else: ?>
                        <td><?php echo e($value[$row]); ?></td>
                    <?php endif; ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php if(isset($actions) && $showAction): ?>
                      <td>
                        <?php $__currentLoopData = $actions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $button): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <?php echo $__env->make('components.data-table-button', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </td>
                    <?php endif; ?>

                  </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>

            </table>
          </div>
          
          <?php if($data->total() >0): ?>
            <?php echo e($data->links()); ?>


          <?php else: ?>
             <strong class="text-danger"><?php echo e(ucfirst(trans('aiomlm.table.no-data'))); ?></strong>
          <?php endif; ?>
         </div>
      </div>
    </div>
    <?php if(isset($modal)): ?>
      <?php echo $__env->make('components.modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
</div>
<?php /**PATH /var/www/web/wireadmin/resources/views/components/data-table.blade.php ENDPATH**/ ?>