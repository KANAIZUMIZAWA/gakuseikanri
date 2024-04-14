<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="mb-4">成績登録</h1>
    <form method="POST" action="<?php echo e(route('school_grades.store')); ?>" enctype="multipart/form-data">

        <?php echo csrf_field(); ?>

        <div class="mb-3">
            <label for="grade" class="form-label">学年</label>
            <select class="form-select" id="grade" name="grade">
                <?php $__currentLoopData = $school_grades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $school_grade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($school_grades->grade); ?>" ></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="term" class="form-label">学期</label>
            <select class="form-select" id="term" name="term">
                <?php $__currentLoopData = $school_grades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $school_grade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($school_grades->term); ?>" ></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="japanese" class="form-label">国語</label>
            <select class="form-select" id="japanese" name="japanese">
                <?php $__currentLoopData = $school_grades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $school_grade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($school_grades->japanese); ?>" ></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="math" class="form-label">数学</label>
            <select class="form-select" id="math" name="math">
                <?php $__currentLoopData = $school_grades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $school_grade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($school_grades->math); ?>" ></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="science" class="form-label">理科</label>
            <select class="form-select" id="science" name="science">
                <?php $__currentLoopData = $school_grades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $school_grade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($school_grades->science); ?>" ></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="social_studies" class="form-label">社会</label>
            <select class="form-select" id="social_studies" name="social_studies">
                <?php $__currentLoopData = $school_grades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $school_grade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($school_grades->social_studies); ?>" ></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="music" class="form-label">音楽</label>
            <select class="form-select" id="music" name="music">
                <?php $__currentLoopData = $school_grades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $school_grade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($school_grades->music); ?>" ></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="home_economics" class="form-label">家庭科</label>
            <select class="form-select" id="home_economics" name="home_economics">
                <?php $__currentLoopData = $school_grades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $school_grade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($school_grades->home_economics); ?>" ></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="english" class="form-label">英語</label>
            <select class="form-select" id="english" name="english">
                <?php $__currentLoopData = $school_grades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $school_grade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($school_grades->english); ?>" ></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="art" class="form-label">美術</label>
            <select class="form-select" id="art" name="art">
                <?php $__currentLoopData = $school_grades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $school_grade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($school_grades->art); ?>" ></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="health_and_physical_education" class="form-label">保健体育</label>
            <select class="form-select" id="health_and_physical_education" name="health_and_physical_education">
                <?php $__currentLoopData = $school_grades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $school_grade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($school_grades->health_and_physical_education); ?>" ></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">登録</button>
        <a href="<?php echo e(route('students.show')); ?>" class="btn btn-primary mb-3">戻る</a>
    </form>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/practice/resources/views/school_grades/create.blade.php ENDPATH**/ ?>