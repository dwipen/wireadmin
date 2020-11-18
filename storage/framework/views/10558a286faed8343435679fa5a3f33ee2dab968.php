<div class="loginform-wrapper p-l-55 p-r-55 p-t-30 p-b-30">
  <div class="row justify-content-center m-b-10">
      <img class="logoRound" style="width: 152px;"
       src="<?php echo e(asset(setting('site.logo'))); ?>"
      alt="<?php echo e(setting('site.name')); ?>">
  </div>
  <form class="loginform validate-form" wire:submit.prevent>
    <span class="loginform-title p-b-27 p-t-10">
      <?php echo e(ucfirst(trans('auth.login.title'))); ?>

    </span>
    <div class="m-b-20">
      <input wire:model="userid" class="text-center form-input <?php $__errorArgs = ['userid'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="number" name="userid"
        placeholder="<?php echo e(ucfirst(trans('auth.enter_userid'))); ?>">
        <?php $__errorArgs = ['userid'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <span class="invalid-feedback" role="alert">
            <strong class="row justify-content-center"><?php echo e($message); ?></strong>
          </span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
      </div>
      <div class="m-b-20">
        <input wire:model="password" class="form-input text-center <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="password" name="password"
          placeholder="<?php echo e(ucfirst(trans('auth.enter_password'))); ?>">
          <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="invalid-feedback" role="alert">
              <strong class="row justify-content-center"><?php echo e($message); ?></strong>
            </span>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="flex-c p-b-10">
          <span class="txt1">
            <?php echo e(ucfirst(trans('auth.forgot-password'))); ?>

          </span>
          <a href="<?php echo e(route('password.forgot')); ?>" class="txt2 hov1"><?php echo e(ucfirst(trans('auth.buttons.reset-password'))); ?></a>
        </div>

        <div class="loginform-container-form-btn">
          <button id="loginNow" wire:loading.attr="disabled" wire:click.prevent="login" type="button" class="loginform-btn" name="button">
            <span wire:loading.remove wire:target="login">
              <?php echo e(ucfirst(trans('aiomlm.buttons.login'))); ?>

            </span>
            <span wire:loading wire:target="login">
              <?php echo e(ucfirst(trans('aiomlm.buttons.wait'))); ?>

            </span>
          </button>
        </div>

        <div class="text-center p-t-57 p-b-20">
          <?php if(setting('software.demo')): ?>
            <div class="col-md-12">
              <strong class="text-danger">Admin userid: 1000</strong>
              <br />
              <strong class="text-danger">Admin password: admin</strong>
            </div>
            <hr>
            <div class="col-md-12">
              <strong class="text-danger">Master userid: 1001</strong>
              <br />
              <strong class="text-danger">Master password master</strong>
            </div>
          <?php endif; ?>
        </div>
        <div class="text-center">
          <span class="txt1">
            <?php echo e(ucfirst(trans('auth.dont_have_account'))); ?>

          </span>
          <a href="<?php echo e(route('register')); ?>" class="txt2 hov1"><?php echo e(ucfirst(trans('auth.buttons.signup'))); ?></a>
        </div>
      </form>
    </div>
<?php /**PATH /var/www/web/wireadmin/resources/views/auth/login.blade.php ENDPATH**/ ?>