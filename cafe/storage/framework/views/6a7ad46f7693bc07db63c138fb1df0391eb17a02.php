
<?php $__env->startSection("title", "Cliente List"); ?>
<?php $__env->startSection("content"); ?>
<a href="/newcliente" class="btn btn-primary">New cliente</a>
<table class="table table-primary">
    <br>
    <thead>
        <tr>
            <th>
                Firstname
            </th>
            <th>
                Lastname
            </th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td>
                <?php echo e($cliente->firstname); ?>

            </td>
            <td>
                <?php echo e($cliente->lastname); ?>

            </td>
            <td>
                <?php echo e(Form::open(["url" => "/clientes", "method" => "delete"])); ?>

                    <input type="hidden" name="id" value="<?php echo e($cliente->id); ?>">
                    <a href="<?php echo e('/editcliente/' . $cliente->id); ?>" class="btn btn-primary">Edit</a>
                    <button type="submit" class="btn btn-primary">Delete</button>
                <?php echo e(Form::close()); ?>

            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("templates.main", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\NITRO\Desktop\project database\cafe\resources\views/clientes/list.blade.php ENDPATH**/ ?>