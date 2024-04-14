<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>学生編集</h2></div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('students.update', $student)); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>

                        <div class="mb-3">
                            <label for="grade" class="form-label">学年</label>
                            <select class="form-select" id="grade" name="grade">
                                <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($student->grade); ?>" ></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">名前</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?php echo e($student->name); ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label">住所</label>
                            <input type="text" class="form-control" id="address" name="address" value="<?php echo e($student->address); ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="img_path" class="form-label">顔写真:</label>
                            <input id="img_path" type="file" name="img_path" class="form-control">
                            <img src="<?php echo e(asset($student->img_path)); ?>" alt="顔写真" class="student-image">
                        </div>

                        <div class="mb-3">
                            <label for="comment" class="form-label">コメント</label>
                            <textarea id="comment" name="comment" class="form-control" rows="3"><?php echo e($student->comment); ?></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">編集</button>
                        <a href="<?php echo e(route('students.show')); ?>" class="btn btn-primary mt-1 mb-3">戻る</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/practice/resources/views/students/edit.blade.php ENDPATH**/ ?>