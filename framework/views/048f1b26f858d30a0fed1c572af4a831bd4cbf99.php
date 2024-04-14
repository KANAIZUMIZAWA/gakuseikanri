<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="mb-4">学生登録</h1>
    <form method="POST" action="<?php echo e(route('students.store')); ?>" enctype="multipart/form-data">

        <?php echo csrf_field(); ?>

        <div class="mb-3">
            <label for="name" class="form-label">名前:</label>
            <input id="name" type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">住所:</label>
            <input id="address" type="text" name="address" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="img_path" class="form-label">顔写真:</label>
            <input id="img_path" type="file" name="img_path" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">登録</button>
        <a href="<?php echo e(route('home')); ?>" class="btn btn-primary mb-3">戻る</a>
    </form>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/practice/resources/views/students/create.blade.php ENDPATH**/ ?>