<div wire:ignore.self class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true" data-backdrop="false">
      <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h5 class="modal-title text-info" id="exampleModalScrollableTitle">
          <?php echo e(ucfirst(trans('aiomlm.payment.select-gateway'))); ?>

        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <div class="row justify-content-around">
                <?php if(setting('payment.razorpay')): ?>
                    <div class="mb-4">
                      <button id="payWithRazorpay" wire:click.prevent="payWithRazorpay" class="btn btn-warning" type="button" name="button">
                        <?php echo e(ucfirst(trans('aiomlm.payment.pay-with',['attr'=>'Razorpay']))); ?>

                        <img style="height: 20px; width: 90px;" src="<?php echo e(asset('assets/images/payments/razorpay.png')); ?>" alt="img">
                      </button>
                      <?php echo $__env->make('payments.razorpay', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                <?php endif; ?>
                <div class="mb-4">
                    <button id="payWithPaypal" wire:click.prevent="payWithPaypal" class="btn btn-warning" type="button" name="button">
                      <?php echo e(ucfirst(trans('aiomlm.payment.pay-with',['attr'=>'Paypal']))); ?>

                      <img style="height: 20px; width: 90px;" src="<?php echo e(asset('assets/images/payments/paypal.png')); ?>" alt="img">
                    </button>
                </div>


            </div>
          </div>
      </div>
    </div>
  </div>
</div>
<?php /**PATH /var/www/web/wireadmin/resources/views/payments/gateways-modal.blade.php ENDPATH**/ ?>