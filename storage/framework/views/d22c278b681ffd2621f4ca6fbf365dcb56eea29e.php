<?php echo $__env->make('layouts.navbars.navs.guest', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="wrapper wrapper-full-page">
  <div class="page-header login-page header-filter" filter-color="black" style="background-image: url('<?php echo e(asset('material')); ?>/img/login.jpg'); background-size: cover; background-position: top center;align-items: center;" data-color="purple">
  <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('layouts.footers.guest', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  </div>
</div>
