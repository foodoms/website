<html>
    <head>
        <title>Foodoms| <?php echo $__env->yieldContent('title'); ?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php $__currentLoopData = assets('css'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $css): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <link rel="stylesheet" href="<?php echo e(env('APP_URL', '') . '/assets/css/' . $css); ?>">
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php $__currentLoopData = assets('js'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $js): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <script src="<?php echo e(env('APP_URL', '') . '/assets/js/' . $js); ?>"></script>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </head>
    <body>
        <div class="container">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
        <?php echo $__env->yieldContent('scripts'); ?>
    </body>
</html><?php /**PATH /var/www/apps/dev/foodoms.com/resources/views/layouts/app.blade.php ENDPATH**/ ?>