<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="mb-4">学生表示</h1>
<div class="search mt-5">
    <h2>検索条件で絞り込み</h2>
    <form action="<?php echo e(route('students.index')); ?>" method="GET" class="row g-3">

        <!-- 商品名検索用の入力欄 -->
        <div class="col-sm-12 col-md-3">
            <input type="text" name="search" class="form-control" placeholder="名前" value="<?php echo e(request('search')); ?>">
        </div>
        <!-- 絞り込みボタン -->
        <div class="col-sm-12 col-md-1">
            <button class="btn btn-outline-secondary" type="submit">絞り込み</button>
        </div>
    </form>
</div>

<!-- 検索条件をリセットするためのリンクボタン -->
<a href="<?php echo e(route('students.index')); ?>" class="btn btn-success mt-3">検索条件を元に戻す</a>



    <div class="products mt-5">
        <h2>検索結果</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>学年</th>
                    <th>名前</th>
                </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($student->grade); ?></td>
                    <td><?php echo e($student->name); ?></td>
                    <td>
                        <a href="<?php echo e(route('students.show', $student)); ?>" class="btn btn-info btn-sm mx-1">詳細表示</a>
                        <form method="POST" action="<?php echo e(route('students.destroy', $student)); ?>" class="d-inline">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger btn-sm mx-1">削除</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/practice/resources/views/students/index.blade.php ENDPATH**/ ?>