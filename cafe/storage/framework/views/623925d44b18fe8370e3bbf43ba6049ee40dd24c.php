
<?php $__env->startSection("title", "Menu List"); ?>
<?php $__env->startSection("content"); ?>
<a href="/newmenu" class="btn btn-primary">New menu</a>
<table class="table table-primary">
    <br>
    <thead>
        <tr>
            <th>
                Name
            </th>
            <th>
                Description
            </th>
            <th>
                Quantity
            </th>
            <th>
                Price
            </th>
            
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td>
                <?php echo e($menu->name); ?>

            </td>
            <td>
                <?php echo e($menu->description); ?>

            </td>
            <td>
                <?php echo e($menu->quantity); ?>

            </td>
            <td>
                <?php echo e($menu->price); ?>

            </td>
            
            <td>
                <?php echo e(Form::open(["url" => "/menus", "method" => "delete"])); ?>

                    <input type="hidden" name="id" value="<?php echo e($menu->id); ?>">
                    <a href="<?php echo e('/editmenus/' . $menu->id); ?>" class="btn btn-primary">Edit</a>
                    <button type="submit" class="btn btn-primary">Delete</button>
                <?php echo e(Form::close()); ?>

            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("templates.main", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\NITRO\Desktop\project database\cafe\resources\views/menus/list.blade.php ENDPATH**/ ?>