<div class="col-md-6 loginform-wrapper p-l-55 p-r-55 p-t-20 p-b-30">
  <style media="screen">
    .modal-open .main {
        -webkit-filter: blur(1px) grayscale(90%);
      }
  </style>
  <div class="main">
    <div class="row justify-content-center m-b-10">
      <a href="/">
        <img class="logoRound" style="width: 152px;"
        src="<?php echo e(asset(setting('site.logo'))); ?>"
        alt="<?php echo e(setting('site.name')); ?>"></a>
    </div>

    <?php if(setting('register.disabled')): ?>
      <span class="loginform-title p-b-10">
        <?php echo e(ucfirst(trans('auth.register.disabled'))); ?>

      </span>
    <?php else: ?>
    
    <div class="loginform m-t-5">
      <span class="loginform-title p-b-10">
        <?php echo e(ucfirst(trans('auth.register.title'))); ?>

      </span>
      <?php if(config('register.show_video') == 'yes' && config('register.video_link')): ?>
        <div class="row justify-content-center p-b-10">
          <iframe width="500" height="270"
          src="<?php echo e(config('register.video_link')); ?>" frameborder="0"
          allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen></iframe>
        </div>
      <?php endif; ?>

      
       <div class="row">
         <?php $__errorArgs = ['form.error'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
           <div class="col-md-20 ml-4 text-center">
             <strong class="text-danger"><?php echo e($message); ?></strong>
           </div>
         <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
         <div class="m-b-20 col-md-6">
           <input wire:model.debounce.500ms="form.sponsor" class="form-input text-center <?php $__errorArgs = ['form.sponsor'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
            type="number" name="sponsor"
            placeholder="<?php echo e(ucfirst(trans('auth.register.sponsor'))); ?>">
          <?php if(isset($sponsor)): ?>
            <span role="alert" class="text-success">
              <strong class="row justify-content-center"><?php echo e($sponsor->name); ?></strong>
            </span>
          <?php endif; ?>
           <?php $__errorArgs = ['form.sponsor'];
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

         <?php if(setting('register.show_position')): ?>
           <div class="m-b-20 col-md-6">
             <input wire:model="form.position" class="form-input text-center <?php $__errorArgs = ['form.position'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
              type="number" name="position"
              placeholder="<?php echo e(ucfirst(trans('auth.register.position'))); ?>">
              <?php if(isset($position)): ?>
                <span role="alert" class="text-success">
                  <strong class="row justify-content-center"><?php echo e($position->name); ?></strong>
                </span>
              <?php endif; ?>
             <?php $__errorArgs = ['form.position'];
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
           
           <?php if(setting('register.show_legs')): ?>
             <div class="m-b-20 col-md-6">
                <select class="form-input text-center <?php $__errorArgs = ['form.leg'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="leg" wire:model="form.leg">
                  <?php if(setting('business.leg') >0): ?>
                    <option value="A"><?php echo e(setting('business.leg')==2?"(Left)":"A"); ?></option>
                  <?php endif; ?>
                  <?php if(setting('business.leg') >1): ?>
                    <option value="B"><?php echo e(setting('business.leg')==2?"(Right)":"B"); ?></option>
                  <?php endif; ?>
                  <?php if(setting('business.leg') > 2): ?>
                    <option value="C">C</option>
                  <?php endif; ?>
                  <?php if(setting('business.leg') > 3): ?>
                    <option value="D">D</option>
                  <?php endif; ?>
                  <?php if(setting('business.leg') > 4): ?>
                    <option value="E">E</option>
                  <?php endif; ?>
                </select>
               <?php $__errorArgs = ['form.position'];
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
           <?php endif; ?>
         <?php endif; ?>
         

         

         <?php if(!setting('register.free')): ?>

           <?php if(setting('business.product') && setting('register.show_products')): ?>
             <div class="m-b-20 col-md-6">
                <select class="form-input text-center <?php $__errorArgs = ['form.product'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="product" wire:model="form.product">
                    <option>Select Package</option>
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e($product->id); ?>">
                        <?php echo e($product->name); ?> / <?php echo setting('site.currency'); ?><?php echo e($product->price); ?>

                      </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
               <?php $__errorArgs = ['form.product'];
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
           <?php endif; ?>

           
           <?php if(setting('register.epin') && setting('business.epin')): ?>
                  <div class="m-b-20 col-md-6">
                    <?php if(!$form['pg']): ?>
                        <input wire:model="form.epin" class="form-input text-center <?php $__errorArgs = ['form.epin'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                         type="number" name="epin"
                         placeholder="<?php echo e(ucfirst(trans('auth.register.epin'))); ?>">
                        <?php $__errorArgs = ['form.epin'];
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
                    <?php endif; ?>
                    <?php if(setting('register.pg') && setting('business.pg')): ?>
                      <input type="checkbox" name="pg" wire:model="form.pg">
                      <span class="text-blue">Pay using payment gateways</span>
                    <?php endif; ?>
                  </div>
           <?php endif; ?>

         <?php endif; ?>
         

         <div class="m-b-20 col-md-6">
           <input wire:model="form.name" class="form-input text-center <?php $__errorArgs = ['form.name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
            type="text" name="full name"
            placeholder="<?php echo e(ucfirst(trans('auth.register.name'))); ?>">
           <?php $__errorArgs = ['form.name'];
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

           <div class="m-b-20 col-md-6">
             <input wire:model="form.email" class="form-input text-center <?php $__errorArgs = ['form.email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
              type="email" name="email"
              placeholder="<?php echo e(ucfirst(trans('auth.register.email'))); ?>">
             <?php $__errorArgs = ['form.email'];
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

           <div class="m-b-20 col-md-6">
             <input wire:model="form.phone" class="form-input text-center <?php $__errorArgs = ['form.phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
              type="number" name="phone"
              placeholder="<?php echo e(ucfirst(trans('auth.register.phone'))); ?>">
             <?php $__errorArgs = ['form.phone'];
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


           <?php if(setting('register.password')): ?>
             <div class="m-b-20 col-md-6">
               <input wire:model="form.password" class="form-input text-center <?php $__errorArgs = ['form.password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                type="password" name="password"
                placeholder="<?php echo e(ucfirst(trans('auth.register.password'))); ?>">
               <?php $__errorArgs = ['form.password'];
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
             <div class="m-b-20 col-md-6">
               <input wire:model="form.password_confirmation" class="form-input text-center <?php $__errorArgs = ['form.password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                type="password" name="password_confirmation"
                placeholder="<?php echo e(ucfirst(trans('auth.register.password_confirmation'))); ?>">
               <?php $__errorArgs = ['form.password_confirmation'];
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
           <?php endif; ?>

           <?php if(setting('register.fields.country')): ?>
             <div class="m-b-20 col-md-6">
               <select id="countries" wire:model="form.country" class="form-input text-center <?php $__errorArgs = ['country'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="country">
                  <option value="">Select country</option>
                  <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($country['name']); ?>"><?php echo e($country['name']); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </select>
                <?php $__errorArgs = ['country'];
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

              <?php if(setting('register.fields.state')): ?>
                <div class="m-b-20 col-md-6">
                  <select id="states" wire:model="form.state" class="form-input text-center <?php $__errorArgs = ['state'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="state">
                     <option value="">Select state</option>
                     <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       <option value="<?php echo e($state['name']); ?>"><?php echo e($state['name']); ?></option>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                   <?php $__errorArgs = ['state'];
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

                 <?php if(setting('register.fields.city')): ?>
                   <div class="m-b-20 col-md-6">
                     <select id="cities" wire:model="form.city" class="form-input text-center <?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="city">
                        <option value="">Select city</option>
                        <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($city['name']); ?>"><?php echo e($city['name']); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </select>
                      <?php $__errorArgs = ['city'];
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
                 <?php endif; ?>
              <?php endif; ?>
           <?php endif; ?>
        </div>
        

        <div class="flex-c p-b-10">
          <span class="txt1">
            <?php echo e(ucfirst(trans('auth.register.t&c'))); ?>

            <a href="/t&c">T&C</a>
          </span>
        </div>

        <div class="loginform-container-form-btn">
          <button id="registerNow" wire:loading.remove wire:click.prevent="registerNow" type="button" class="loginform-btn">
            <?php echo e(ucfirst(trans('auth.buttons.signup'))); ?>

          </button>
          <button wire:loading wire:target="registerNow" type="button" class="loginform-btn">
            <?php echo e(ucfirst(trans('auth.buttons.wait'))); ?>

          </button>
        </div>

        <div class="text-center p-t-57 p-b-20">
        </div>
        <div class="text-center">
          <span class="txt1">
            <?php echo e(ucfirst(trans('auth.already_have_account'))); ?>

          </span>
          <a href="<?php echo e(route('login')); ?>" class="txt2 hov1"><?php echo e(ucfirst(trans('auth.buttons.signin'))); ?></a>
        </div>
      </div>
      
    <?php endif; ?>
  </div>
  <?php if(setting('register.pg') && setting('business.pg')): ?>
    <?php echo $__env->make('payments.gateways-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php endif; ?>
</div>
<?php /**PATH /var/www/web/wireadmin/resources/views/auth/register.blade.php ENDPATH**/ ?>