<a class="create" href="<?php echo e(route('users.create')); ?>">Create</a>
<table>
    <tbody>
        <th>No</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Action</th>
        <?php
            $number = 1;
        ?>
            
        <?php $__empty_1 = true; $__currentLoopData = $users['data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <tr>
            <td><?php echo e($number++); ?></td>
            <td><?php echo e($user['firstName']); ?></td>
            <td><?php echo e($user['lastName']); ?></td>
            <td align="center">
                
                <form method="POST" action="<?php echo e('users/'.$user['id']); ?>">
                    <?php echo method_field('DELETE'); ?>
                    <?php echo csrf_field(); ?>

                    <a class="edit" href="<?php echo e('users/'.$user['id']); ?>" class="text-primary"><i class="fa fa-fw fa-edit"></i> Edit</a> |
                    <button class="button" type="submit" class="text-danger btn btn-link" onClick="return confirm('Are you sure to delete this user?');"><i class="fa fa-fw fa-trash"></i> Delete</button>
                </form>
            </td>

        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr><td colspan="6" align="center">No Record(s) Found!</td></tr>
        <?php endif; ?>
    </tbody>
</table><?php /**PATH E:\xampp\htdocs\restapi\resources\views/user/index.blade.php ENDPATH**/ ?>