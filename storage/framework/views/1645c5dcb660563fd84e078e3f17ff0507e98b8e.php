<div class="col-md-6">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Latest Members</h3>
      <div class="card-tools">
        <span class="badge badge-danger"><?php echo e(count($latest_members)); ?> New Members</span>
        <button type="button" class="btn btn-tool" data-card-widget="collapse">
          <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove">
          <i class="fas fa-times"></i>
        </button>
      </div>
    </div>
    <div class="card-body p-0">
      <ul class="users-list clearfix">
        <?php $__currentLoopData = $latest_members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li>
            <img src="<?php echo e(asset('/storage/uploads/profiles/user.png')); ?>">
            <a class="users-list-name" href="<?php echo e(route('profile', ['id'=>$member->id])); ?>"><?php echo e($member->name); ?></a>
            <span class="users-list-date"><?php echo e($member->created_at->diffForHumans()); ?></span>
          </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
    </div>
    <div class="card-footer text-center">
      <a href="<?php echo e(route('members', ['status'=>'active'])); ?>">View All Users</a>
    </div>
  </div>
</div>
<?php /**PATH /var/www/web/aiomlm/resources/views/dashboard/latest-members.blade.php ENDPATH**/ ?>