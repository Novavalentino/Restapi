
<h1 class="h2">Data User</h1>

<?php if(session()->has('success')): ?>
        <div class="alert alert-success col-lg-12" role="alert">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

<div class="table-responsive col-lg-12">
    <table class="table table-sm table-bordered table-hover  border-dark">
        <thead>
            <tr>
                <th>No</th>
                <th>First Name</th>
                <th>Last Name</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $number = 1;
            ?>
            <?php $__empty_1 = true; $__currentLoopData = $users['data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <td><?php echo e($number++); ?></td>
                <td><?php echo e($user['firstName']); ?></td>
                <td><?php echo e($user['lastName']); ?></td>
                <td align="center">
                    <a href="<?php echo e('users/'.$user['id']); ?>" class="text-primary"><i class="fa fa-fw fa-edit"></i> Edit</a> |
                    <a href="<?php echo e('users/'.$user['id']); ?>" class="text-danger" onClick="return confirm('Are you sure to delete this user?');"><i class="fa fa-fw fa-trash"></i> Delete</a>
                </td>

            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr><td colspan="6" align="center">No Record(s) Found!</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
    <div class="text-end">
        <a href="<?php echo e(route('users.create')); ?>" class="btn btn-primary mb-3">Create new User</a>
    </div>

    <?php echo e($users->links()); ?>

</div>

<?php /**PATH E:\xampp\htdocs\restapi\resources\views/users/index.blade.php ENDPATH**/ ?>